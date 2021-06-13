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
    <!-- DataTales -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary" style="float: left;"> Quản lý đánh giá </h5>
            {{-- <a class="btn btn-success" href="{{ route('admin.get.create.product') }}" style="float: right;"><i
                    class="far fa-plus-square"></i> Thêm mới</a> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
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
                    <tbody id="tb_content">
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
                                            href="{{-- {{ route('admin.get.action.user', ['delete', $user->id]) }} --}}"><i class="far fa-trash-alt text-danger"></i>
                                            Delete</a>

                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
