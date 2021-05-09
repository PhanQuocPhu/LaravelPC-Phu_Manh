@extends('layouts.app')
@section('content')
    <style>
        #featured-product {
            padding-top: 15px;
        }

        #featured-product .module-product-title,
        #product_related .module-product-title {
            font-size: 18px;
            float: left;
            background: #f1df8d;
            padding: 8px 15px;
            padding-right: 40px;
            margin: 0px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        #featured-product .module-product-count,
        #product_related .module-product-count {
            float: left;
            padding-left: 10px;
            padding-top: 7px;
            color: #888;
        }

        #featured-product .module-product-category,
        #product_related .module-product-category {
            float: right;
            padding-top: 7px;
        }

        #featured-product .module-products-content {
            padding-top: 15px;
        }

        #product_related {
            margin-top: 30px;
        }

        #product_related .module-products-content {
            padding-top: 30px;
        }

        #cat_product {
            padding-top: 15px !important;
        }

        .product-row {
            background-color: #FFF;
            margin-bottom: 30px;
            border: 1px solid #FFF;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        }

        .product-row:hover {
            border: 1px solid #F1DF8D;
            box-shadow: none;
        }

        .product-row-img {
            display: block;
            overflow: hidden;
            position: relative;
            width: 100%;
            height: 230px;
            max-height: 363px;
            background: #FFF;
        }

        .product-row-thumbnail {
            width: 100%;
            min-height: 211px;
            min-width: 196px;
        }

        .product-row-note {
            font-size: 14px;
            color: #FFF;
            padding-top: 7px;
            font-style: italic;
        }

        .product-row-name {
            height: 35px;
            font-size: 14px;
            margin: 10px;
        }

        .product-row-info {
            padding-bottom: 5px;
            padding-left: 10px;
            padding-right: 10px;
        }

        .product-row-percent {
            color: #180733;
            font-size: 30px;
            display: inline-block;
            margin-right: 10px;
            padding-top: 12px;
        }

        .product-row-price del {
            color: #888;
        }

        .product-row-sale {
            font-size: 20px;
            color: #ed0000;
            font-weight: 700;
        }

        .product-row-bigprice {
            font-size: 30px;
            color: #0655A6;
            padding-top: 10px;
            font-weight: 700;
        }

        .product-row-counts {
            text-align: center;
            color: #555;
        }

        .product-row-buyer {
            color: #555;
        }

        .product-row-price-hover {
            background: none repeat scroll 0 0 rgba(121, 117, 101, 0.8);
            bottom: -100px;
            color: #fff !important;
            font-size: 13px;
            left: 0;
            padding: 10px;
            position: absolute;
            transition: bottom 0.5s ease 0s;
            width: 100%;
        }

        .product-row:hover .product-row-price-hover {
            bottom: 0;
            transition: bottom 0.5s ease 0s;
        }

        .price-range dl {
            line-height: 200%;
            margin-bottom: 5px;
        }

        .price-range dt {
            float: left;
            color: #333 !important;
        }

        .product-row-btnbuy {
            padding: 5px 12px;
            background: #252525;
            color: #FFF;
            margin-top: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }

        .product-row-btnbuy:hover {
            background-color: #0655A6;
            color: #FFF;
        }

        h2.product-group-tittle {
            margin: 0;
            font-size: 22px;
            background: #d7202c;
            padding: 10px 20px;
            color: #fff;
            min-width: 100%;
            line-height: 1.;
            display: inline-block;
        }

        a.products-hot-view-all {
            color: white;
            float: right;
            position: absolute;
            right: 15px;
            top: 11px;
            font-weight: 500 !important;
        }

        @media (min-width: 1025px) {
            .col-fix20 {
                width: 20% !important;
            }
        }

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
            <div class="row">
                <div class="col-md-3">
                    <!-- category menu start -->
                    <div class="left-category-menu">
                        <div class="left-product-cat">
                            <div class="category-heading">
                                <h2>category</h2>
                            </div>
                            <!-- category-menu-list start -->
                            @include('components.catemenu')
                            <!-- category-menu-list end -->
                        </div>
                    </div>
                    <!-- category menu end -->

                </div>
                <div class="col-md-9">
                    <!-- start home slider -->
                    <div class="slider-area hm-1">
                        <!-- slider -->
                        @if (isset($articleNews))
                            <div class="bend niceties preview-2">
                                <div id="ensign-nivoslider-2" class="slides">
                                    <img src="{{ asset(pare_url_file($latestNews->a_avatar)) }}" alt=""
                                        title="#slider-direction-1" style="display: inline; height: 435px;" />
                                    @foreach ($articleNews as $articleNew)
                                        <img src="{{ asset(pare_url_file($articleNew->a_avatar)) }}" alt=""
                                            title="#slider-direction-2" style="display: inline; height: 435px;" />
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
                    <!-- end home slider -->

                    <!-- Article area start -->
                    <div class="unit-banner-area">
                        <div class="row">
                            @if (isset($articleNews))
                                @foreach ($articleNews as $articleNew)
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <!-- single banner start -->
                                        <div class="single-banner">
                                            <a href="#"><img src="{{ asset(pare_url_file($articleNew->a_avatar)) }}"
                                                    alt="" class="img-fluid"
                                                    style="display: inline; weight:250px; height:140px" /></a>
                                        </div>
                                        <!-- single banner end -->
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <!-- Article area end -->

                </div>
            </div>

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
                                                <div class="new-product-percent">-{{$pronew->pro_sale}}%</div>
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
                                        <a href="{{ route('get.detail.product', [$pronew->pro_slug, $pronew->id]) }}"></a>
                                        {{-- Hình ảnh sản phẩm start --}}
                                        <div class="product-row-img">
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
                                                <div class="new-product-percent">-{{$pronew->pro_sale}}%</div>
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


            <!-- Our product section start -->
            <div class="our-product-area">
                <!-- area title start -->
                <div class="area-title">
                    <h2>Our products</h2>
                </div>
                <!-- area title end -->
                <!-- our-product area start -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="features-tab">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li role="presentation" class="active"><a href="#home" data-toggle="tab">Bestsellers</a>
                                </li>
                                <li role="presentation"><a href="#profile" data-toggle="tab">Random Products</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <div class="row">
                                        <div class="featuresthree-curosel">
                                            <div class="col-lg-12 col-md-12">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-1.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-2.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$222.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Donec ac tempus</a>
                                                        </h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <span class="sale-text">Sale</span>
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-3.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-4.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Primis in faucibus</a>
                                                        </h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-5.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-6.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$280.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <span class="sale-text">Sale</span>
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-7.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-8.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$333.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Cras neque metus</a>
                                                        </h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-9.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-10.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$400.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Occaecati
                                                                cupiditate</a></h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-11.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-12.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$300.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Accumsan elit</a></h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-13.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-1.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$100.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Pellentesque
                                                                habitant</a></h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <span class="sale-text">Sale</span>
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-2.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-3.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$110.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Donec non est</a></h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-4.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-5.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$222.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Donec ac tempus</a>
                                                        </h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <span class="sale-text">Sale</span>
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-6.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-7.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$300.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Nunc facilisis</a></h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-8.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-9.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$400.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Aliquam consequat</a>
                                                        </h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <span class="sale-text">Sale</span>
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-10.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-12.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$330.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Pleasure rationally</a>
                                                        </h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <span class="sale-text">Sale</span>
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-11.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-12.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$213.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Proin lectus ipsum</a>
                                                        </h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <span class="sale-text">Sale</span>
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-13.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-2.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$340.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Consequences</a></h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-11.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-2.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$250.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Quisque in arcu</a>
                                                        </h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-11.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-12.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$222.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Donec ac tempus</a>
                                                        </h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                            </div>
                                            <!-- single-product end -->
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                    <div class="row">
                                        <div class="featuresthree-curosel">
                                            <div class="col-lg-12 col-md-12">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <span class="sale-text">Sale</span>
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-11.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-2.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$110.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Pellentesque
                                                                habitant</a></h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-11.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-12.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$300.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Donec non est</a></h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-11.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-12.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$200.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Nunc facilisis</a></h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <span class="sale-text">Sale</span>
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-13.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-2.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$250.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Fusce aliquam</a></h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-8.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-9.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$370.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Aliquam consequat</a>
                                                        </h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <span class="sale-text">Sale</span>
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-10.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-12.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$170.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Pleasure rationally</a>
                                                        </h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-13.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-1.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$450.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Proin lectus ipsum</a>
                                                        </h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-2.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-3.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$300.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Consequences</a></h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-4.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-5.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$350.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Quisque in arcu</a>
                                                        </h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-6.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-7.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$250.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Primis in faucibus</a>
                                                        </h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-9.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-10.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$180.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <span class="sale-text">Sale</span>
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-11.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-12.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$310.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Cras neque metus</a>
                                                        </h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-5.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-6.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$450.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Occaecati
                                                                cupiditate</a></h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                                <!-- single-product start -->
                                                <div class="single-product first-sale">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-image" src="img/products/product-7.jpg"
                                                                alt="" />
                                                            <img class="secondary-image" src="img/products/product-8.jpg"
                                                                alt="" />
                                                        </a>
                                                        <div class="action-zoom">
                                                            <div class="add-to-cart">
                                                                <a href="#" title="Quick View"><i
                                                                        class="fa fa-search-plus"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="actions">
                                                            <div class="action-buttons">
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" title="Add to Wishlist"><i
                                                                                class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" title="Add to Cart"><i
                                                                                class="icon-bag"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="quickviewbtn">
                                                                    <a href="#" title="Add to Compare"><i
                                                                            class="fa fa-retweet"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="price-box">
                                                            <span class="new-price">$178.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h2 class="product-name"><a href="#">Donec non est</a></h2>
                                                        <p>Nunc facilisis sagittis ullamcorper...</p>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- our-product area end -->
            </div>
            <!-- Our product section end -->
        </div>
    </div>

@stop
