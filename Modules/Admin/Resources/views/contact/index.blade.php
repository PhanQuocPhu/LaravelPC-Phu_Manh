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
    <!-- DataTales -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary" style="float: left;"> Thông tin liên hệ</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
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
                    <tbody id="tb_content">
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
                                        <a style="padding: 5px 10px" class="border-left" href="{{-- {{ route('admin.get.action.contact', ['delete', $contact->id]) }} --}}"><i
                                                class="far fa-trash-alt text-danger"></i></a>
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
