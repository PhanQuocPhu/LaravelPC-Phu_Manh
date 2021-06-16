<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\OutBanner;
use App\Models\SlideBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontendController extends Controller
{
    public function __construct()
    {
        $categories = Category::where(['c_active'=>Category::STATUS_PUBLIC])->get();  
        $outBanners = OutBanner::where(['ob_status' => OutBanner::STATUS_PUBLIC])->limit(5)->get();
        $slideBanners = SlideBanner::where(['sb_status' => SlideBanner::STATUS_PUBLIC])->limit(8)->get();
        $firstSb = $slideBanners->first();
        $viewData = [
            'categories' => $categories,
            'outBanners' => $outBanners,
            'firstSb' => $firstSb,
            'slideBanners' => $slideBanners
        ];
        View::share($viewData);
    }
}
