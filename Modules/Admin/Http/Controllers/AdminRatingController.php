<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Rating;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $ratings = Rating::with('user:id,name', 'product:id,pro_name')->orderBy('created_at', 'desc')->paginate(10);

        $viewData = [ 'ratings'=>$ratings];
        return view('admin::rating.index', $viewData);
    }

    
}
