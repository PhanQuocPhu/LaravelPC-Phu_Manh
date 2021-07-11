<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends FrontendController
{
    public function _construct()
    {
        parent::_contruct();
    }
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
        return view('Static.shipping');
    }


}
