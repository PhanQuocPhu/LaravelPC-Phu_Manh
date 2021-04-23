<!-- header area start -->
<header class="header-four">
    <div class="container">
        <div class="row">
            <!-- language division start -->
            <div class="col-md-4 text-left">
                <div class="top-detail">
                    <!-- language division start -->
                    <div class="disflow">
                        <div class="expand lang-all disflow">
                            <a href="#"><img src="{{ asset('img/country') }}/en.gif" alt="">English</a>
                            <ul class="restrain language">
                                <li><a href="#"><img src="{{ asset('img/country') }}/it.gif" alt="">Italiano</a></li>
                                <li><a href="#"><img src="{{ asset('img/country') }}/nl_nl.gif" alt="">Nederlands</a>
                                </li>
                                <li><a href="#"><img src="{{ asset('img/country') }}/de_de.gif" alt="">Deutsch</a>
                                </li>
                                <li><a href="#"><img src="{{ asset('img/country') }}/en.gif" alt="">English</a></li>
                            </ul>
                        </div>
                        <div class="expand lang-all disflow">
                            <a href="#">$ USD</a>
                            <ul class="restrain language">
                                <li><a href="#">€ Eur</a></li>
                                <li><a href="#">$ USD</a></li>
                                <li><a href="#">£ GBP</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- language division end -->
                </div>
                <!-- language division end -->
            </div>
            <!-- logo start -->
            <div class="col-md-4 text-center">
                <div class="top-logo">
                    <a href="index.html"><img src="{{ asset('img/logo.gif') }}" alt="" /></a>
                </div>
            </div>
            <!-- logo end -->
            <!-- top details area start -->
            <div class="col-md-4 text-right">
                <div class="top-detail dflt-src">
                    <!-- search divition start -->
                    <div class="disflow">
                        <div class="header-search expand">
                            <div class="search-icon fa fa-search"></div>
                            <div class="product-search restrain">
                                <div class="container nopadding-right">
                                    <form action="index.html" id="searchform" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" maxlength="128"
                                                placeholder="Search product...">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-default"><i
                                                        class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- search divition end -->
                </div>
            </div>
            <!-- top details area end -->
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <!-- mainmenu area start -->
                <div class="col-md-6 nop-xs text-center">
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li class="expand"><a href="{{ route('home') }}">Trang chủ</a>
                                    <ul class="restrain sub-menu">
                                        {{-- <li><a href="index-8.html">Home 8</a></li> --}}
                                    </ul>
                                </li>

                                <li class="expand"><a href="#">Danh mục sản phẩm</a>
                                    <div class="restrain mega-menu megamenu4">
                                        @if (isset($categories))
                                            @foreach ($categories as $category)
                                                <span class="block-last">
                                                    <a class="mega-menu-title"
                                                        href="{{ route('get.list.product', [$category->c_slug, $category->id]) }}">{{ $category->c_name }}</a>
                                                </span>
                                            @endforeach
                                        @endif
                                    </div>
                                </li>

                                <li class="expand"><a href="about-us.html">Giới thiệu</a></li>
                                <li class="expand"><a href="contact-us.html">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- mobile menu start -->
                    <div class="row">
                        <div class="col-sm-12 mobile-menu-area">
                            <div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
                                <span class="mobile-menu-title">Menu</span>
                                <nav>
                                    <ul>
                                        <li><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index-2.html">Home 2</a></li>
                                                <li><a href="index-3.html">Home 3</a></li>
                                                <li><a href="index-4.html">Home 4</a></li>
                                                <li><a href="index-5.html">Home 5</a></li>
                                                <li><a href="index-6.html">Home 6</a></li>
                                                <li><a href="index-7.html">Home 7</a></li>
                                                <li><a href="index-8.html">Home 8</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.html">Man</a>
                                            <ul>
                                                <li><a href="shop-grid.html">Dresses</a>
                                                    <ul>
                                                        <li><a href="shop-grid.html">Coctail</a></li>
                                                        <li><a href="shop-grid.html">Day</a></li>
                                                        <li><a href="shop-grid.html">Evening </a></li>
                                                        <li><a href="shop-grid.html">Sports</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="mega-menu-title" href="shop-grid.html"> Handbags </a>
                                                    <ul>
                                                        <li><a href="shop-grid.html">Blazers</a></li>
                                                        <li><a href="shop-grid.html">Table</a></li>
                                                        <li><a href="shop-grid.html">Coats</a></li>
                                                        <li><a href="shop-grid.html">Kids</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="mega-menu-title" href="shop-grid.html"> Clothing </a>
                                                    <ul>
                                                        <li><a href="shop-grid.html">T-Shirt</a></li>
                                                        <li><a href="shop-grid.html">Coats</a></li>
                                                        <li><a href="shop-grid.html">Jackets</a></li>
                                                        <li><a href="shop-grid.html">Jeans</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contact-us.html">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- mobile menu end -->
                </div>
                <!-- mainmenu area end -->
                <div class="col-md-6 text-right">
                    <div class="top-detail crt-edt">
                        <!-- addcart top start -->
                        <div class="disflow crt-edt">
                            <div class="circle-shopping expand">
                                <div class="shopping-carts text-right">
                                    <div class="cart-toggler">
                                        <a href="{{ route('get.list.shopping.cart') }}"><i class="icon-bag"></i></a>
                                        <a href=""><span class="cart-quantity">{{ \Cart::count() }}</span></a>
                                    </div>
                                    <div class="restrain small-cart-content">
                                        <ul class="cart-list">
                                            {{-- Cart Product contain start --}}
                                            @if (isset($products))
                                                @foreach ($products as $procart)
                                                <li>
                                                    <a class="sm-cart-product" href="product-details.html">
                                                        <img src="{{ asset('img/products/sm-products/cart1.jpg') }}"
                                                            alt="">
                                                    </a>
                                                    <div class="small-cart-detail">
                                                        <a class="remove" href="#"><i class="fa fa-times-circle"></i></a>
                                                        <a href="#" class="edit-btn"><img
                                                                src="{{ asset('img/btn_edit.gif') }}"
                                                                alt="Edit Button" /></a>
                                                        <a class="small-cart-name" href="product-details.html">Voluptas
                                                            nulla</a>
                                                        <span
                                                            class="quantitys"><strong>1</strong>x<span>$75.00</span></span>
                                                    </div>
                                                </li>
                                                @endforeach
                                            @endif
                                           {{--  <li>
                                                <a class="sm-cart-product" href="product-details.html">
                                                    <img src="{{ asset('img/products/sm-products/cart1.jpg') }}"
                                                        alt="">
                                                </a>
                                                <div class="small-cart-detail">
                                                    <a class="remove" href="#"><i class="fa fa-times-circle"></i></a>
                                                    <a href="#" class="edit-btn"><img
                                                            src="{{ asset('img/btn_edit.gif') }}"
                                                            alt="Edit Button" /></a>
                                                    <a class="small-cart-name" href="product-details.html">Voluptas
                                                        nulla</a>
                                                    <span
                                                        class="quantitys"><strong>1</strong>x<span>$75.00</span></span>
                                                </div>
                                            </li> --}}
                                            {{-- Cart Product contain end --}}
                                        </ul>
                                        <p class="total">Subtotal: <span class="amount">{{ \Cart::subtotal() }} vnđ</span></p>
                                        <p class="buttons">
                                            <a href="checkout.html" class="button">Checkout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- addcart top start -->
                        <div class="disflow">
                            <div class="expand dropps-menu">
                                <a href="#"><i class="fa fa-align-right"></i></a>
                                <ul class="restrain language">
                                    @if (Auth::check())
                                        <li><a href="login.html">My Account</a></li>
                                        <li><a href="wishlist.html">My Wishlist</a></li>
                                        <li><a href="cart.html">My Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="#">Testimonial</a></li>
                                        <li><a href="{{ route('get.logout.user') }}">Log Out</a></li>
                                    @else
                                        <li><a href="{{ route('get.register') }}">Register</a></li>
                                        <li><a href="{{ route('get.login') }}">Log In</a></li>
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
