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

    <div class="main-area">

        <div class="container">
            {{-- khung mở đầu start --}}
            <div class="start-home-modules row">
                {{-- Banner carousel start --}}
                <div class="col-md-10" style="float: right; margin-top:5px">
                    <div class="slider-area hm-1">
                        <!-- slider -->
                        @if (isset($articleNews))
                            <div class="bend niceties preview-2" >
                                <div id="ensign-nivoslider-2" class="slides" style="height:530px">
                                    @foreach ($articleNews as $articleNew)
                                        <img src="{{ asset(pare_url_file($articleNew->a_avatar)) }}" alt=""
                                            title="#slider-direction-2" style="display: inline; height:530px"  />
                                    @endforeach
                                </div>
                                <!-- direction 1 -->
                                <div id="slider-direction-1" class="t-cn slider-direction">
                                    <div class="slider-progress"></div>
                                </div>
                                <!-- direction 2 -->
                                <div id="slider-direction-2" class="slider-direction">
                                    <div class="slider-progress"></div>
                                </div>
                            </div>
                        @endif
                        <!-- slider end-->
                    </div>
                    <!-- Article area start -->
                    <div class="unit-banner-area" style="margin-top: 15px">
                        <div class="row">
                            @if (isset($articleNews))
                                @foreach ($articleNews as $articleNew)
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <!-- single banner start -->
                                        <div class="single-banner">
                                            <a href="#"><img src="{{ asset(pare_url_file($articleNew->a_avatar)) }}"
                                                    alt="" class="img-fluid"
                                                    style="display: inline; width:100% ;height:140px" />
                                            </a>
                                        </div>
                                        <!-- single banner end -->
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <!-- Article area end -->
                </div>
                {{-- Banner carousel end --}}
            </div>
            {{-- khung mở đầu end --}}

            {{-- Sản phẩm mới --}}
            <div id="featured-product">
                <div style="position: relative">
                    <h2 class="product-group-tittle">Sản phẩm mới</h2>
                    <a class="products-hot-view-all" href="#">
                        Xem tất cả <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
                <div class="products-group">
                    <div class="module-products row">
                        @if (isset($productNews))
                            @foreach ($productNews as $pronew)
                                <div class="col-sm-4 col-xs-12 padding-none col-fix20">
                                    <div class="product-row">
                                        <a href="{{ route('get.detail.product', [$pronew->pro_slug, $pronew->id]) }}"></a>
                                        {{-- Hình ảnh sản phẩm start --}}
                                        <div class="product-row-img">
                                            @if ($pronew->pro_number == 0)
                                                <span
                                                    style="position: absolute; background:#e91e63; color: white; border-radius:5px; white-space:nowrap; font-size:11px; padding: 0 5px; margin-left:2px">Tạm
                                                    hết hàng
                                                </span>
                                            @endif
                                            <a href="{{ route('get.detail.product', [$pronew->pro_slug, $pronew->id]) }}">
                                                <img class="product-row-thumbnail"
                                                    src="{{ asset(pare_url_file($pronew->pro_avatar)) }}" alt="">
                                            </a>
                                            <div class="product-row-price-hover">
                                                <a
                                                    href="{{ route('get.detail.product', [$pronew->pro_slug, $pronew->id]) }}">
                                                    <div class="product-row-note pull-left">Click để xem chi tiết</div>
                                                </a>
                                                <a href="{{ route('add.shopping.cart', $pronew->id) }}"
                                                    class="product-row-btnbuy pull-right"><i
                                                        class="fas fa-cart-plus"></i></a>
                                            </div>
                                        </div>
                                        {{-- Hình ảnh sản phẩm end --}}
                                        {{-- Chi tiết sản phẩm start --}}
                                        <h2 class="product-row-name">{{ $pronew->pro_name }}</h2>
                                        <div class="product-row-info">
                                            <div class="product-row-price pull-left">
                                                @if ($pronew->pro_sale)
                                                    <del>{{ number_format($pronew->pro_price, 0, '.', '.') }}₫</del>
                                                @else
                                                    <del> </del>
                                                @endif
                                                <br>
                                                <span
                                                    class="product-row-sale">{{ number_format(($pronew->pro_price * (100 - $pronew->pro_sale)) / 100, 0, '.', '.') }}₫
                                                </span>
                                            </div>
                                            <!--<span class="product-row-buyer pull-right"><i class="fa fa-user"></i><br/>185</span>-->
                                            <div class="clearfix"></div>
                                            @if ($pronew->pro_sale)
                                                <div class="new-product-percent">-{{ $pronew->pro_sale }}%</div>
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
            {{-- Sản phẩm mới end --}}

            <!-- CPU section start -->
            <div id="featured-product">
                <div style="position: relative">
                    <h2 class="product-group-tittle">Vi xử lý bán chạy</h2>
                    <a class="products-hot-view-all" href="#">
                        Xem tất cả <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
                <div class="products-group">
                    <div class="module-products row">
                        @if (isset($productNews))
                            @foreach ($productNews as $pronew)
                                <div class="col-sm-4 col-xs-12 padding-none col-fix20">
                                    <div class="product-row">
                                        <a
                                            href="{{ route('get.detail.product', [$pronew->pro_slug, $pronew->id]) }}"></a>
                                        {{-- Hình ảnh sản phẩm start --}}
                                        <div class="product-row-img">
                                            @if ($pronew->pro_number == 0)
                                                <span
                                                    style="position: absolute; background:#e91e63; color: white; border-radius:5px; white-space:nowrap; font-size:11px; padding: 0 5px; margin-left:2px">Tạm
                                                    hết hàng
                                                </span>
                                            @endif
                                            <a
                                                href="{{ route('get.detail.product', [$pronew->pro_slug, $pronew->id]) }}">
                                                <img class="product-row-thumbnail"
                                                    src="{{ asset(pare_url_file($pronew->pro_avatar)) }}" alt="">
                                            </a>
                                            <div class="product-row-price-hover">
                                                <a
                                                    href="{{ route('get.detail.product', [$pronew->pro_slug, $pronew->id]) }}">
                                                    <div class="product-row-note pull-left">Click để xem chi tiết</div>
                                                </a>
                                                <a href="{{ route('add.shopping.cart', $pronew->id) }}"
                                                    class="product-row-btnbuy pull-right"><i
                                                        class="fas fa-cart-plus"></i></a>
                                            </div>
                                        </div>
                                        {{-- Hình ảnh sản phẩm end --}}
                                        {{-- Chi tiết sản phẩm start --}}
                                        <h2 class="product-row-name">{{ $pronew->pro_name }}</h2>
                                        <div class="product-row-info">
                                            <div class="product-row-price pull-left">
                                                @if ($pronew->pro_sale)
                                                    <del>{{ number_format($pronew->pro_price, 0, '.', '.') }}₫</del>
                                                @else
                                                    <del> </del>
                                                @endif
                                                <br>
                                                <span
                                                    class="product-row-sale">{{ number_format(($pronew->pro_price * (100 - $pronew->pro_sale)) / 100, 0, '.', '.') }}₫
                                                </span>
                                            </div>
                                            <!--<span class="product-row-buyer pull-right"><i class="fa fa-user"></i><br/>185</span>-->
                                            <div class="clearfix"></div>
                                            @if ($pronew->pro_sale)
                                                <div class="new-product-percent">-{{ $pronew->pro_sale }}%</div>
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
            <!-- CPU section end -->

        </div>
    </div>

@stop
