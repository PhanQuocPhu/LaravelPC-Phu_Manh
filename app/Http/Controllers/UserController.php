<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
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

    //Thông tin về đơn hàng
    public function UserTransaction()
    {
        //Thông tin các đơn hàng trong quá khứ
        $transactions = Transaction::where('tr_user_id', get_data_user('web'));
        $transactions = $transactions->addSelect('id', 'tr_total', 'tr_address', 'tr_phone', 'tr_status', 'created_at')->paginate(10);
        $listTransactions = $transactions;
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
        $totalMoney = Transaction::where('tr_status', Transaction::STATUS_DONE)->sum('tr_total');


        $viewData = [
            'totalTrans' => $totalTrans,
            'totalTransDone' => $totalTransDone,
            'totalMoney' => $totalMoney,
            'listTransactions' => $listTransactions
        ];
        return view('user.transaction', $viewData);
    }
}
