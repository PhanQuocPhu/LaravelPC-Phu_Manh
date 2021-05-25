<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $transactions = Transaction::with('user:id,name')->paginate(10);
        $viewData = [
            'transactions' => $transactions,
        ];
        /* return response()->json($html); */
        return view('admin::transaction.index', $viewData);
    }

    //Load dữ liệu ra html rồi bỏ vào ajax
    public function viewOrder(Request $request, $id)
    {
        if ($request->ajax()) {
            $orders = Order::with('product')->where('or_transaction_id', $id)->get();
            $transnote = Transaction::find($id);
            $viewData = [
                'orders' => $orders,
                'transnote' => $transnote
            ];
            $html = view('admin::components.order', $viewData)->render();
            return response()->json($html);
        }
    }

    /* Xử lý trạng thái đơn hàng */
    public function actionTransaction($id)
    {
        $transaction = Transaction::find($id);
        $orders = Order::where('or_transaction_id', $id)->get();

        if ($orders) {
            foreach ($orders as $order) {
                $product = Product::find($order->or_product_id);
                //Trừ đi số lượng sản phẩm
                if ($product->pro_number >=  $order->or_qty) {
                    $product->pro_number = $product->pro_number - $order->or_qty;
                    //Tăng pro_pay sản phẩm
                    $product->pro_pay++;
                    $product->save();
                    //Cập nhật lại trạng thái đơn hàng
                    \DB::table('users')->where('id', $transaction->tr_user_id)->increment('total_pay');
                    $transaction->tr_status = Transaction::STATUS_DONE;
                    $transaction->save();
                } else {
                    return redirect()->back()->with('error', 'Tồn kho không đủ, vui lòng kiểm tra lại số lượng sản phẩm');
                }
            }
        }
        return redirect()->back()->with('success', 'Xử lý đơn hàng thành công');
    }

    //Xử lý trạng thái đơn hàng Ajax
    public function actionTransactionAjax($action, $id)
    {
        if ($action) {
            $transaction = Transaction::find($id);
            switch ($action) {
                case 'done': {
                        $transaction->tr_status = Transaction::STATUS_DONE;
                        $transaction->save();
                    }
                    break;
                case 'shipping': {
                        $orders = Order::where('or_transaction_id', $id)->get();
                        if ($orders) {
                            foreach ($orders as $order) {
                                $product = Product::find($order->or_product_id);
                                //Trừ đi số lượng sản phẩm
                                if ($product->pro_number >=  $order->or_qty) {
                                    $product->pro_number = $product->pro_number - $order->or_qty;
                                    //Tăng pro_pay sản phẩm
                                    $product->pro_pay++;
                                    $product->save();
                                    //Cập nhật lại trạng thái đơn hàng
                                    \DB::table('users')->where('id', $transaction->tr_user_id)->increment('total_pay');
                                    $transaction->tr_status = Transaction::STATUS_SHIPPING;
                                    $transaction->save();
                                }
                            }
                        }
                    }
                    break;
                case 'delete':
                    $transaction->delete();
                    break;
            }
            $transactions = Transaction::with('user:id,name')->paginate(10);
            $viewData = [
                'transactions' => $transactions,
            ];
            $html = view('admin::components.transaction_data', $viewData)->render();
            return response()->json($html);
        }
    }
}
