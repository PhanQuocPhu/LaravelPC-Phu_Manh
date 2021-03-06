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
            <li class="breadcrumb-item active" aria-current="page">Đơn hàng</li>
        </ol>
    </nav>

    <!-- DataTales -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="m-0 font-weight-bold text-primary" style="float: left;"> Quản lý đơn hàng </h5>
            {{-- <a class="btn btn-success" href="{{ route('admin.get.create.product') }}" style="float: right;"><i
                    class="far fa-plus-square"></i> Thêm mới</a> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Thông tin đơn hàng</th>
                            <th scope="col">Tổng giá trị</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Thanh toán</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody id="tb_content">
                        @if (isset($transactions))
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>
                                        <ul>
                                            <li>
                                                <Strong>Tên khách hàng: </Strong>
                                                {{ isset($transaction->user->name) ? $transaction->user->name : '[N/A]' }}
                                            </li>
                                        </ul>
                                        <ul>
                                            <li><Strong>Địa chỉ: </Strong>{{ $transaction->tr_address }}</li>
                                        </ul>
                                        <ul>
                                            <li><Strong>Số điện thoại: </Strong>{{ $transaction->tr_phone }}</li>
                                        </ul>
                                        <ul>
                                            <li><Strong>Ngày đặt hàng: </Strong>
                                                {{ $transaction->created_at->format('d-m-y') }}</li>
                                        </ul>
                                    </td>
                                    <td>
                                        {{ number_format($transaction->tr_total, 0, '.', '.') }} vnđ
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="#"
                                                class="badge {{ $transaction->getStatus($transaction->tr_status)['class'] }} "
                                                data-toggle="{{ $transaction->getStatus($transaction->tr_status)['toggle'] }}"
                                                aria-haspopup="true" aria-expanded="false">
                                                {{ $transaction->getStatus($transaction->tr_status)['name'] }}
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item status_transaction"
                                                    href="{{ route('admin.get.action.transaction', ['done', $transaction->id]) }}">Đã
                                                    xử lý</a>
                                                <a class="dropdown-item status_transaction"
                                                    href="{{ route('admin.get.action.transaction', ['shipping', $transaction->id]) }}">Đang
                                                    giao hàng</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a class="badge {{ $transaction->getPayment($transaction->tr_payment)['class'] }} status_paid"
                                            href="{{ route('admin.get.action.transaction', ['paid', $transaction->id]) }}">{{ $transaction->getPayment($transaction->tr_payment)['name'] }}
                                        </a>
                                    </td>
                                    <td>
                                        <div>
                                            <a style="padding: 5px 10px" class="btn btn-outline-danger del_item" id="delete"
                                                href="{{ route('admin.get.action.transaction', ['delete', $transaction->id]) }}"><i
                                                    class="far fa-trash-alt text-danger"></i> </a>

                                            <a style="padding: 5px 10px" class="btn btn-outline-primary js_order_item"
                                                id="edit" data-toggle="modal" data-target="#ModalOrder"
                                                data-id="{{ $transaction->id }}"
                                                href="{{ route('admin.get.view.order', $transaction->id) }}"
                                                submit="{{ route('admin.update.transaction.ajax', [$transaction->id]) }}"><i
                                                    class="far fa-eye text-primary"></i></a>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    @include('admin::components.modalOrder')


@endsection

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //Edit status
        $('body').on('click', '.status_transaction', function(event) {
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
        //Edit payment
        $('body').on('click', '.status_paid', function(event) {
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
        //Xóa
        $('body').on('click', '.del_item', function(event) {
            event.preventDefault()
            let $this = $(this);
            let url = $this.attr('href');
            $.confirm({
                title: 'Xóa đơn hàng này ?',
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
                                    $.alert('Đã xóa đơn hàng');
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
        });
        //Update
        $('body').on('click', '.update_item', function(event) {
            event.preventDefault()
            let $this = $(this);
            let url = $this.attr('href');

            var t_address = $('#tr_address').val();
            var t_phone = $('#tr_phone').val();
            var t_note = $('#tr_note').val();
            $.confirm({
                title: 'Save change ?',
                content: 'Chắc chắn ?',
                buttons: {
                    confirm: {
                        text: 'Save',
                        btnClass: 'btn-success',
                        action: function() {
                            /* console.log(url); */
                            $.ajax({
                                url: url,
                                method: 'POST',
                                data: {
                                    tr_address: t_address,
                                    tr_phone: t_phone,
                                    tr_note: t_note
                                },
                                success: function(response) {
                                    $.alert('Đã lưu');
                                    location.reload();
                                    /* $('#md_content').html(response); */
                                    //Reload data trang đơn hàng
                                    /* $.ajax({
                                        url: url,
                                        method: 'POST',
                                        success: function(response) {
                                            $('#md_content').html(response);
                                        }
                                    }); */
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
        });

        //Xóa sản phẩm khỏi đơn hàng
        $('body').on('click', '.del_order_item', function(event) {
            event.preventDefault()
            let $this = $(this);
            let url = $this.attr('href');
            $.confirm({
                title: 'Xóa sản phẩm này khỏi đơn hàng ?',
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
                                    /* console.log(response); */
                                    $('#md_content').html(response);
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
        });

        //View product in transaction
        $(function() {
            console.log("ready!");
            $('body').on('click', '.js_order_item', function(event) {
                let $this = $(this);
                let url = $this.attr('href');
                let md = $this.attr('data-id');
                let urlSubmit = $this.attr('submit');;
                $("#md_content").html('');
                $("#trid").text(md);
                /* console.log(urlSubmit); */
                $('.update_item').attr('href', urlSubmit);
                $.ajax({
                    url: url,
                }).done(function(result) {
                    /* console.log(result); */
                    if (result) {
                        $("#md_content").append(result);
                    }
                });
            });
        });
    </script>
@endsection
