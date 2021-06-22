<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestProduct;
use App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;
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

        $products = $products->orderBy('id', 'desc')->get();

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


    //Thêm 
    public function create()
    {
        $categories = $this->getCategories();
        return view('admin::product.create', compact('categories'));
    }
    public function store(RequestProduct $requestProduct)
    {
        $data = $this->GetData($requestProduct);
        /* dd($data); */
        $id = Product::insertGetId($data);
        if ($id) {
            if ($requestProduct->file) {
                $this->SyncAlbum($requestProduct->file, $id);
            }
        }
        return redirect()->back()->with('success', 'Lưu thành công');
    }

    //Sửa
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = $this->getCategories();
        $images = \DB::table('product_images')->where('pi_product_id', $id)->get();
        $viewData=[
            'product'=>$product,
            'categories'=>$categories,
            'images'=>$images ?? [],
        ];
        return view('admin::product.update', $viewData);
    }

    public function update(RequestProduct $requestProduct, $id)
    {

        $data = $this->GetData($requestProduct);
        $product = Product::find($id);

        $update = $product->update($data);
        if ($update) {
            if ($requestProduct->hasFile('file')) {
                $this->SyncAlbum($requestProduct->file, $id);
            }
        }

        return redirect()->back()->with('success', 'Cập nhật thành công');
    }



    public function SyncAlbum($files, $productId)
    {
        foreach ($files as $key => $fileImage) {
            $ext = $fileImage->getClientOriginalExtension();
            $extend = ['png', 'jpg', 'jpeg', 'PNG', 'JPG'];
            if (!in_array($ext, $extend)) return false;
            $filename = date('Y-m-d__') . Str::slug($fileImage->getClientOriginalName()) . '.' . $ext;
            $path = public_path() . '/uploads/' . date('Y/m/d/');
            if (!\File::exists($path)) {
                mkdir($path, 0777, true);
            }
            $fileImage->move($path, $filename);
            \DB::table('product_images')
            ->insert([
                'pi_name'=>$fileImage->getClientOriginalName(),
                'pi_slug'=>$filename,
                'pi_product_id'=>$productId,
                'created_at'=>Carbon::now()
            ]);
        }
    }
    public function deleteImg($idImage)
    {
        \DB::table('product_images')->where('id', $idImage)->delete();
        return redirect()->back()->with('success', 'Cập nhật thành công');
    }

    public function GetData($request)
    {
        $data = $request->except('_token', 'pro_avatar', 'file');
        $data['pro_slug'] = Str::slug($request->pro_name);
        $data['created_at'] = Carbon::now();
        $data['pro_title_seo'] = $request->pro_title_seo ? $request->pro_title_seo : $request->pro_name;
        $data['pro_description_seo'] = $request->pro_description_seo ? $request->pro_description_seo : $request->pro_name;
        if ($request->hasFile('pro_avatar')) {
            $image = upload_image('pro_avatar');

            if (isset($image['name'])) {
                $data['pro_avatar'] = $image['name'];
            }
        }
        return $data;
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
