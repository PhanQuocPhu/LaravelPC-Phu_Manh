<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite, Redirect, Session, URL;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    public function getLogin(Request $request)
    {
        if (!Session::has('pre_url')) {
            Session::put('pre_url', URL::previous());
            
        } else {
            if (URL::previous() != URL::to('dang-nhap')) Session::put('pre_url', URL::previous());
        }
        session(['link' => url()->previous()]);
        if(Auth::check())
        {
            return redirect(session('link'))->with('success', "Bạn đã đăng nhập");
        }
        return view('auth.login');
    }
    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (\Auth::attempt($credentials)) {
            // Authentication passed...
            if (Auth::check()) {
                return redirect(session('link'))->with('success', "Đăng nhập thành công");
            }
            return redirect(session('link'));
            /* return redirect()->route('home'); */
        } return view('auth.login')->with('error', "Sai tài khoản hoặc mật khẩu");
    }
    public function getLogout()
    {
        \Auth::logout();
        return redirect()->route('home');
    }
}
