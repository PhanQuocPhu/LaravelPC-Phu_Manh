@extends('layouts.app')
@section('content')
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

                    <!-- Sản phẩm nổi bật start -->
                    @if (@isset($productHot))
                        <div class="block-category side-area">
                            <!-- featured block start -->
                            <!-- block title start -->
                            <div class="bar-title row">
                                <div class="bar-ping"><img src="{{asset('img/bar-ping.png')}}" alt="" /></div>
                                <h2>Sản phẩm nổi bật</h2>
                            </div>
                            <!-- block title end -->

                            <!-- block carousel start -->
                            <div class="block-carousel">
                                <div class="block-content">
                                    @foreach ($productHot as $hot)
                                        <!-- single block start -->
                                        <div class="single-block">
                                            <div class="block-image pull-left">
                                                <a href="product-details.html"><img
                                                        src="{{ asset(pare_url_file($hot->pro_avatar)) }}" alt=""
                                                        class="img img-responsive" style="width: 170px; height:208px" /></a>
                                            </div>
                                            <div class="category-info">
                                                <h3><a href="product-details.html">{{ $hot->pro_name }}</a></h3>
                                                <div class="cat-price">{{ number_format($hot->pro_price - ($hot->pro_price * $hot->pro_sale), 0, '.', '.')}} vnđ <span
                                                        class="old-price">{{ number_format($hot->pro_price, 0, '.', '.')}} vnđ</span></div>
                                                <div class="cat-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single block end -->
                                    @endforeach
                                </div>
                                <div class="block-content">
                                    <!-- single block start -->
                                    <div class="single-block">
                                        <div class="block-image pull-left">
                                            <a href="product-details.html"><img src="img/block-cat/block-5.jpg"
                                                    alt="" /></a>
                                        </div>
                                        <div class="category-info">
                                            <h3><a href="product-details.html">Occaecati cupiditate</a></h3>
                                            <div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
                                            <div class="cat-rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single block end -->
                                    <!-- single block start -->
                                    <div class="single-block">
                                        <div class="block-image pull-left">
                                            <a href="product-details.html"><img src="img/block-cat/block-6.jpg"
                                                    alt="" /></a>
                                        </div>
                                        <div class="category-info">
                                            <h3><a href="product-details.html">Accumsan elit</a></h3>
                                            <div class="cat-price">$165.00</div>
                                            <div class="cat-rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single block end -->
                                    <!-- single block start -->
                                    <div class="single-block">
                                        <div class="block-image pull-left">
                                            <a href="product-details.html"><img src="img/block-cat/block-13.jpg"
                                                    alt="" /></a>
                                        </div>
                                        <div class="category-info">
                                            <h3><a href="product-details.html">Pellentesque habitant</a></h3>
                                            <div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
                                            <div class="cat-rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single block end -->
                                    <!-- single block start -->
                                    <div class="single-block">
                                        <div class="block-image pull-left">
                                            <a href="product-details.html"><img src="img/block-cat/block-14.jpg"
                                                    alt="" /></a>
                                        </div>
                                        <div class="category-info">
                                            <h3><a href="product-details.html">Donec non est</a></h3>
                                            <div class="cat-price">$560.00</div>
                                            <div class="cat-rating">
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                                <a href="#"><i class="fa fa-star"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single block end -->
                                </div>
                            </div>
                            <!-- block carousel end -->


                        </div>
                    @endif
                    <!-- Sản phẩm nổi bật end -->



                    <!-- aboutthumb area start -->
                    <div class="aboutthumb-area">
                        <!-- block title start -->
                        <div class="bar-title rox-title">
                            <div class="bar-ping"><img src="{{asset('img/bar-ping.png')}}" alt="" /></div>
                            <h2>About Us</h2>
                        </div>
                        <!-- block title end -->
                        <div class="all-singlepost">
                            <!-- single latestpost start -->
                            <div class="single-post">
                                <div class="about-thumb">
                                    <a href="#">
                                        <img src="img/about/about-us.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="post-thumb-info">
                                    <div class="postexcerpt">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                            minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- single latestpost end -->
                        </div>
                    </div>
                    <!-- aboutthumb area end -->

                    <!-- on sale area start -->
                    <div class="onsale-area">
                        <!-- block title start -->
                        <div class="bar-title rox-title">
                            <div class="bar-ping"><img src="img/bar-ping.png" alt="" /></div>
                            <h2>On sales</h2>
                        </div>
                        <!-- block title end -->
                        <div class="block-carousel">
                            <div class="single-product ex-pro">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-1.jpg" alt="" />
                                        <img class="secondary-image" src="img/products/product-2.jpg" alt="" />
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$200.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product start -->
                            <div class="single-product ex-pro">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-5.jpg" alt="" />
                                        <img class="secondary-image" src="img/products/product-6.jpg" alt="" />
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$300.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="single-product ex-pro">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-9.jpg" alt="" />
                                        <img class="secondary-image" src="img/products/product-10.jpg" alt="" />
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$270.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="single-product ex-pro">
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-13.jpg" alt="" />
                                        <img class="secondary-image" src="img/products/product-1.jpg" alt="" />
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$340.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Cras neque metus</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="single-product ex-pro">
                                <span class="sale-text">Sale</span>
                                <div class="product-img">
                                    <a href="#">
                                        <img class="primary-image" src="img/products/product-4.jpg" alt="" />
                                        <img class="secondary-image" src="img/products/product-5.jpg" alt="" />
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="add-to-wishlist">
                                                    <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                </div>
                                                <div class="compare-button">
                                                    <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                            <div class="quickviewbtn">
                                                <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">$360.00</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
                                    <p>Nunc facilisis sagittis ullamcorper...</p>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                    <!-- on sale area end -->

                    
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

                    <!-- unit banner area start -->
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
                    <!-- unit banner area end -->


                    <!-- New product section start -->
                    <div class="our-product-area new-product">
                        <div class="area-title">
                            <h2>New products</h2>
                        </div>
                        <!-- our-product area start -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="featuresthree-curosel">
                                        @if (isset($productNews))
                                            @foreach ($productNews as $pronew)
                                                <!-- single-product start -->
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="single-product ex-pro">
                                                        <div class="product-img" style="width: 270px; height:330px">
                                                            <a href="#">
                                                                <img class="primary-image img-fluid"
                                                                    src="{{ asset(pare_url_file($pronew->pro_avatar)) }}"  alt="" />
                                                                <img class="secondary-image img-fluid"
                                                                    src="{{ asset(pare_url_file($pronew->pro_avatar)) }}" alt="" />
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
                                                                            <a href="{{route('add.shopping.cart',$pronew->id)}}" title="Add to Cart"><i
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
                                                                <span class="new-price">{{ number_format($pronew->pro_price, 0, '.', '.') }} vnđ</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="#">{{ $pronew->pro_name }}</a></h2>
                                                            <p>{{ $pronew->pro_description }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product end -->
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- our-product area end -->
                    </div>
                    <!-- New product section end -->

                    <!-- banner-area start -->
                    <div class="banner-area">
                        <a href=""><img src="img/banner/banner-3.jpg" alt="" /></a>
                    </div>
                    <!-- banner-area end -->


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
                                        <li role="presentation" class="active"><a href="#home"
                                                data-toggle="tab">Bestsellers</a></li>
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-1.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-2.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-3.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-4.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-5.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-6.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-7.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-8.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-9.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-10.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-11.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-12.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-13.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-1.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-2.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-3.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-4.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-5.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-6.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-7.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-8.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-9.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-10.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-12.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-11.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-12.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-13.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-2.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-11.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-2.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-11.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-12.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-11.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-2.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-11.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-12.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-11.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-12.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-13.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-2.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-8.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-9.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-10.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-12.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-13.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-1.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-2.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-3.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-4.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-5.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-6.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-7.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-9.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-10.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-11.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-12.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-5.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-6.jpg" alt="" />
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
                                                                    <img class="primary-image"
                                                                        src="img/products/product-7.jpg" alt="" />
                                                                    <img class="secondary-image"
                                                                        src="img/products/product-8.jpg" alt="" />
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


                    <!-- Brand Logo Area Start -->
                    <div class="brand-area">
                        <div class="banner-extension">
                            <div class="brand-carousel">
                                <div class="brand-item"><a href="#"><img src="img/brand/bg1-brand.jpg" alt="" /></a></div>
                                <div class="brand-item"><a href="#"><img src="img/brand/bg2-brand.jpg" alt="" /></a></div>
                                <div class="brand-item"><a href="#"><img src="img/brand/bg3-brand.jpg" alt="" /></a></div>
                                <div class="brand-item"><a href="#"><img src="img/brand/bg4-brand.jpg" alt="" /></a></div>
                                <div class="brand-item"><a href="#"><img src="img/brand/bg5-brand.jpg" alt="" /></a></div>
                                <div class="brand-item"><a href="#"><img src="img/brand/bg2-brand.jpg" alt="" /></a></div>
                                <div class="brand-item"><a href="#"><img src="img/brand/bg3-brand.jpg" alt="" /></a></div>
                                <div class="brand-item"><a href="#"><img src="img/brand/bg4-brand.jpg" alt="" /></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Brand Logo Area End -->

                </div>
            </div>
        </div>
    </div>

@stop
