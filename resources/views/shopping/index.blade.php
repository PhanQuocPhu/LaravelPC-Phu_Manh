@extends('layouts.app')
@section('content')
    <!-- New product section start -->
    <div class="our-product-area new-product">
        <div class="container">
            <div class="area-title">
                <h2>Your Shopping Cart</h2>
            </div>
            <!-- our-product area start -->
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Thành tiền</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($products))
                            <?php $i = 1; ?>
                            @foreach ($products as $key => $product)
                                <tr>
                                    <td>#{{ $i }}</td>
                                    <td>
                                        {{ $product->name }}
                                    </td>
                                    <td>
                                        <img src="{{ pare_url_file($product->options->avatar) }}" alt=""
                                            class="img img-responsive" style="height: 80px; width:80px">
                                    </td>
                                    <td>{{ number_format($product->price, 0, '.', '.') }}</td>
                                    <td>{{ $product->qty }}</td>
                                    <td>{{ number_format($product->qty * $product->price, 0, '.', '.') }}</td>
                                    <td>
                                        <a style="padding: 5px 10px" class="border-right"
                                            href="{{ route('admin.get.edit.product', $product->id) }}"><i
                                                class="far fa-edit"></i></a>
                                        <a style="padding: 5px 10px" class="border-left"
                                            href="{{ route('admin.get.action.product', ['delete', $product->id]) }}"><i
                                                class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                            <tr>
                                <td></td>
                                <td colspan="4" ><h5>Tổng giá trị đơn hàng:</h5></td>
                                <td colspan="2" ><h5>{{ Cart::subtotal() }}</h5></td>
                            </tr>
                        @endif
                    </tbody>
                </table>  
                <div class="text-center"><a href="" class="btn btn-success justify-content-center"> Thanh toán</a></div>
            </div>
            <!-- our-product area end -->
        </div>
    </div>
    <!-- New product section end -->
    <br>
@stop
