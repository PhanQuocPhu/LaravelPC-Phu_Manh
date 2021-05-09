@extends('admin::layouts.master')

@section('content')
    <style>
        .active {
            color: #ff9705 !important;
        }

    </style>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
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


    <h3> <strong> Thông tin liên hệ </strong></h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên người liên hệ</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($contacts))
                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>
                                {{ $contact->c_name }}
                            </td>
                            <td>{{ $contact->c_email }}</td>
                            <td>{{ $contact->c_title }}</td>
                            <td>
                                <a class="badge {{ $contact->getStatus($contact->c_status)['class'] }}"
                                    href="{{ route('admin.get.action.contact', ['status', $contact->id]) }}">{{ $contact->getStatus($contact->c_status)['name'] }}</a>
                            </td>
                            <td>
                                <a style="padding: 5px 10px" class="border-left"
                                    href="{{-- {{ route('admin.get.action.contact', ['delete', $contact->id]) }} --}}"><i
                                        class="far fa-trash-alt text-danger"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
