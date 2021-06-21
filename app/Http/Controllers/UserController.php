<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestPassword;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    /* Show tổng quan */
    public function info()
    {
        //Thông tin user
        $user = User::find(get_data_user('web'));

        $viewData = [
            'user' => $user,
        ];
        return view('user.index', $viewData);
    }

    //Cập nhật
    public function updateInfo()
    {
        $user = User::find(get_data_user('web'));

        return view('user.form', compact('user'));
    }

    public function saveInfo(Request $request)
    {
        $user = User::where('id', get_data_user('web'))->update($request->except('_token'));
        return redirect()->route('user.info')->with('success', 'Cập nhật thông tin thành công');
    }

    //Đổi mật khẩu
    public function updatePassword()
    {
        $user = User::find(get_data_user('web'));

        return view('user.password', compact('user'));
    }

    public function savePassword(RequestPassword $requestPassword)
    {
        if (Hash::check($requestPassword->password, get_data_user('web', 'password'))) {
            $user = User::find(get_data_user('web'));
            $user->password = bcrypt($requestPassword->newpassword);
            return redirect()->route('user.info')->with('success', 'Cập nhật thành công');
        }
        return redirect()->back()->with('danger', 'Mật khẩu không chính xác');
    }


    //Thông tin về đơn hàng
    public function UserTransaction()
    {
        //Thông tin các đơn hàng trong quá khứ
        $transactions = Transaction::where('tr_user_id', get_data_user('web'));
        $transactions = $transactions->addSelect('id', 'tr_total', 'tr_address', 'tr_phone', 'tr_status', 'created_at')->paginate(5);
        /* $listTransactions = $transactions; */
        //Tổng số đơn hàng
        $totalTrans = Transaction::where('tr_user_id', get_data_user('web'))
            ->select('id')
            ->count();
        //Tổng số đơn đã hoàn thành
        $totalTransDone = Transaction::where('tr_user_id', get_data_user('web'))
            ->where('tr_status', Transaction::STATUS_DONE)
            ->select('id')
            ->count();
        //Tổng số tiền đã tiêu
        $totalMoney = Transaction::where('tr_user_id', get_data_user('web'))->where('tr_status', Transaction::STATUS_DONE)->sum('tr_total');


        $viewData = [
            'totalTrans' => $totalTrans,
            'totalTransDone' => $totalTransDone,
            'totalMoney' => $totalMoney,
            'transactions' => $transactions
        ];
        return view('user.transaction', $viewData);
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
            $html = view('user.components.order', $viewData)->render();
            return response()->json($html);
        }
    }
}