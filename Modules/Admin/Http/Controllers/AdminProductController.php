<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestProduct;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class AdminProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with('category:id,c_name');

        if ($request->name) $products->where('pro_name', 'like', '%' . $request->name . '%');
        if ($request->cate) $products->where('pro_category_id', $request->cate);

        $products = $products->orderBy('id', 'desc')->paginate(10);

        $categories = $this->getCategories();
        $viewData = [
            'products' => $products,
            'categories' => $categories
        ];
        return view('admin::product.index', $viewData);
    }
    public function getCategories()
    {
        return Category::all();
    }

    public function create()
    {
        $categories = $this->getCategories();
        return view('admin::product.create', compact('categories'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = $this->getCategories();
        return view('admin::product.update', compact('product', 'categories'));
    }
    
    public function update(RequestProduct $requestProduct, $id)
    {
        $this->insertOrUpdate($requestProduct, $id);

        return redirect()->back()->with('success', 'Cập nhật thành công');
    }

    public function store(RequestProduct $requestProduct)
    {
        $this->insertOrUpdate($requestProduct);
        return redirect()->back()->with('success', 'Lưu thành công');
    }


    public function insertOrUpdate($requestProduct, $id = '')
    {
        $product = new Product();
        if ($id) {
            $product = Product::find($id);
        }

        $product->pro_name = $requestProduct->pro_name;
        $product->pro_slug = Str::slug($requestProduct->pro_name);
        $product->pro_category_id = $requestProduct->pro_category_id;
        $product->pro_price = $requestProduct->pro_price;
        $product->pro_sale = $requestProduct->pro_sale;
        $product->pro_number = $requestProduct->pro_number;
        $product->pro_description = $requestProduct->pro_description;
        $product->pro_content = $requestProduct->pro_content;
        $product->pro_title_seo = $requestProduct->pro_title_seo ? $requestProduct->pro_title_seo : $requestProduct->pro_name;
        $product->pro_description_seo = $requestProduct->pro_description_seo ? $requestProduct->pro_description_seo : $requestProduct->pro_name;



        if ($requestProduct->hasFile('avatar')) {
            $file = upload_image('avatar');

            if (isset($file['name'])) {
                $product->pro_avatar = $file['name'];
            }
        }
        $product->save();
    }

    //Action
    public function action($action, $id)
    {
        $message = '';
        if ($action) {
            $product = Product::find($id);
            switch ($action) {
                case 'delete':
                    $message = 'Xóa thành công';
                    $product->delete()->with('success', $message);
                    break;
                case 'active':
                    $product->pro_active = $product->pro_active ? 0 : 1;
                    $product->save();
                    break;
                case 'hot':
                    $product->pro_hot = $product->pro_hot ? 0 : 1;
                    $product->save();
                    break;
            }
        }
        return redirect()->back();
    }

    //Action Ajax //Load dữ liệu ra html rồi bỏ vào ajax
    public function actionAjax($action, $id)
    {
        if ($action) {
            $product = Product::find($id);
            switch ($action) {
                case 'delete':
                    $product->delete();
                    break;
                case 'active':
                    $product->pro_active = $product->pro_active ? 0 : 1;
                    $product->save();
                    break;
                case 'hot':
                    $product->pro_hot = $product->pro_hot ? 0 : 1;
                    $product->save();
                    break;
            }
            $products = Product::orderBy('id', 'desc')->paginate(10);
            $viewData = [
                'products' => $products,
            ];
            $html = view('admin::components.product_data', $viewData)->render();
            return response()->json($html);
        }
    }
}
