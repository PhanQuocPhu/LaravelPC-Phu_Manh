@extends('admin::layouts.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Quản trị viên</li>
        </ol>
    </nav>
    <hr class="sidebar-divider my-0"> <br>

    <!-- DataTales -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary" style="float: left;">Quản trị viên</h5>
            <a class="btn btn-success" href="{{ route('admin.get.create.admin') }}" style="float: right;"><i
                    class="far fa-plus-square"></i> Thêm mới</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Avatar</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            {{-- <th scope="col">Status</th> --}}
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody id="tb_content">
                        @if (isset($admins))
                            @foreach ($admins as $admin)
                                <tr>
                                    <td>{{ $admin->id }}</td>
                                    <td>
                                        <img src="{{ pare_url_file($admin->avatar) }}" alt=""
                                            class="img img-responsive rounded-circle" style="height: 80px; width:80px">
                                    </td>
                                    <td>
                                        {{ $admin->name }}
                                    </td>
                                    <td>{{ $admin->email }}</td>

                                    <td>{{ $admin->phone }}</td>
                                    {{-- <td>
                                    <a class="badge {{ $admin->getStatus($admin->active)['class'] }}"
                                        href="{{ route('admin.get.action.admin', ['active', $admin->id]) }}">{{ $admin->getStatus($admin->active)['name'] }}</a>
                                </td> --}}

                                    <td>
                                        <a style="padding: 5px 10px" class="border-right"
                                            href="{{ route('admin.get.edit.admin', $admin->id) }}"><i
                                                class="far fa-edit text-primary"></i></a>
                                        <a style="padding: 5px 10px" class="border-left del_item"
                                            href="{{ route('admin.get.action.admin', ['delete', $admin->id]) }}"><i
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
                title: 'Xóa thành viên này ?',
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
                                    $.alert('Đã xóa thành viên');
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

    </script>
@stop
