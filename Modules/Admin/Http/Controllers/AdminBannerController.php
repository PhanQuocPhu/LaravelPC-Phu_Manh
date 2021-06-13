<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function indexOb(Request $request)
    {
       
        return view('admin::banner.outbanner.index');
    }
    public function indexSb(Request $request)
    {
       
        return view('admin::banner.slidebanner.index');
    }
}
