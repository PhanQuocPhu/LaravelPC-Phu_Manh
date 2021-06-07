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
                    <th scope="col">Icon</th>
                    <th scope="col">Title SEO</th>
                    <th scope="col">HomePage</th>
                    <th scope="col">Status</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody id="tb_content">
                @if (isset($categories))
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td id="c_name">{{ $category->c_name }}</td>
                            <td> <img src="{{ pare_url_file($category->c_icon) }}" alt="" class="img img-responsive" style="height: 20px; width:20px"></td>
                            <td>{{ $category->c_title_seo }}</td>
                            <td>
                                <a class="badge {{ $category->getHome($category->c_home)['class'] }} status_cate "
                                    href="{{ route('admin.get.action.category.ajax', ['home', $category->id]) }}">{{ $category->getHome($category->c_home)['name'] }}
                                </a>
                            </td>
                            <td>
                                <a class="badge {{ $category->getStatus($category->c_active)['class'] }} status_cate"
                                    href="{{ route('admin.get.action.category.ajax', ['active', $category->id]) }}">{{ $category->getStatus($category->c_active)['name'] }}
                                </a>
                            </td>
                            <td>
                                {{-- Edit --}}
                                <a style="padding: 5px 10px" class="btn btn-outline-primary" id="edit"
                                    href="{{ route('admin.get.edit.category', $category->id) }}}}"><i
                                        class="far fa-edit text-primary"></i> Edit</a>
                                {{-- Xóa --}}
                                <a style="padding: 5px 10px" class="btn btn-outline-danger del_item" id="delete"
                                    href="{{ route('admin.get.action.category.ajax', ['delete', $category->id]) }}"><i
                                        class="far fa-trash-alt text-danger"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //Xóa
        $('body').on('click', '.del_item', function(event) {
            event.preventDefault()
            let $this = $(this);
            let url = $this.attr('href');
            $.confirm({
                title: 'Xóa danh mục này ?',
                content: 'Chắc chắn ?',
                buttons: {
                    confirm: {
                        text: 'Xóa',
                        btnClass: 'btn-danger',
                        action: function() {
                            /* console.log(url); */
                            $.ajax({
                                url: url,
                                method: 'POST',
                                success: function(response) {
                                    $.alert('Đã xóa danh mục');
                                    $('#tb_content').html(response);
                                }
                            });
                        }
                    },
                    cancel: {
                        text: 'Hủy',
                        btnClass: 'btn-secondary'
                    }
                }
            });
            /* Swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `Save`,
                denyButtonText: `Don't save`,
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire('Saved!', '', 'success')
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            }); */
        });

        //Sửa status
        $('body').on('click', '.status_cate', function(event) {
            event.preventDefault()
            let $this = $(this);
            let url = $this.attr('href');
            $.ajax({
                url: url,
                method: 'POST',
                success: function(response) {
                    $('#tb_content').html(response);
                }
            });
        });

    </script>
@stop
