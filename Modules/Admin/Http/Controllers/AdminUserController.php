<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Routing\Controller;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $users = User::whereRaw(1);

        $users = $users->orderBy('id', 'DESC')->paginate(10);
        $viewData = [
            'users' => $users
        ];
        return view('admin::user.index', $viewData);
    }

    
}
