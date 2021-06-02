<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use DB;
use function GuzzleHttp\Promise\all;

class ShoppingCartController extends FrontendController
{
    public function _construct()
    {
        parent::_contruct();
    }
    //Thêm giỏ hàng
    public function addProduct(Request $request, $id)
    {
        $product = Product::select('pro_name', 'id', 'pro_price', 'pro_sale', 'pro_avatar', 'pro_number')->find($id);

        if (!$product) {
            return redirect('/');
        }

        $price = $product->pro_price;
        if ($product->pro_sale) {
            $price = $price * (100 - $product->pro_sale) / 100;
        }

        if ($product->pro_number == 0) {
            return redirect()->back()->with('warning', 'Sản phẩm đang tạm hết hàng');
        }
        \Cart::add([
            'id' => $id,
            'name' => $product->pro_name,
            'qty' => 1,
            'price' => $price,
            'weight' => 550,
            'options' => [
                'avatar' => $product->pro_avatar,
                'sale' => $product->pro_sale,
                'price_old' => $product->pro_price
            ],
        ]);
        return redirect()->back()->with('success', 'Đã thêm vào giỏ hàng thành công');
    }
    //Thêm bằng ajax
    public function addProductAjax(Request $request, $id)
    {
        $product = Product::select('pro_name', 'id', 'pro_price', 'pro_sale', 'pro_avatar', 'pro_number')->find($id);

        if (!$product) {
            return redirect('/');
        }

        $price = $product->pro_price;
        if ($product->pro_sale) {
            $price = $price * (100 - $product->pro_sale) / 100;
        }

        if ($product->pro_number == 0) {
            return redirect()->back()->with('warning', 'Sản phẩm đang tạm hết hàng');
        }
        \Cart::add([
            'id' => $id,
            'name' => $product->pro_name,
            'qty' => 1,
            'price' => $price,
            'weight' => 550,
            'options' => [
                'avatar' => $product->pro_avatar,
                'sale' => $product->pro_sale,
                'price_old' => $product->pro_price
            ],
        ]);
        return response(\Cart::count());
    }
    //Xóa
    public function deleteProductItem($key)
    {
        \Cart::remove($key);
        return redirect()->back();
    }
    //Xóa bằng ajax
    public function deleteProductItemAjax($key)
    {
        \Cart::remove($key);
        $products = \Cart::content();
        $html = view('shopping.content', compact('products'))->render();
        return response()->json($html);
    }

    //Load dữ liệu ra html rồi bỏ vào ajax
    public function viewOrder(Request $request, $id)
    {
        if ($request->ajax()) {
            $orders = Order::with('product')->where('or_transaction_id', $id)->get();
            $transnote = Transaction::find($id);
            $cart_count = \Cart::count();
            $viewData = [
                'orders' => $orders,
                'transnote' => $transnote,
                'cart_count' => $cart_count
            ];
            $html = view('component.cart_index', $viewData)->render();
            return response()->json($html);
        }
    }

    //Danh sách giỏ hàng
    public function getListShoppingCart()
    {
        $products = \Cart::content();
        /* return View::make('shopping.index', compact('products'))->nest('home', compact('products')); */
        return view('shopping.index', compact('products'));
    }

    //Form thanh toán
    public function getFormPay()
    {
        $products = \Cart::content();
        return view('shopping.pay', compact('products'));
    }

    //Lưu thông tin giỏ hàng - Post từ view
    public function saveInfoShoppingCart(Request $request)
    {
        /* dd($request->all()); */
        $data = $request->except("_token", "payment");

        $data['tr_user_id'] = \Auth::user()->id;
        $data['tr_total'] = str_replace(',', '', \Cart::subtotal(0));
        $data['created_at'] = Carbon::now();

        $totalMoney = str_replace(',', '', \Cart::subtotal(0, 3));
        $totalMoney = (int) $totalMoney;
        if ($request->payment == 2) {
            session(['info_customer' => $data]);
            return view('vnpay.index', compact('totalMoney'));
        } else {
            $transactionId = DB::table('transactions')->insertGetID([
                'tr_user_id' => get_data_user('web'),
                'tr_total' => $totalMoney,
                'tr_note' => $request->note,
                'tr_address' => $request->address,
                'tr_phone' => $request->phone,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            if ($transactionId) {
                $products = \Cart::content();
                foreach ($products as $product) {
                    Order::insert([
                        'or_transaction_id' => $transactionId,
                        'or_product_id' => $product->id,
                        'or_qty' => $product->qty,
                        'or_price' => $product->options->price_old,
                        'or_sale' => $product->options->sale
                    ]);
                }
            }
        }
        \Cart::destroy();
        return redirect('/');
    }

    public function createPayment(Request $request)
    {
        /* dd($request->toArray()); */
        $vnp_TxnRef = randString(15); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_HashSecret = env('VNP_HASH_SECRET');
        $vnp_OrderInfo = $request->order_desc;
        $vnp_OrderType = $request->order_type;
        $vnp_Amount = str_replace(',', '', \Cart::subtotal(0)) * 100;
        $vnp_Locale = $request->language;
        $vnp_BankCode = $request->bank_code;
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => env('VNP_TMN_CODE'),
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => route('vnpay.return'),
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);

        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = env('VNP_URL') . "?" . $query;
        if (isset($vnp_HashSecret)) {
            // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', env('VNP_HASH_SECRET') . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }
    public function vnpayReturn(Request $request)
    {
        dd($request->all());
    }
}
