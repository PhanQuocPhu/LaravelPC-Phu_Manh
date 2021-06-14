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
            <li class="breadcrumb-item"><a href="#">Banner quảng cáo</a></li>
            <li class="breadcrumb-item active" aria-current="page">Slide banner</li>
        </ol>
    </nav>

    <!-- DataTales -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary" style="float: left;">Quản lý banner quảng cáo trong slide</h5>
            <a class="btn btn-success" href="{{ route('admin.get.create.slidebanner') }}" style="float: right;"><i
                    class="far fa-plus-square"></i> Thêm mới</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col" style="width: !important">Status</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody id="tb_content">
                        @if (isset($slidebanners))
                            @foreach ($slidebanners as $slidebanner)
                                <tr>
                                    <td>{{ $slidebanner->id }}</td>
                                    <td> <img src="{{ pare_url_file($slidebanner->sb_img) }}" alt=""
                                            class="img img-fluid" style="height: 184px; width:368px"></td>
                                    
                                    <td>
                                        <a class="badge {{ $slidebanner->getStatus($slidebanner->sb_status)['class'] }} status_sb"
                                            href="{{ route('admin.get.action.slidebanner.ajax', ['active', $slidebanner->id]) }}">{{ $slidebanner->getStatus($slidebanner->sb_status)['name'] }}
                                        </a>
                                    </td>
                                   
                                    <td>
                                        {{-- Edit --}}
                                        <a style="padding: 5px 10px" class="btn btn-outline-primary" id="edit"
                                            href="{{ route('admin.get.edit.slidebanner', $slidebanner->id) }}"><i
                                                class="far fa-edit text-primary"></i> Edit</a>
                                        {{-- Xóa --}}
                                        <a style="padding: 5px 10px" class="btn btn-outline-danger del_item" id="delete"
                                            href="{{ route('admin.get.action.slidebanner.ajax', ['delete', $slidebanner->id]) }}"><i
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
        $('body').on('click', '.status_sb', function(event) {
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
