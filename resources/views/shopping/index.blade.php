@extends('layouts.app')
@section('content')

    <!-- breadcrumbs area start -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inner">
                        <ul>
                            <li class="home">
                                <a href="{{ route('home') }}">Home</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>Thanh toán</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
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
                    <tbody id="cart-content">
                        @if ($products)
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
                                    <td>
                                        <a class="btn btn-danger edit-cart"
                                            href="{{ route('edit.shopping.cart.ajax', [$key, $product->qty - 1]) }}">-</a>
                                        <input type="text" readonly value="{{ $product->qty }}"
                                            style="width: 33px; height: 33px; border: 0; text-align: center;">
                                        <a class="btn btn-success edit-cart"
                                            href="{{ route('edit.shopping.cart.ajax', [$key, $product->qty + 1]) }}">+</a>
                                    </td>
                                    <td>{{ number_format($product->qty * $product->price, 0, '.', '.') }}</td>
                                    <td>
                                        <a style="padding: 5px 10px" class="border-left delete-cart"
                                            href="{{-- {{ route('delete.shopping.cart', $key) }} --}} {{ route('delete.shopping.cart.ajax', $key) }}"><i
                                                class="far fa-trash-alt"></i>@csrf</a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            @endforeach
                            <tr>
                                <td></td>
                                <td colspan="4">
                                    <h5>Tổng giá trị đơn hàng:</h5>
                                </td>
                                <td colspan="2">
                                    <strong>{{ number_format(str_replace(',', '', Cart::subtotal()), 0, '.', '.') }}đ</strong>
                                </td>
                            </tr>
                        @else
                            <div class="alert alert-warning" role="alert">
                                This is a warning alert—check it out!
                            </div>
                        @endif
                    </tbody>
                </table>
                <div class="text-center"><a href="{{ route('get.form.pay') }}"
                        class="btn btn-success justify-content-center"> Thanh toán</a></div>
            </div>
            <!-- our-product area end -->
        </div>
    </div>
    <!-- New product section end -->
    <br>
@stop

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('body').on('click', '.delete-cart', function(event) {
            event.preventDefault()
            let $this = $(this);
            let url = $this.attr('href');
            $.ajax({
                url: url,
                method: 'POST',
                success: function(response) {
                    $('#cart-content').html(response);
                }
            });
        });
        $('body').on('click', '.edit-cart', function(event) {
            event.preventDefault()
            let $this = $(this);
            let url = $this.attr('href');
            $.ajax({
                url: url,
                method: 'POST',
                success: function(response) {
                    $('#cart-content').html(response);
                }
            });
        });
    </script>
@stop
