<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestAdmin;
use App\Http\Requests\RequestUser;
use App\Models\Admin;
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
    //Quản lý user thông thường
    public function index()
    {
        $users = User::whereRaw(1);

        $users = $users->orderBy('id', 'DESC')->paginate(10);
        $viewData = [
            'users' => $users
        ];
        return view('admin::user.index', $viewData);
    }

    public function edit($id)
    {
        $user = User::find($id);
        /* dd($user->all()); */
        return view('admin::user.update', compact('user'));
    }

    public function update(RequestUser $requestUser, $id)
    {
        $this->insertOrUpdate($requestUser, $id);

        return redirect()->back()->with('success', 'Cập nhật thành công');
    }

    public function create()
    {
        return view('admin::user.create');
    }
    public function store(RequestUser $requestUser)
    {
       /*  dd($requestUser->all()); */
        $this->insertOrUpdate($requestUser);
        return $this->index()->with('success', 'Đã thêm thành viên mới');;
    }


    public function insertOrUpdate($requestUser, $id = '')
    {
        /* dd($request->email); */
        $user = new User();
        if ($id) {
            $user = User::find($id);
        }

        $user->name = $requestUser->name;
        $user->email = $requestUser->email;
        $user->phone = $requestUser->phone;
        $user->address = $requestUser->address;
        $user->password = bcrypt($requestUser->password);

        if ($requestUser->hasFile('avatar')) {
            $file = upload_image('avatar');

            if (isset($file['name'])) {
                $user->avatar = $file['name'];
            }
        }
        $user->save();
    }
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Quản lý tài khoản admin
    public function indexAdmin()
    {
        $admins = Admin::whereRaw(1);

        $admins = $admins->orderBy('id', 'DESC')->paginate(10);
        $viewData = [
            'admins' => $admins
        ];
        return view('admin::admin.index', $viewData);
    }

    public function editAdmin($id)
    {
        $admin = Admin::find($id);
        /* dd($admin->all()); */
        return view('admin::admin.update', compact('admin'));
    }

    public function updateAdmin(RequestAdmin $requestAdmin, $id)
    {
        $this->insertOrUpdateAdmin($requestAdmin, $id);

        return redirect()->back()->with('success', 'Cập nhật thành công');
    }

    public function createAdmin()
    {
        return view('admin::admin.create');
    }
    public function storeAdmin(RequestAdmin $requestAdmin)
    {
       /*  dd($requestAdmin->all()); */
        $this->insertOrUpdateAdmin($requestAdmin);
        return $this->index()->with('success', 'Đã thêm thành viên mới');;
    }


    public function insertOrUpdateAdmin($requestAdmin, $id = '')
    {
        /* dd($request->email); */
        
        if ($id !='') {
            $admin = Admin::find($id);
        } else{
            $admin = new Admin();
        }

        $admin->name = $requestAdmin->name;
        $admin->email = $requestAdmin->email;
        $admin->phone = $requestAdmin->phone;
        $admin->address = $requestAdmin->address;
        $admin->password = bcrypt($requestAdmin->password);

        if ($requestAdmin->hasFile('avatar')) {
            $file = upload_image('avatar');

            if (isset($file['name'])) {
                $admin->avatar = $file['name'];
            }
        }
        $admin->save();
    }

    


    //Action Ajax //Load dữ liệu ra html rồi bỏ vào ajax - Dùng chung cả admin lẫn user thường
    public function actionAjax($action, $id)
    {
        if ($action) {
            $user = User::find($id);
            switch ($action) {
                case 'delete':
                    $user->delete();
                    break;
                case 'active':
                    $user->pro_active = $user->active ? 0 : 1;
                    $user->save();
                    break;
            }
            $users = User::orderBy('id', 'desc')->paginate(10);
            $viewData = [
                'users' => $users,
            ];
            $html = view('admin::user.user_data', $viewData)->render();
            return response()->json($html);
        }
    }


    
}