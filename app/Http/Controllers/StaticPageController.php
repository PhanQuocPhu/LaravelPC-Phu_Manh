<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function getGuarantee()
    {
        return view('Static.guarantee');
    }
    public function getInstallment()
    {
        return view('Static.installment');
    }
    public function getShipping()
    {
        dd('ha ha');
    }


}
