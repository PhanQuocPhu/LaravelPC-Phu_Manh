<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Category;
use App\Models\OutBanner;
use App\Models\SlideBanner;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminBannerController extends Controller
{
    public function indexOb(Request $request)
    {
        $outbanners = OutBanner::get();
        return view('admin::banner.outbanner.index', compact('outbanners'));
    }


    public function createOb()
    {
        $categories = $this->getCategories();
        return view('admin::banner.outbanner.create', compact('categories'));
    }

    public function storeOb(Request $request)
    {
        
        $this->insertOrUpdateOb($request);
        return redirect()->back()->with('success', 'Lưu thành công');
    }

    public function editOb($id)
    {
        $outbanner = OutBanner::find($id);
        $categories = $this->getCategories();
        return view('admin::banner.outbanner.update', compact('outbanner', 'categories'));
    }
    public function updateOb(Request $request, $id)
    {
        /* dd($request->all()); */
        $this->insertOrUpdateOb($request, $id);

        return redirect()->back()->with('success', 'Cập nhật thành công');
    }

    public function insertOrUpdateOb($request, $id = '')
    {
        $outbanner = new OutBanner();
        if ($id) {
            $outbanner = OutBanner::find($id);
        }
        $outbanner->ob_link = $request->ob_link;

        if ($request->hasFile('ob_img')) {
            $file = upload_image('ob_img');

            if (isset($file['name'])) {
                $outbanner->ob_img = $file['name'];
            }
        }
        $outbanner->save();
    }

    public function actionObAjax($action, $id)
    {
        if ($action) {
            $outbanner = OutBanner::find($id);
            switch ($action) {
                case 'delete':
                    $outbanner->delete();
                    break;
                case 'active':
                    $outbanner->ob_status = $outbanner->ob_status ? 0 : 1;
                    $outbanner->save();
                    break;
            }
            $outbanners = OutBanner::orderBy('id', 'desc')->paginate(10);
            $viewData = [
                'outbanners' => $outbanners,
            ];
            $html = view('admin::banner.outbanner.ob_data', $viewData)->render();
            return response()->json($html);
        }
    }


    

    /////////////////////////////
    public function getCategories()
    {
        return Category::all();
    }
    /////////////////////////////


    public function indexSb(Request $request)
    {
        $slidebanners = SlideBanner::get();
        return view('admin::banner.slidebanner.index', compact('slidebanners'));
    }


    public function createSb()
    {
        $categories = $this->getCategories();
        return view('admin::banner.slidebanner.create', compact('categories'));
    }

    public function storeSb(Request $request)
    {
        $this->insertOrUpdateSb($request);
        return redirect()->back()->with('success', 'Lưu thành công');
    }

    public function editSb($id)
    {
        $slidebanner = SlideBanner::find($id);
        $categories = $this->getCategories();
        return view('admin::banner.slidebanner.update', compact('slidebanner', 'categories'));
    }
    public function updateSb(Request $request, $id)
    {
        /* dd($request->all()); */
        $this->insertOrUpdateSb($request, $id);

        return redirect()->back()->with('success', 'Cập nhật thành công');
    }

    public function insertOrUpdateSb($request, $id = '')
    {
        $slidebanner = new SlideBanner();
        if ($id) {
            $slidebanner = SlideBanner::find($id);
        }
        $slidebanner->sb_link = $request->sb_link;

        if ($request->hasFile('sb_img')) {
            
            $file = upload_image('sb_img');
            /* dd($file['name']); */
            if (isset($file['name'])) {
                
                $slidebanner->sb_img = $file['name'];
            }
        }
        $slidebanner->save();
    }

    public function actionSbAjax($action, $id)
    {
        if ($action) {
            $slidebanner = SlideBanner::find($id);
            switch ($action) {
                case 'delete':
                    $slidebanner->delete();
                    break;
                case 'active':
                    $slidebanner->sb_status = $slidebanner->sb_status ? 0 : 1;
                    $slidebanner->save();
                    break;
            }
            $slidebanners = SlideBanner::orderBy('id', 'desc')->paginate(10);
            $viewData = [
                'slidebanners' => $slidebanners,
            ];
            $html = view('admin::banner.slidebanner.sb_data', $viewData)->render();
            return response()->json($html);
        }
    }
}