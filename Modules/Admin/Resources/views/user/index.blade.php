@extends('admin::layouts.master')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thành viên</li>
        </ol>
    </nav>
    <hr class="sidebar-divider my-0"> <br>

    {{-- Start Search --}}
    <div class="col-sm-12">
        <form class="form-inline">
            <input type="text" class="form-control my-1 mr-sm-2" name="name"
                placeholder="Tên thành viên hoặc số điện thoại...." value="{{ \Request::get('name') }}">
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="cate">
                <option class="selected" value="name">Tên thành viên</option>
                <option value="phone">
                    Số điện thoại
                </option>
            </select>
            <div class="form-group">

            </div>
            <button type="submit" class="btn btn-primary my-1 mr-sm-2"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <br>
    <hr class="sidebar-divider my-0"> <br>
    {{-- End Search --}}

    <h3> <strong> Quản lý thành viên <a class="btn btn-success" href="{{ route('admin.get.create.user') }}"
                style="float: right;"><i class="far fa-plus-square"></i> Thêm thành viên</a> </strong></h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    {{-- <th scope="col">Avatar</th>
                    <th scope="col">Status</th> --}}
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody id="tb_content">
                @if (isset($users))
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>{{ $user->email }}</td>

                            <td>{{ $user->phone }}</td>
                            {{-- <td>
                                <img src="{{ pare_url_file($user->avatar) }}" alt="" class="img img-responsive"
                                    style="height: 80px; width:80px">
                            </td>
                            <td>
                                <a class="badge {{ $user->getStatus($user->active)['class'] }}"
                                    href="{{ route('admin.get.action.user', ['active', $user->id]) }}">{{ $user->getStatus($user->active)['name'] }}</a>
                            </td> --}}

                            <td>
                                <a style="padding: 5px 10px" class="border-right"
                                    href="{{ route('admin.get.edit.user', $user->id) }}"><i
                                        class="far fa-edit text-primary"></i></a>
                                <a style="padding: 5px 10px" class="border-left del_item"
                                    href="{{ route('admin.get.action.user', ['delete', $user->id]) }}"><i
                                        class="far fa-trash-alt text-danger"></i></a>
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
