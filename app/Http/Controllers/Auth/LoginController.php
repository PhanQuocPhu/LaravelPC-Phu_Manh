<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    public function getLogin(Request $request)
    {
        session(['link' => url()->previous()]);
        if(Auth::check())
        {
            return redirect(session('link'));
        }
        return view('auth.login');
    }
    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (\Auth::attempt($credentials)) {
            // Authentication passed...
            if (Auth::check()) {
                return redirect(session('link'));
            }
            return redirect(session('link'));
            /* return redirect()->route('home'); */
        } return view('auth.login');
    }
    public function getLogout()
    {
        \Auth::logout();
        return redirect()->route('home');
    }
}
