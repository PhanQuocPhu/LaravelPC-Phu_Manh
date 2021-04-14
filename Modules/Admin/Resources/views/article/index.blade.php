@extends('admin::layouts.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài viết</li>
        </ol>
    </nav>
    <hr class="sidebar-divider my-0"> <br>
    <div class="col-sm-12">
        <form class="form-inline">
            <input type="text" class="form-control my-1 mr-sm-2" name="name" placeholder="Tên bài viết...."
                value="{{ \Request::get('name') }}">
            <button type="submit" class="btn btn-primary my-1 mr-sm-2"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <br>
    <hr class="sidebar-divider my-0"> <br>


    <h3> <strong> Quản lý bài viết <a class="btn btn-success" href="{{ route('admin.get.create.article') }}"
                style="float: right;"><i class="far fa-plus-square"></i> Thêm mới</a> </strong></h3>
    <div class="table-responsive">
        <table class="table">
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
            <tbody>
                <tr>
                    @if (isset($articles))
                        @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                     <td>
                        <img src="{{ pare_url_file($article->a_avatar) }}" alt="" class="img img-responsive" style="height: 80px; width:80px">
                    </td>
                    <td>
                        {{ $article->a_name }}
                    </td>
                    <td>{{ $article->a_description}}</td>
                    <td>
                        <a class="badge {{ $article->getStatus($article->a_active)['class'] }}" href="{{ route('admin.get.action.article', ['active', $article->id]) }}">{{ $article->getStatus($article->a_active)['name'] }}</a>
                    </td>
                    <td>
                        {{ $article->created_at}}
                    </td>
                    <td>
                        <a style="padding: 5px 10px" class="border-right"
                            href="{{ route('admin.get.edit.article', $article->id) }}"><i
                                class="far fa-edit text-primary"></i></a>
                        <a style="padding: 5px 10px" class="border-left"
                            href="{{ route('admin.get.action.article', ['delete', $article->id]) }}"><i
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
