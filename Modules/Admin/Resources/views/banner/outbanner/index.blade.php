@extends('admin::layouts.master')

@section('content')
    <style>
        .table .active {
            color: #ff9705 !important;
        }

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
            <li class="breadcrumb-item active" aria-current="page">Banner Ngoài</li>
        </ol>
    </nav>

    <!-- DataTales -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary" style="float: left;">Quản lý banner quảng cáo ngoài</h5>
            <a class="btn btn-success" href="{{ route('admin.get.create.category') }}" style="float: right;"><i
                    class="far fa-plus-square"></i> Thêm mới</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
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
                                    <td> <img src="{{ pare_url_file($category->c_icon) }}" alt=""
                                            class="img img-responsive" style="height: 20px; width:20px"></td>
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
        </div>
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
                title: 'Xóa sản phẩm này ?',
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
                                    $.alert('Đã xóa sản phẩm');
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


        //Edit status
        $('body').on('click', '.status_product', function(event) {
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
