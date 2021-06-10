@extends('admin::layouts.master')

@section('content')
<nav aria-label="breadcrumb">
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href= "{{ route('admin.home') }}" title="Home">Trang chủ</a></li>
      <li class="breadcrumb-item"><a href= "{{ route('admin.get.list.user') }}" title="Thành viên">Thành viên</a></li>
      <li class="breadcrumb-item active" aria-current="page">Thêm Mới</li>
   </ol>
</nav>
<hr class="sidebar-divider my-0">
<br>
@include("admin::user.form")
@endsection
