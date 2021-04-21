@extends('admin::layouts.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thành viên</li>
        </ol>
    </nav>
    <hr class="sidebar-divider my-0"> <br>

    {{-- Start Search --}}
    <div class="col-sm-12">
        <form class="form-inline">
            <input type="text" class="form-control my-1 mr-sm-2" name="name" placeholder="Tên sản phẩm...."
                value="{{ \Request::get('name') }}">
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="cate">
                @if (@isset($categories))
                    <option class="selected" value="">All</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ \Request::get('cate') == $category->id ? "selected='selected'" : '' }}>
                            {{ $category->c_name }}</option>
                    @endforeach
                @endif
            </select>
            <div class="form-group">

            </div>
            <button type="submit" class="btn btn-primary my-1 mr-sm-2"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <br>
    <hr class="sidebar-divider my-0"> <br>
    {{-- End Search --}}

    <h3> <strong> Quản lý thành viên <a class="btn btn-success" href="{{ route('admin.get.create.product') }}"
                style="float: right;"><i class="far fa-plus-square"></i> Thêm mới</a> </strong></h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    {{-- <th scope="col">Avatar</th>
                    <th scope="col">Status</th> --}}
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($users))
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>{{ $user->email }}</td>

                            <td>{{ $user->phone }}</td>
                            {{-- <td>
                                <img src="{{ pare_url_file($user->avatar) }}" alt="" class="img img-responsive"
                                    style="height: 80px; width:80px">
                            </td>
                            <td>
                                <a class="badge {{ $user->getStatus($user->active)['class'] }}"
                                    href="{{ route('admin.get.action.user', ['active', $user->id]) }}">{{ $user->getStatus($user->active)['name'] }}</a>
                            </td> --}}
                            
                            <td>
                                <a style="padding: 5px 10px" class="border-right"
                                    href="{{-- {{ route('admin.get.edit.user', $user->id) }} --}}"><i
                                        class="far fa-edit text-primary"></i></a>
                                <a style="padding: 5px 10px" class="border-left"
                                    href="{{-- {{ route('admin.get.action.user', ['delete', $user->id]) }} --}}"><i
                                        class="far fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
