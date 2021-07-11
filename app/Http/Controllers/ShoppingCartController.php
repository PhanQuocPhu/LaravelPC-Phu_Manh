<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use DB;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

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
        /*  $vnp_TxnRef = randString(15);
        dd($vnp_TxnRef); */
        return view('shopping.index', compact('products'));
    }

    //Form thanh toán
    public function getFormPay()
    {
        $products = \Cart::content();

        return view('shopping.pay', compact('products'));
    }

    //Lưu thông tin giỏ hàng - Post từ view - Đặt hàng
    public function saveInfoShoppingCart(Request $request)
    {
        /* dd($request->all()); */
        $totalMoney = str_replace(',', '', \Cart::subtotal(0, 3));
        $totalMoney = (int) $totalMoney;
        /*  $data = $request->except("_token", "payment"); */
        $data['tr_user_id'] = \Auth::user()->id;
        $data['tr_total'] = $totalMoney;
        $data['tr_note'] =  $request->note;
        $data['tr_address'] = $request->address;
        $data['tr_phone'] = $request->phone;
        $data['tr_status'] = 2;
        $data['tr_payment'] = 1;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();

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
        $user = User::find(get_data_user('web'));
        $products = \Cart::content();
        $total = \Cart::subtotal();
        $viewData = [
            'user' => $user,
            'products' => $products,
            'total' => $total,
            'transactionId' => $transactionId,
        ];
        $emails = get_data_user('web', 'email') ?? '';
        //Gửi mail
        \Mail::to($emails)->send(new SendMail($viewData));
        \Cart::destroy();
        return view('shopping.pay_return', $viewData)/*  redirect('/') */;
    }

    public function saveInfoShoppingCart1(Request $request)
    {
        $user = User::find(get_data_user('web'));
        $products = \Cart::content();
        $transactionId = 1;
        $total = \Cart::subtotal();
        $viewData = [
            'user' => $user,
            'products' => $products,
            'total' => $total,
            'transactionId' => $transactionId,
        ];
        $emails = get_data_user('web', 'email') ?? '';
        //Gửi mail
        \Mail::to($emails)->send(new SendMail($viewData));
        dd('OK');
    }



    //Thanh toán online
    public function createPayment(Request $request)
    {
        /* dd($request->toArray()); */
        $vnp_TxnRef = randString(15); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_HashSecret = env('VNP_HASH_SECRET');
        $vnp_OrderInfo = 'Thanh toán đơn hàng';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = str_replace(',', '', \Cart::subtotal(0)) * 100;
        $vnp_Locale = 'vn';
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
        /* dd($inputData); */
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
            /* dd($vnp_HashSecret); */
            /* $vnpSecureHash = md5($vnp_HashSecret . $hashdata); */
            $vnpSecureHash = hash('sha256', env('VNP_HASH_SECRET') . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        /* dd($vnp_HashSecret); */
        return redirect($vnp_Url);
    }

    public function vnpayReturn(Request $request)
    {
        /* dd($request->all()); */
        //Kiểm tra data trong session và tình trạng xử lý giao dịch -> '00' là success
        if (session()->has('info_customer') && $request->vnp_ResponseCode == '00') {

            \DB::beginTransaction();

            try {
                $vnpayData = $request->all();
                $data = session()->get('info_customer');
                /* dd($data); */
                $transactionID = DB::table('transactions')->insertGetID($data);
                /* dd($transactionID); */
                if ($transactionID) {
                    $shopping = \Cart::content();

                    foreach ($shopping as $key => $item) {
                        //lưu chi tiết đơn hàng
                        Order::insert([
                            'or_transaction_id' => $transactionID,
                            'or_product_id' => $item->id,
                            'or_qty' => $item->qty,
                            'or_price' => $item->options->price_old,
                            'or_sale' => $item->options->sale
                        ]);

                        //Tăng pay
                        \DB::table('products')->where('id', $item->id)->increment("pro_pay");
                    }
                    /* dd('done'); */
                    /* dd( $data['tr_total_money']); */
                    $dataPayment = [
                        'p_transaction_id' => $transactionID,
                        'p_transaction_code' => $vnpayData['vnp_TxnRef'],
                        'p_user_id' => $data['tr_user_id'],
                        'p_money' => $data['tr_total'],
                        'p_note' => $vnpayData['vnp_OrderInfo'],
                        'p_vnp_response_code' => $vnpayData['vnp_ResponseCode'],
                        'p_code_vnp' => $vnpayData['vnp_TransactionNo'],
                        'p_code_bank' => $vnpayData['vnp_BankCode'],
                        'p_time' => date('Y-m-d H:i', strtotime($vnpayData['vnp_PayDate']))
                    ];
                    /* dd('done'); */
                    /* dd($dataPayment); */
                    DB::table('payments')->insert($dataPayment);
                    /* dd('done'); */
                }
                \DB::commit();
                $user = User::find(get_data_user('web'));
                $products = \Cart::content();
                $total = \Cart::subtotal();
                $viewData = [
                    'user' => $user,
                    'products' => $products,
                    'total' => $total,
                    'transactionID' => $transactionID,
                    'vnpayData' => $vnpayData,
                ];
                \Cart::destroy();
                $emails = get_data_user('web', 'email') ?? '';
                //Gửi mail
                \Mail::to($emails)->send(new SendMail($viewData));
                return view('vnpay.vnpay_return', $viewData)->with('success', 'Đơn hàng của bạn đã được lưu');
            } catch (\Exception $exception) {
                /* dd('Exception'); */
                \DB::rollBack();
                return redirect('/')->with('error', 'Đã xảy ra lỗi, không thể thanh toán đơn hàng');
            }
        } else {
            /* dd('nodata'); */
            return redirect('/')->with('error', 'Đã xảy ra lỗi, không thể thanh toán đơn hàng');
        }
        //

    }
}
