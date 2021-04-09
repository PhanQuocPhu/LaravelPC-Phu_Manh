@extends('admin::layouts.master')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
    <li class="breadcrumb-item active" aria-current="page">Danh Mục</li>
  </ol>
</nav>
<hr class="sidebar-divider my-0"> <br>
<h3> <strong> Quản lý danh Mục <a href="{{ route('admin.get.create.category') }}" style="float: right;"> Thêm Mới</a> </strong></h3>
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
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->c_name }}</td>
                            <td>{{ $category->c_title_seo }}</td>
                            <td>
                               {{$category->getStatus($category->c_active)['name'] }}
                            </td>
                            <td>
                                <a href="{{ route('admin.get.edit.category', $category->id) }}">Edit</a>
                                <a href="{{ route('admin.get.action.category', ['delete', $category->id]) }}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                
            </tr>
        </tbody>
    </table>
</div>
@endsection
