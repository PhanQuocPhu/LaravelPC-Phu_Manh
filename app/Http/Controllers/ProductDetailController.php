<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductDetailController extends Controller
{
    public function productDetail(Request $request)
    {
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);

        if($id = array_pop($url) )
        {
            $productDetail = Product::where('pro_active', Product::STATUS_PUBLIC)->find($id);
            $viewData = [
                'productDetail'=>$productDetail
            ];

            return view('product.detail', $viewData);
        }
        return redirect('/');

    }
}
