@extends('admin::layouts.master')

@section('content')
    <style>
        #edit {
            font-size: 12px;
        }

        #delete {
            font-size: 12px;
        }

    </style>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh Mục</li>
        </ol>
    </nav>
    <hr class="sidebar-divider my-0"> <br>
    <h3> <strong> Quản lý danh Mục<a class="btn btn-success" href="{{ route('admin.get.create.category') }}"
                style="float: right;"><i class="far fa-plus-square"></i> Thêm mới</a> </strong></h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên danh mục</th>
                    <th scope="col">Title SEO</th>
                    <th scope="col">Status</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @if (isset($categories))
                        @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->c_name }}</td>
                    <td>{{ $category->c_title_seo }}</td>
                    <td>
                        {{ $category->getStatus($category->c_active)['name'] }}
                    </td>
                    <td>
                        <a style="padding: 5px 10px" class="btn btn-outline-primary" id="edit"
                            href="{{ route('admin.get.edit.category', $category->id) }}}}"><i
                                class="far fa-edit text-primary"></i> Edit</a>
                        <a style="padding: 5px 10px" class="btn btn-outline-danger" id="delete"
                            href="{{ route('admin.get.action.category', ['delete', $category->id]) }}"><i
                                class="far fa-trash-alt text-danger"></i> Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif

                </tr>
            </tbody>
        </table>
    </div>
@endsection
