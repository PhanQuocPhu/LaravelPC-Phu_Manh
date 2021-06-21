@extends('admin::layouts.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài viết</li>
        </ol>
    </nav>
    <!-- DataTales -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary" style="float: left;">Quản lý bài viết</h5>
            <a class="btn btn-success" href="{{ route('admin.get.create.article') }}" style="float: right;"><i
                    class="far fa-plus-square"></i> Thêm mới</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Tên bài viết</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ngày tạo</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody id="tb_content">
                        @if (isset($articles))
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->id }}</td>
                                    <td>
                                        <img src="{{ pare_url_file($article->a_avatar) }}" alt=""
                                            class="img img-responsive" style="height: 80px; width:120px">
                                    </td>
                                    <td>
                                        {{ $article->a_name }}
                                    </td>
                                    <td>{{ $article->a_description }}</td>
                                    <td>
                                        <a class="badge {{ $article->getStatus($article->a_active)['class'] }}"
                                            href="{{ route('admin.get.action.article', ['active', $article->id]) }}">{{ $article->getStatus($article->a_active)['name'] }}</a>
                                    </td>
                                    <td>
                                        {{ $article->created_at }}
                                    </td>
                                    <td>
                                        <a style="width:30px; height:30px; padding:1px" class="btn btn-primary text-center"
                                            href="{{ route('admin.get.edit.article', $article->id) }}"><i
                                                class="far fa-edit text-white"></i></a>
                                        <a style="width:30px; height:30px; padding:1px" class="btn btn-danger text-center"
                                            href="{{ route('admin.get.action.article', ['delete', $article->id]) }}"><i
                                                class="far fa-trash-alt text-white"></i></a>
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
