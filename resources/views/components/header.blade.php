<!-- header area start -->
<header class="header-four">
    <div style="background: #f1f0f1">
        <div class="container">
            <div class="row">
                <!-- logo start -->
                <div class="col-md-2 text-center">
                    <div class="" style="margin-top:15px">
                        <a href="{{ route('home') }}"><img src="{{ asset('img/logo.gif') }}" alt="" /></a>
                    </div>
                </div>
                <!-- logo end -->
                <!-- search start -->
                <div class="col-md-6 text-left">
                    <form action="index.html" id="searchform" method="get">
                        <div class="input-group" style="margin-top: 10px">
                            <input type="text" class="form-control" maxlength="128" placeholder=""
                                style="border-radius: 20px 0 0 20px;">
                            <span class="input-group-btn">
                                <button type="submit" class="btn"
                                    style=" border-radius: 0 20px 20px 0px; background:#ea1c04; color: white"><i
                                        class="fa fa-search" style=" border-radius: 0 20px 20px 0px;"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
                <!-- search end -->
                <!-- Đăng ký - Đặng nhập - Giỏ hàng -->
                <div class="col-md-4 text-left" style="margin-top: 15px; padding:0">
                    {{-- Đăng ký đăng nhập --}}
                    @if (Auth::check())
                        {{-- <div class="col-md-6 row" style="padding: 0">
                            <li class="" style="padding: 1px; width:100%; list-style-type: none">
                                <a href="#" style="color:black!important;" id="header-top-button">
                                    <div class="col-md-2">
                                        <i class="fas fa-user-circle" style="font-size: 20px; color: black; padding-left:5px; padding-top:5px"></i>
                                    </div>
                                    <div class="col-md-10">
                                        {{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}
                                    </div>
                                </a>
                            </li>
                        </div> --}}
                        <div class="col-md-6" style="padding: 0">
                            <li class="" style="padding: 1px; width:100%; list-style-type: none">
                                <a href="{{ route('get.logout.user') }}" style="color:black!important;"
                                    id="header-top-button"> <i class="fas fa-user-circle"></i>
                                    {{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3" style="padding: 0">
                            <li class="" style="padding: 1px; width:100%; list-style-type: none">
                                <a href="{{ route('get.logout.user') }}" style="color:black!important;"
                                    id="header-top-button"> <i class="fas fa-sign-out-alt"></i>
                                    Logout
                                </a>
                            </li>
                        </div>
                    @else
                        <div class="col-md-3" style="padding: 0">
                            <li class="" style="padding: 1px; width:100%; list-style-type: none">
                                <a href="{{ route('get.register') }}" style="color:black!important;"
                                    id="header-top-button"> <i class="fas fa-clipboard"></i>
                                    Đăng ký
                                </a>
                            </li>
                        </div>
                        <div class="col-md-3" style="padding: 0">
                            <li class="" style="padding: 1px; width:100%; list-style-type: none">
                                <a href="{{ route('get.login') }}" style="color:black!important;"
                                    id="header-top-button" class=" log_in"> <i class="fas fa-user-circle"></i>
                                    Login
                                </a>
                            </li>
                        </div>
                    @endif
                    <div class="col-md-3" style="padding: 0">
                        <li class="expand" style="padding: 1px; width:100%; list-style-type: none">
                            <div>
                                @if (\Cart::count() != 0)
                                    <a href=""><span class="cart-quantity">{{ \Cart::count() }}</span></a>
                                @endif
                                <a href="{{ route('get.list.shopping.cart') }}" style="color:black!important;"
                                    id="header-top-button"> <i class="fas fa-shopping-cart"></i>
                                    Giỏ hàng
                                </a>
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
                                    {{-- Cart Product contain end --}}
                                </ul>
                                <p class="total">Subtotal: <span class="amount">{{ \Cart::subtotal() }}
                                        vnđ</span></p>
                                <p class="buttons">
                                    <a href="{{ route('get.list.shopping.cart') }}" class="button">Checkout</a>
                                </p>
                            </div>
                        </li>
                    </div>

                </div>
                <!-- Đăng ký - Đặng nhập - Giỏ hàng -->
            </div>
        </div>
        <hr style="margin-top: 8px; margin-bottom:0px; backgrounf:#d4d4d4">
        <div class="header-bottom">
            <div class="container">
                <!-- mainmenu area start -->
                <div class="nop-xs text-center">
                    <div class="row">
                        <div class="mainmenu">
                            <nav>
                                <ul>
                                    <div class="col-md-2" style="padding: 0px">
                                        <li class="expand"
                                            style="padding: 1px;border: 1px solid #505050; border-radius: 5px; background-color:#505050; width:100%">
                                            <a href="#" style="color:white !important"> <i class="fa fa-bars"></i>
                                                Danh mục sản
                                                phẩm</a>
                                            <ul
                                                class="sub-menu  {{ \Request::route()->getName() == 'home' ? 'show-home-cate' : 'restrain' }}">
                                                @if (isset($categories))
                                                    @foreach ($categories as $category)
                                                        <li><a
                                                                href="{{ route('get.list.product', [$category->c_slug, $category->id]) }}">{{ $category->c_name }}</a>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                    </div>
                                    {{-- <li class="col-md-1"
                                    style="padding: 1px;border: 1px solid white; border-radius: 5px; margin-right:10px">
                                    <a href="about-us.html">Giới thiệu</a>
                                </li>
                                <li class="col-md-1"
                                    style="padding: 1px;border: 1px solid white; border-radius: 5px; margin-right:10px">
                                    <a href="{{ route('get.contact') }}">Liên hệ</a>
                                </li> --}}
                                    <div class="col-md-2" style="padding-left: 5px; padding-right:0px">
                                        <li style="padding: 1px;border: 1px solid #505050; border-radius: 5px; width:100%"
                                            id="header-button">
                                            <a href="{{ route('get.list.article') }}"> <i
                                                    class="fas fa-newspaper"></i>
                                                Tổng hợp tin tức</a>
                                        </li>
                                    </div>
                                    <div class="col-md-2" style="padding-left: 5px;  padding-right:0px">
                                        <li style="padding: 1px;border: 1px solid #505050; border-radius: 5px; width:100%"
                                            id="header-button">
                                            <a href="{{ route('get.contact') }}"><i
                                                    class="fas fa-hand-holding-usd"></i> Hướng dẫn thanh toán</a>
                                        </li>
                                    </div>

                                    <div class="col-md-2" style="padding-left: 5px;  padding-right:0px">
                                        <li style="padding: 1px;border: 1px solid #505050; border-radius: 5px; width:100%"
                                            id="header-button">
                                            <a href="{{ route('get.contact') }}"><i
                                                    class="fas fa-hand-holding-usd"></i> Hướng dẫn trả góp</a>
                                        </li>
                                    </div>

                                    <div class="col-md-2" style="padding-left: 5px;  padding-right:0px">
                                        <li style="padding: 1px;border: 1px solid #505050; border-radius: 5px; width:100%"
                                            id="header-button">
                                            <a href="{{ route('get.contact') }}"><i class="fas fa-tools"></i> Chính
                                                sách bảo hành</a>
                                        </li>
                                    </div>

                                    <div class="col-md-2" style="padding-left: 5px;  padding-right:0px">
                                        <li style="padding: 1px;border: 1px solid #505050; border-radius: 5px; width:100%"
                                            id="header-button">
                                            <a href="{{ route('get.contact') }}"> <i class="fas fa-truck-moving"></i>
                                                Chính sách vận chuyển</a>
                                        </li>
                                    </div>
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
                </div>
                <!-- mainmenu area end -->
            </div>
        </div>
    </div>
</header>
<!-- header area end -->
