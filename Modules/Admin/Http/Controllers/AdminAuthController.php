<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminAuthController extends Controller
{
   public function getLogin()
   {
       return view('admin::auth.login');
   }
   public function postLogin(Request $request)
   {
       dd($request->all());
   }
}
