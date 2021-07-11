@extends('layouts.app')
@section('content')
    <style>
        .new-product-percent {
            background: url('{{ asset('img/Sale-off.png') }}') no-repeat scroll center center transparent;
            position: absolute;
            width: 50px;
            height: 50px;
            bottom: 35px;
            right: 22px;
            text-align: center;
            vertical-align: middle;
            color: #180733;
            font-size: 14px;
            padding-top: 14px;
        }

    </style>

    
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs">
        <div class="container">
            <h3>
                {{ $cateProduct->c_name }}
            </h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inner">
                        <ul>
                            <li class="home">
                                <a href="{{ route('home') }}">Home</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>{{ $cateProduct->c_name }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- shop-with-sidebar Start -->
    <div class="shop-with-sidebar">
        <div class="container">
            <div class="row">
                <!-- right sidebar start -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- shop toolbar start -->
                    <div class="shop-content-area">
                        <div class="shop-toolbar">
                            <div class="col-md-12 col-sm-12 col-xs-12 nopadding-left text-right">
                                <form class="tree-most" id="order-by" method="get">
                                    <div class="orderby-wrapper">
                                        <label>Sắp xếp theo: </label>
                                        <select name="orderby" id="orderby" class="orderby">
                                            <option
                                                {{ Request::get('orderby') == 'price' || !Request::get('orderby') ? "selected = 'selected" : '' }}
                                                value="price">Giá tăng dần</option>
                                            <option
                                                {{ Request::get('orderby') == 'price-desc' ? "selected = 'selected" : '' }}
                                                value="price-desc">Giá giảm dần</option>
                                            <option
                                                {{ Request::get('orderby') == 'popularity' ? "selected = 'selected" : '' }}
                                                value="popularity">Độ yêu thích</option>
                                        </select>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- shop toolbar end -->
                    <div id="featured-product">
                        <div class="products-group">
                            <div class="module-products row">
                                @if (isset($products))
                                    @foreach ($products as $product)
                                        <div class="col-sm-4 col-xs-12 padding-none col-fix20">
                                            <div class="product-row">
                                                <a
                                                    href="{{ route('get.detail.product', [$product->pro_slug, $product->id]) }}"></a>
                                                {{-- Hình ảnh sản phẩm start --}}
                                                <div class="product-row-img">
                                                    @if ($product->pro_number == 0)
                                                        <span
                                                            style="position: absolute; background:#e91e63; color: white; border-radius:5px; white-space:nowrap; font-size:11px; padding: 0 5px; margin-left:2px">Tạm
                                                            hết hàng
                                                        </span>
                                                    @endif
                                                    <a
                                                        href="{{ route('get.detail.product', [$product->pro_slug, $product->id]) }}">
                                                        <img class="product-row-thumbnail"
                                                            src="{{ asset(pare_url_file($product->pro_avatar)) }}" alt="">
                                                    </a>
                                                    <div class="product-row-price-hover">
                                                        <a
                                                            href="{{ route('get.detail.product', [$product->pro_slug, $product->id]) }}">
                                                            <div class="product-row-note pull-left">Click để xem chi tiết
                                                            </div>
                                                        </a>
                                                        <a href="{{ route('add.shopping.cart', $product->id) }}"
                                                            class="product-row-btnbuy pull-right"><i
                                                                class="fas fa-cart-plus"></i></a>
                                                    </div>
                                                </div>
                                                {{-- Hình ảnh sản phẩm end --}}
                                                {{-- Chi tiết sản phẩm start --}}
                                                <h2 class="product-row-name">{{ $product->pro_name }}</h2>
                                                <div class="product-row-info">
                                                    <div class="product-row-price pull-left">
                                                        @if ($product->pro_sale)
                                                            <del>{{ number_format($product->pro_price, 0, '.', '.') }}₫</del>
                                                        @else
                                                            <del> </del>
                                                        @endif
                                                        <br>
                                                        <span
                                                            class="product-row-sale">{{ number_format(($product->pro_price * (100 - $product->pro_sale)) / 100, 0, '.', '.') }}₫
                                                        </span>
                                                    </div>
                                                    <!--<span class="product-row-buyer pull-right"><i class="fa fa-user"></i><br/>185</span>-->
                                                    <div class="clearfix"></div>
                                                    @if ($product->pro_sale)
                                                        <div class="new-product-percent">-{{ $product->pro_sale }}%</div>
                                                    @endif

                                                </div>
                                                {{-- Chi tiết sản phẩm end --}}
                                            </div>
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>

                </div>
                <!-- right sidebar end -->
            </div>
        </div>
    </div>
    <!-- shop-with-sidebar end -->
@endsection

@section('script')
    <script>
        $(function() {
            $('.orderby').change(function() {
                $('#order-by').submit();
            });
        });
    </script>

@endsection
