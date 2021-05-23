@extends('user.layout')
@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->


        <div class="d-sm-flex align-items-center justify-content-between mb-4">


        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Tổng giá trị đơn hàng Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Số tiền đã tiêu</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ number_format($totalMoney, 0, '.', '.') }} đ</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tổng số đơn hàng Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Tổng số đơn hàng</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{$totalTrans}}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Đơn hàng chưa xử lý Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Đơn hàng đang chờ
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                            {{$totalTrans - $totalTransDone}}  
                                        </div>
                                    </div>
                                    {{-- <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tin nhắn đang chờ -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Đơn hàng thành công
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{$totalTransDone}}    
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->
        <div id="Tr_Data">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Tổng giá trị</th>
                            <th scope="col">Ngày đặt hàng</th>
                            <th scope="col">Status</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($transactions))
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction->id }}</td>
                                    <td>
                                        {{ $transaction->tr_address }}
                                    </td>
                                    <td>
                                        {{ $transaction->tr_phone }}
                                    </td>
                                    <td>
                                        {{ number_format($transaction->tr_total, 0, '.', '.') }} vnđ
                                    </td>
                                    <td>
                                        {{ $transaction->created_at->format('d-m-y') }}
                                    </td>
                                    <td>
                                        @if ($transaction->tr_status == 1)
                                            <p class="badge badge-success" href="#" id="tr_status"> Đã xử lý</p>
                                        @else
                                            <p class="badge badge-secondary " href="#" id="tr_status"> Đang chờ</p>
                                        @endif
                                    </td>
                                    <td>
                                        <a style="padding: 5px 10px" class="btn btn-outline-primary js_order_item" id="edit"
                                            data-toggle="modal" data-target="#ModalOrder" data-id="{{ $transaction->id }}"
                                            href="{{ route('user.get.view.order', $transaction->id) }}"><i
                                                class="far fa-eye text-primary"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <div class="alert alert-warning" role="alert">
                                    This is a warning alert—check it out!
                                </div>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    @include('user.components.modalOrder')

@endsection
@section('script')
    <script>
        $(function() {
            console.log("ready!");
            $(".js_order_item").click(function(event) {
                let $this = $(this);
                let url = $this.attr('href');
                let md = $this.attr('data-id');
                console.log("ready!");
                $("#md_content").html('');
                $("#trid").text(md);
                $.ajax({
                    url: url,
                }).done(function(result) {
                    /* console.log(result); */
                    if (result) {
                        $("#md_content").append(result);
                    }
                });
            });
        })

    </script>
@endsection
