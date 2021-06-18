<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function getLogin()
    {
        return view('admin::auth.login');
    }
    public function postLogin(Request $request)
    {
        $data = $request->only('email', 'password');
        $default = ['email' =>'phanquocphu1998@gmail.com', 'password' => '123'];
        /* dd(Auth::guard('admins')); */
        if (Auth::guard('admins')->attempt($data)) {
            return redirect()->route('admin.home');
        }
        return redirect()->back();
    }
    public function logoutAdmin()
    {
        Auth::guard('admins')->logout();
        return redirect()->route('admin.login');
    }
}
