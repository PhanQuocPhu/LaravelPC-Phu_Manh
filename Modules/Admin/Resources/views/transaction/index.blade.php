@extends('admin::layouts.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Đơn hàng</li>
        </ol>
    </nav>
    <hr class="sidebar-divider my-0"> <br>
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


    <h3> <strong> Quản lý đơn hàng <a class="btn btn-success" href="{{ route('admin.get.create.product') }}"
                style="float: right;"><i class="far fa-plus-square"></i> Thêm mới</a> </strong></h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Loại sản phẩm</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Status</th>
                    <th scope="col">Nổi bật</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @if (isset($products))
                        @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>
                        {{ $product->pro_name }}
                        <ul>
                            <li><span><i class="fas fa-dollar-sign"></i>120.000</span></li>
                        </ul>
                    </td>
                    <td>{{ isset($product->category->c_name) ? $product->category->c_name : '[N/A]' }}</td>
                    <td>
                        <img src="{{ pare_url_file($product->pro_avatar) }}" alt="" class="img img-responsive" style="height: 80px; width:80px">
                    </td>
                    <td>
                        <a class="badge {{ $product->getStatus($product->pro_active)['class'] }}" href="{{ route('admin.get.action.product', ['active', $product->id]) }}">{{ $product->getStatus($product->pro_active)['name'] }}</a>
                    </td>
                    <td>
                        <a class="badge {{ $product->getHot($product->pro_hot)['class'] }}" href="{{ route('admin.get.action.product', ['hot', $product->id]) }}">{{ $product->getHot($product->pro_hot)['name'] }} </a>
                    </td>
                    <td>
                        <a style="padding: 5px 10px" class="border-right"
                            href="{{ route('admin.get.edit.product', $product->id) }}"><i
                                class="far fa-edit text-primary"></i></a>
                        <a style="padding: 5px 10px" class="border-left"
                            href="{{ route('admin.get.action.product', ['delete', $product->id]) }}"><i
                                class="far fa-trash-alt text-danger"></i></a>
                    </td>
                </tr>
                @endforeach
                @endif

                </tr>
            </tbody>
        </table>
    </div>
@endsection
