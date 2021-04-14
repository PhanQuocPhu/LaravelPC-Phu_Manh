<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends FrontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $productHot = Product::where(['pro_hot'=>Product::HOT_ON, 'pro_active'=>Product::STATUS_PUBLIC])->limit(5)->get();
        $productActive = Product::where(['pro_active'=>Product::STATUS_PUBLIC])->limit(5)->get();
        $productNews = $productActive->sortByDesc('id');
        $articleNews = Article::orderBy('id', 'DESC')->limit(6)->get();
        $latestNews = $articleNews->last();
        
        $viewData = ['productHot'=>$productHot, 'articleNews'=>$articleNews, 'latestNews'=>$latestNews,'productNews'=>$productNews];
        return view('home.index', $viewData);
    }
}
