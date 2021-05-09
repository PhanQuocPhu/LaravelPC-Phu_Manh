<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends FrontendController
{
    public function _construct()
    {
        parent::_contruct();
    }
    
    public function getListProduct(Request $request)
    {
        
        $url = $request->segment(2);
        $url = preg_split('/(-)/i', $url);

        if($id = array_pop($url) )
        {
            $products = Product::where([
                'pro_category_id'=>$id, 
                'pro_active'=>Product::STATUS_PUBLIC
            ])->orderBy('id', 'DESC')->paginate(10);

            $cateProduct = Category::find($id);
            $viewData = [
                'products'=>$products,
                'cateProduct'=>$cateProduct
            ];

            return view('product.index', $viewData);
        }
        return redirect('/');
    }
}
