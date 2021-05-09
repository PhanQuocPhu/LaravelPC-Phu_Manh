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
            <li class="breadcrumb-item active" aria-current="page">Đánh giá</li>
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

    <h3> <strong> Quản lý đánh giá <a class="btn btn-success" href="{{ route('admin.get.create.product') }}"
                style="float: right;"><i class="far fa-plus-square"></i> Thêm mới</a> </strong></h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên thành viên</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($ratings))
                    @foreach ($ratings as $rating)
                        <tr>
                            <td>{{ $rating->id }}</td>
                            <td>
                                {{ isset($rating->user->name) ? $rating->user->name : '[N/A]' }}
                            </td>
                            <td>
                                {{ isset($rating->product->pro_name) ? $rating->product->pro_name : '[N/A]' }}
                            </td>
                            <td>{{ $rating->ra_content }}</td>

                            <td>{{ $rating->ra_number }}</td>
                            <td>

                                <a style="padding: 5px 10px" class="btn btn-outline-danger" id="delete"
                                    href="{{-- {{ route('admin.get.action.user', ['delete', $user->id]) }} --}}"><i class="far fa-trash-alt text-danger"></i> Delete</a>

                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
