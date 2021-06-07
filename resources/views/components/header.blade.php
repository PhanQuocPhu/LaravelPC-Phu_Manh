<style>
    .smart-search-wrapper>a.thumbs {
        width: 80px;
        display: inline-block;
        padding: 0px;
    }

    .smart-search-wrapper>a.thumbs img {
        position: absolute;
        top: 0px;
        width: 80px;
        height: 80px;
        left: 0px;
    }

    .smart-search-wrapper {
        left: 316.1px;
        position: fixed;
        background: #fff;
        /*border: 1px solid rgb(215, 215, 215);*/
        border-top: none;
        z-index: 9999;
    }

    .smart-search-wrapper>a {
        width: calc(100% - 80px);
        float: left;
        color: #686767;
        text-decoration: none;
        line-height: 29px;
        font-size: 13px;
        font-family: sans-serif;
        padding: 5px 80px 5px 5px;
        position: relative;
        height: 80px;
        line-height: 20px;
        padding-top: 20px;
    }

    .smart-search-wrapper>a.select,
    .smart-search-wrapper>a:hover {
        background: -webkit-linear-gradient(left, #fff, #EAEAEA);
        /* For Safari 5.1 to 6.0 */
        background: -o-linear-gradient(left, #fff, #EAEAEA);
        /* For Opera 11.1 to 12.0 */
        background: -moz-linear-gradient(left, #fff, #EAEAEA);
        /* For Firefox 3.6 to 15 */
        background: linear-gradient(left, #fff, #EAEAEA);
        /* Standard syntax (must be last) */
        color: #000;
    }

    .smart-search-wrapper>a>span.price-search {
        position: absolute;
        right: 5px;
        top: 30px;
        color: #D42424;
        font-size: 15px;
    }

</style>
<div class="header">
    <!--TOP BANNER SLIDER RANDOM-->
    <div class="fix-xxx">

        <div class="headerxxx">
            <div class="container gearvn-content-section">
                <div class="row">

                    <div class="left_header" style="z-index: 997;">
                        <a href="/" class="hidden-xsx logo-big">
                            <img src="{{ asset('img/logo.gif') }}" alt="" />
                        </a>
                        <a href="/" class="hidden-sm hidden-md hidden-lg logo-small">
                            <img src="{{ asset('img/logo.gif') }}" alt="" />
                        </a>
                        <div class="sidebar-search hidden-md hidden-lg"
                            style="flex: 1;margin-left: 15px;margin-right: 56px;">
                            <div class="gearvn-search-block-mobile">
                                <form class="search_bar" action="/search">
                                    <!--<div class="search_dropdown">-->
                                    <!--<span>All</span>-->
                                    <!--<ul>-->
                                    <!--<li class="selected">All</li>-->
                                    <!--<li>Books</li>-->
                                    <!--<li>Articles</li>-->
                                    <!--</ul>-->
                                    <!--</div>-->
                                    <input type="text" name="q" placeholder="Nhập mã hoặc tên sản phẩm"
                                        style="width: 92%;">
                                    <button type="submit" value="Search">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="right_header">
                        <div class=" pd5 fl1 ">
                            <div id="search" class=" hidden-sm  hidden-xs">
                                <div class="search">
                                    <form id="searchbox" class="popup-content ultimate-search" action="/search"
                                        method="get" role="search">
                                        <input name="q" type="text" placeholder="Nhập mã hoặc tên sản phẩm..."
                                            class="inputbox search-query" autocomplete="off">
                                        <button type="submit" class="btn-search btn btn-link"><span class="fa fa-search"
                                                aria-hidden="true"></span></button>

                                        {{-- <input type="hidden" class="collection_id" value="(collectionid:product>=0)">
                                        <input type="hidden" class="collection_handle" value="all">
                                        <input type="hidden" class="collection_name" value="all"> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class=" pdl0 fl1 ">
                            <div class="gearvn-right-top-block">
                                @if (Auth::check())
                                    <a class="gearvn-header-top-item" href="{{ route('user.info') }}">
                                        <img src="//theme.hstatic.net/1000026716/1000440777/14/ak1.png?v=19892">
                                        <div class="header-right-description">
                                            <div class="gearvn-text">
                                                {{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}
                                            </div>
                                        </div>
                                    </a>
                                    <a class="gearvn-header-top-item" href="{{ route('get.logout.user') }}">
                                        <img src="//theme.hstatic.net/1000026716/1000440777/14/ak2.png?v=19892">
                                        <div class="header-right-description">
                                            <div class="gearvn-text">Đăng xuất</div>
                                        </div>
                                    </a>
                                    <a class="gearvn-header-top-item" href="{{ route('user.transaction') }}">
                                        <img src="//theme.hstatic.net/1000026716/1000440777/14/ak4.png?v=19892">
                                        <div class="header-right-description">
                                            <div class="gearvn-text">Thông tin đơn hàng</div>
                                        </div>
                                    </a>

                                @else
                                    <a class="gearvn-header-top-item" href="{{ route('get.register') }}">
                                        <img src="//theme.hstatic.net/1000026716/1000440777/14/ak1.png?v=19892">
                                        <div class="header-right-description">
                                            <div class="gearvn-text">Đăng ký</div>
                                        </div>
                                    </a>
                                    <a class="gearvn-header-top-item" href="{{ route('get.login') }}">
                                        <img src="//theme.hstatic.net/1000026716/1000440777/14/ak3.png?v=19895">
    
                                        <div class="header-right-description">
                                            <div class="gearvn-text">Đăng nhập</div>
                                        </div>
                                    </a>
                                @endif

                                <a class="gearvn-header-top-item rela" href="{{ route('get.list.shopping.cart') }}">
                                    <div class="number" id="cart-count">{{ \Cart::count() }}</div>
                                    <img src="//theme.hstatic.net/1000026716/1000440777/14/ak5.png?v=19892">
                                    <div class="header-right-description">
                                        <div class="gearvn-text">giỏ hàng </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="gearvn-content-section padding-10-0 hidden-xs hidden-sm container">
            <div class="content-flex top-header-bar">
                <span class="style-nav-fix hidden"><i class="fa fa-bars"></i> Danh mục sản phẩm</span>
                <div class="fixed-nav">
                    <span class="fixed-menu style-nav-fix "><i class="fa fa-bars"></i> Danh mục sản phẩm</span>
                    <!--MENU LEFT-->
                    <!--<span class="click-list"><i class="fa fa-bars"></i> Danh mục sản phẩm</span>-->
                    <div class="gearvn-header-menu freez">
                        <div class="cat-menu gearvn-cat-menu">
                            <nav id="megamenu-nav-freez" class="megamenu-nav">
                                <ol class="megamenu-nav-primary responsive" id="megamenu-nav-main-2">






                                    <li class="cat-menu-item ">
                                        <a class="gearvn-cat-menu-item" href="https://gearvn.com/pages/laptop">
                                            <span class="gearvn-cat-menu-icon">
                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx21.png?v=19892">

                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx11.png?v=19892">
                                            </span>
                                            <span class="gearvn-cat-menu-name">Laptop</span>
                                        </a>
                                        <div class="megamenu absolute-center level0 xlab_grid_container"
                                            style="display: none;">
                                            <div class="column xlab_column_5_5">


                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/laptop-gaming">Laptop Gaming</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-gaming-acer">Acer</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-gaming-asus">Asus</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-msi-gaming">MSI</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-gaming-dell">Dell</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-gaming-lenovo">Lenovo</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/laptop-van-phong">Laptop Văn
                                                        Phòng</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-acer-van-phong-pho-thong">Acer</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-hp-van-phong-pho-thong">HP</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-asus-van-phong-pho-thong">Asus</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-lenovo-van-phong-pho-thong">Lenovo</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-dell-van-phong-pho-thong">Dell</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/laptop-mong-nhe">Laptop Mỏng
                                                        Nhẹ</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-acer-cao-cap">Acer</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-asus-doanh-nhan">Asus</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-dell-doanh-nhan">Dell</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-hp-doanh-nhan">HP</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/msi-modern-14-series">MSI</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-lg-cao-cap">LG</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-lenovo-doanh-nhan">Lenovo</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/laptop-dell">Laptop
                                                        Dell</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-dell-inspiron-series">Inspiron
                                                        Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-gaming-dell">G Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-dell-xps-chinh-hang">XPS Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-dell-vostro-series">Vostro Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/laptop-hp">Laptop
                                                        HP</a>


                                                    <a class="sub-cat-item-filter" href="/collections/laptop-hp-14s">HP
                                                        15s / 14s Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/pavilion-series">Pavilion Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/probook-series">ProBook Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-hp-envy-chinh-hang">Envy Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/hp-spectre-chinh-hang">Spectre Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/laptop-lenovo-thinkpad-chinh-hang">Laptop
                                                        Lenovo</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-lenovo-l-series">L-Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-gaming-lenovo">Legion Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-lenovo-van-phong-pho-thong">Ideadpad
                                                        Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-lenovo-doanh-nhan">ThinkPad Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/laptop-acer">Laptop
                                                        Acer</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-acer-nitro-series">Nitro Series -
                                                        Gaming</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-acer-predator-series">Helios Series -
                                                        Gaming</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-acer-predator-triton-series">Triton
                                                        Series - Gaming</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-acer-aspire-series">Aspire Series -
                                                        Văn phòng</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/acer-swift-series">Swift Series - Cao cấp</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/laptop-asus">Laptop
                                                        Asus</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-asus-tuf-gaming-series">TUF Series -
                                                        Gaming</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-asus-rog-series">ROG Series -
                                                        Gaming</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-asus-gaming-zephyrus-series">Zephyrus
                                                        Series - Gaming</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-asus-vivobook-series">VivoBook - Văn
                                                        phòng</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-asus-zenbook-series">ZenBook - Cao
                                                        cấp</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-asus-expertbook">ExpertBook - Cao
                                                        cấp</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-asus-proart">ProArt - Studio</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/laptop-msi">Laptop
                                                        MSI</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-msi-bravo-series">Bravo &amp; Alpha
                                                        Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-msi-gf-series">GF Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-msi-gl-series">GL Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-msi-ge-series">GE Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-msi-gs-series">GS Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="https://gearvn.com/pages/msi-modern-14-series">Modern
                                                        Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/prestige-series">Prestige Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/apple">Apple</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="https://gearvn.com/pages/macbook">Macbook</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/imac-24-2021">iMac</a>


                                                    <a class="sub-cat-item-filter" href="/collections/mac-mini">Mac
                                                        Mini</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/phu-kien-apple">Phụ kiện Apple</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/laptop-lg-cao-cap">Laptop LG</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-lg-cao-cap">LG Gram</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/laptop-gaming">Laptop theo VGA</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-nvidia-gtx-1650">GTX 1650</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-nvidia-gtx-1660ti">GTX 1660Ti</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/laptop-nvidia-rtx">RTX Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/linh-kien-phu-kien-laptop">Linh Kiện &amp;
                                                        Phụ Kiện Laptop</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ram-laptop">Ram
                                                        laptop</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ssd-laptop">SSD
                                                        laptop</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/de-tan-nhiet-laptop">Đế tản nhiệt laptop</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/balo-tui-chong-soc">Balo &amp; túi chống sốc
                                                        laptop</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/o-cung-di-dong-hdd-box">Ổ cứng di động</a>


                                                    <br>
                                                </div>


                                            </div>
                                            <div class="sub-cat-item pull-right"
                                                style="padding: 0; display: flex; justify-content: flex-end">
                                                <a class="none" href="https://gearvn.com/pages/laptop">
                                                    <img src="//theme.hstatic.net/1000026716/1000440777/14/xxxbannerxxx1.png?v=19892"
                                                        alt="">
                                                </a>

                                            </div>
                                        </div>
                                    </li>






                                    <li class="cat-menu-item ">
                                        <a class="gearvn-cat-menu-item" href="https://gearvn.com/pages/pc-gvn">
                                            <span class="gearvn-cat-menu-icon">
                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx22.png?v=19892">

                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx12.png?v=19892">
                                            </span>
                                            <span class="gearvn-cat-menu-name">PC Gaming</span>
                                        </a>
                                        <div class="megamenu absolute-center level0 xlab_grid_container">
                                            <div class="column xlab_column_5_5">


                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/pc-gvn-gaming-tam-trung">CẤU HÌNH
                                                        TẦM TRUNG</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-titan-10-m">Titan
                                                        10 M - Pentium - 1050Ti</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-axe">Axe M -
                                                        Intel i3 - GT 710</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-ventus">Ventus M
                                                        - Intel i3 - GT 1030</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-mystic-m">Mystic
                                                        M - Intel i3 - 1050Ti</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-ivy-10-m">Ivy M
                                                        -- Intel i3 - 1650</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-viper-1660">Viper
                                                        M - Intel i3 - 1660</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-minion">Minion M
                                                        - Intel i3 - 1660S</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-yuumi-2060">Yuumi
                                                        M - Intel i5 - 1660</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-assassin-1650">Assasin M - Athlon -
                                                        1050Ti</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-athen-s">Athen M
                                                        - AMD R5 - 1650</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/pc-gvn-gaming-cao-cap">CẤU HÌNH
                                                        CAO CẤP</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-darius">Darius S
                                                        - Intel i5 (10th) - RX570 8GB</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-ghots-s">Ghost S
                                                        - Intel i5 (10th) - 2060</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-hextech-s">Hextech S - Intel i5 (11th) -
                                                        1660S</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-ghost-s-intel-gen-11">Ghost 11 S - Intel i5
                                                        (11th) - 2060</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-phantom-s">Phantom S - Intel i5 (11th) -
                                                        3060</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-volibear-s">Volibear S - Intel i7 (9th) -
                                                        2060</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-tinker">Tinker S
                                                        - Intel i7 (10th) - 2060</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-garen-2070s">Garen S - Intel i7 (10th) -
                                                        3060</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-venus">Venus S -
                                                        AMD R5 (3th) - RX570 8GB</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-pyke-s">Pyke S -
                                                        AMD R5 (5th) - 1660S</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-lina">Lina S -
                                                        AMD R5 (5th) - 2060</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-hera">Hera S -
                                                        AMD R7 (3th) - RX6700 XT</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/pc-gaming-sieu-cao-cap">CẤU HÌNH SIÊU CAO
                                                        CẤP</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-avengers-z">Avengers Z - AMD R7 (5th) -
                                                        RX6700 XT</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-predator-z">Predator Z - AMD R7 (5th) -
                                                        RX6800 XT</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-valorant-z">Valorant Z - Intel i7 (10th) -
                                                        3070</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-vision-z">Vision
                                                        Z - Intel i7 (11th) - 3070</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-phoenix-z">Phoenix Z - Intel i9 (11th) -
                                                        3070</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-urus-x">Urus X -
                                                        R9 5950X - RX6900 XT</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-aorus-10-x">GVN
                                                        Aorus X</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-dragon-x">GVN
                                                        Dragon X</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-sekira-x">GVN
                                                        Sekira X</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-rog-x">GVN Rog
                                                        X</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/pc-gvn">CẤU HÌNH THEO GIÁ</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="https://gearvn.com/pages/pc-gvn-gaming-tam-trung">PC
                                                        gaming từ 8 đến 20 triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="https://gearvn.com/pages/pc-gvn-gaming-cao-cap">PC gaming
                                                        từ 20 đến 50 triệu</a>


                                                    <a class="sub-cat-item-filter" href="/collections/tren-60-trieu">Pc
                                                        gaming trên 50 triệu</a>


                                                    <br>
                                                </div>


                                            </div>
                                            <div class="sub-cat-item pull-right"
                                                style="padding: 0; display: flex; justify-content: flex-end">
                                                <a class="none" href="https://gearvn.com/pages/pc-gvn">
                                                    <img src="//theme.hstatic.net/1000026716/1000440777/14/xxxbannerxxx2.png?v=19892"
                                                        alt="">
                                                </a>

                                            </div>
                                        </div>
                                    </li>






                                    <li class="cat-menu-item ">
                                        <a class="gearvn-cat-menu-item" href="/collections/pc-workstation">
                                            <span class="gearvn-cat-menu-icon">
                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx23.png?v=19892">

                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx13.png?v=19892">
                                            </span>
                                            <span class="gearvn-cat-menu-name">PC - Workstation</span>
                                        </a>
                                        <div class="megamenu absolute-center level0 xlab_grid_container">
                                            <div class="column xlab_column_5_5">


                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/workstation-thiet-ke-do-hoa-2d-photoshop-lightroom-illustrator">PC
                                                        Thiết kế đồ họa 2D</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-gcreator-c301">GVN G-Creator C301</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-gcreator-c501">GVN G-Creator C501</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-gcreator-c701">GVN G-Creator C701</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/workstation-thiet-ke-do-hoa-3d-cad-bim-compositing">PC
                                                        Thiết kế đồ họa 3D</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-gcreator-c302-1">GVN G-Creator C302</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-gcreator-c502">GVN G-Creator C502</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-gcreator-c702">GVN G-Creator C702</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/workstation-dung-film-hau-ky-video-premiere-after-effects-davinci-resolve-nuke">PC
                                                        Dựng Video &amp; Hậu kỳ</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-gcreator-c303">GVN G-Creator C303</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-gcreator-c503">GVN G-Creator C503</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-gcreator-c703">GVN G-Creator C703</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/workstation-tinh-toan-ai-machine-learning-tensorflow-caffe-molecular-dynamics">PC
                                                        Tính toán AI ML</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-g-creator-c304">GVN G-Creator C304</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-gcreator-c504">GVN G-Creator C504</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/gvn-gcreator-c704">GVN G-Creator C704</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/intel-xeon">CPU
                                                        Workstation</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/cpu-intel-core-x">CPU Intel Core X</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/cpu-intel-xeon-e">CPU Intel Xeon E</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/cpu-intel-xeon-w">CPU Intel Xeon W</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/cpu-intel-xeon-scalable">CPU Intel Xeon
                                                        Scalable</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/cpu-amd-threadripper">CPU AMD
                                                        Threadripper</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/amd-ryzen-threadripper-pro-gen-3">CPU AMD
                                                        Threadripper PRO</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/mainboard-workstation">Mainboard
                                                        Workstation</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/mainboard-workstation-c246">Mainboard C246 -
                                                        Xeon E</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/mainboard-workstation-w480">Mainboard W480 -
                                                        Xeon W1200</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/mainboard-workstation-c422">Mainboard C422 -
                                                        Xeon W2000</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/mainboard-workstation-c621">Mainboard C621 -
                                                        Xeon Scalable</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/mainboard-x299x-lga2066">Mainboard X299x -
                                                        Core X</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/mainboard-workstation-wrx80">Mainboard WRX80
                                                        -Threadipper PRO</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/main-amd-ryzen-trx40-socket-str4">Mainboard
                                                        TRX40 - Threadipper 3000</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/ram-ecc-ws">RAM
                                                        Workstation</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ram-ecc-udimm">RAM
                                                        ECC UDIMM</a>


                                                    <a class="sub-cat-item-filter" href="/collections/rdimm">RAM ECC
                                                        RDIMM</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ram-pc">RAM DDR4
                                                        UDIMM</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/nvidia-quadro">VGA
                                                        Workstation</a>


                                                    <a class="sub-cat-item-filter" href="/collections/nvidia-quadro">VGA
                                                        NVIDIA Quadro</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/nvidia-geforce-rtx">VGA NVIDIA GeForce</a>


                                                    <a class="sub-cat-item-filter" href="/collections/radeon-rx">VGA AMD
                                                        Radeon RX Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/ssd-workstation">SSD
                                                        Workstation</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/hdd-workstation">HDD
                                                        Workstation</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/bo-luu-dien-ups">Bộ
                                                        lưu điện - UPS</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/bo-luu-dien-ares">Hãng ARES</a>


                                                    <br>
                                                </div>


                                            </div>
                                            <div class="sub-cat-item pull-right"
                                                style="padding: 0; display: flex; justify-content: flex-end">
                                                <a class="none" href="https://gearvn.com/pages/pc-gvn">
                                                    <img src="//theme.hstatic.net/1000026716/1000440777/14/xxxbannerxxx3.png?v=19892"
                                                        alt="">
                                                </a>

                                            </div>
                                        </div>
                                    </li>






                                    <li class="cat-menu-item ">
                                        <a class="gearvn-cat-menu-item" href="https://gearvn.com/pages/pc-van-phong">
                                            <span class="gearvn-cat-menu-icon">
                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx24.png?v=19892">

                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx14.png?v=19892">
                                            </span>
                                            <span class="gearvn-cat-menu-name">PC Văn Phòng</span>
                                        </a>
                                        <div class="megamenu absolute-center level0 xlab_grid_container">
                                            <div class="column xlab_column_5_5">


                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/pc-van-phong">MÁY BỘ VĂN
                                                        PHÒNG</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-ares">GVN Ares -
                                                        Athlon 3000G</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-usopp">GVN Usopp
                                                        - Pentium G6400</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/gvn-homework">CẤU
                                                        HÌNH HOMEWORK</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-homework-i3">GVN
                                                        Homework I3 - 10105</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-homework-i5">GVN
                                                        Homework I5 - 10400</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-homework-i7">GVN
                                                        Homework I7 - 10700</a>


                                                    <a class="sub-cat-item-filter" href="/products/gvn-homework-r5">GVN
                                                        Homework R5 - 3400G</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/may-bo-mini">MÁY BỘ
                                                        INTEL® NUC</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/nuc-celeron-pentium">NUC Celeron/Pentium</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/nuc10-cpu-intel-10th-gen">NUC10 (CPU Intel
                                                        10th gen)</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/nuc11-cpu-intel-11st-gen">NUC11 (CPU Intel
                                                        11st gen)</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/nuc-extreme-kit-hieu-nang-cao">NUC Extreme
                                                        kit - Hiệu năng cao</a>


                                                    <br>
                                                </div>


                                            </div>
                                            <div class="sub-cat-item pull-right"
                                                style="padding: 0; display: flex; justify-content: flex-end">
                                                <a class="none" href="https://gearvn.com/pages/pc-gvn">
                                                    <img src="//theme.hstatic.net/1000026716/1000440777/14/xxxbannerxxx4.png?v=19892"
                                                        alt="">
                                                </a>

                                            </div>
                                        </div>
                                    </li>






                                    <li class="cat-menu-item ">
                                        <a class="gearvn-cat-menu-item"
                                            href="https://gearvn.com/pages/linh-kien-may-tinh">
                                            <span class="gearvn-cat-menu-icon">
                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx25.png?v=19892">

                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx15.png?v=19892">
                                            </span>
                                            <span class="gearvn-cat-menu-name">Linh kiện PC</span>
                                        </a>
                                        <div class="megamenu absolute-center level0 xlab_grid_container">
                                            <div class="column xlab_column_5_5">


                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/mainboard-bo-mach-chu">Mainboard - Bo mạch
                                                        chủ</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/mainboard-h410-comet-lake-s">Mainboard Intel
                                                        H410</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/mainboard-intel-h510">Mainboard Intel H510
                                                        (New)</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/mainboard-b460-comet-lake-s">Mainboard Intel
                                                        B460</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/mainboard-intel-b560-rocket-lake">Mainboard
                                                        Intel B560 (New)</a>


                                                    <a class="sub-cat-item-filter" href="/collections/z390">Mainboard
                                                        Intel Z390</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/mainboard-z490">Mainboard Intel Z490</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/mainboard-z590">Mainboard Intel Z590
                                                        (New)</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/mainboard-x299x-lga2066">Mainboard Intel
                                                        X299X</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/main-amd-ryzen-a320-socket-am4">Mainboard AMD
                                                        Ryzen A320</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/main-amd-ryzen-b450-socket-am4">Mainboard AMD
                                                        Ryzen B450</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/main-amd-ryzen-b550-socket-am4">Mainboard AMD
                                                        Ryzen B550</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/mainboard-ryzen-x570">Mainboard AMD Ryzen
                                                        X570</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/main-amd-ryzen-trx40-socket-str4">Mainboard
                                                        AMD Ryzen TRX40</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/cpu-bo-vi-xu-ly">CPU
                                                        - Bộ vi xử lí</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/coffeelake-r-gen9-lga1151v2">CPU Intel 9th
                                                        GEN</a>


                                                    <a class="sub-cat-item-filter" href="/collections/cpu-10th-gen">CPU
                                                        Intel 10th GEN</a>


                                                    <a class="sub-cat-item-filter" href="/collections/cpu-11th-gen">CPU
                                                        Intel 11th GEN (New)</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/cpu-intel-core-x">CPU Intel X-Series LGA
                                                        2066</a>


                                                    <a class="sub-cat-item-filter" href="/collections/intel-xeon">CPU
                                                        Intel Xeon</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/cpu-amd-ryzen-gen3-am4">CPU AMD Ryzen Gen 3
                                                        AM4</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/cpu-amd-ryzen-gen5-am4">CPU AMD Ryzen Gen 5
                                                        AM4</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/amd-ryzen-threadripper-gen-3">CPU AMD Ryzen™
                                                        Threadripper Gen3</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/amd-ryzen-threadripper-pro-gen-3">CPU AMD
                                                        Ryzen™ Threadripper PRO Gen3</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/ram-pc">Ram - Bộ nhớ
                                                        trong</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ram-laptop">Ram
                                                        LAPTOP</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ram-ecc-ws">Ram
                                                        ECC</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ram-rgb-ddr4">Ram
                                                        LED RGB - DDR4</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ddr4-8gb">Ram 8GB
                                                        - DDR4</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ddr4-16g">Ram 16GB
                                                        - DDR4</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ram-pc-kingston">Ram Kingston - DDR4</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ram-pc-corsair">Ram Corsair - DDR4</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ram-pc-gskill">Ram
                                                        G.Skill - DDR4</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/vga-card-man-hinh">VGA - Card màn hình</a>


                                                    <a class="sub-cat-item-filter" href="/collections/gt-710-1030">GT
                                                        710 - 1030</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/gtx-1050-1050-ti">GTX 1050 Ti</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/vga-gtx-1650-4g">GTX 1650 4G</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/gtx-1650-super">GTX 1650 SUPER</a>


                                                    <a class="sub-cat-item-filter" href="/collections/1660-6g">GTX 1660
                                                        6G</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/gtx-1660-super">GTX 1660 SUPER</a>


                                                    <a class="sub-cat-item-filter" href="/collections/2060">RTX 2060</a>


                                                    <a class="sub-cat-item-filter" href="/collections/radeon-rx">AMD
                                                        Radeon RX Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/vga-rtx-ampere-3060-12gb">RTX Ampere 3060
                                                        12GB</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/vga-rtx-ampere-3070">RTX Ampere 3070</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/vga-rtx-ampere-3080">RTX Ampere 3080</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/vga-rtx-ampere-3080-ti">RTX Ampere 3080
                                                        Ti</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/vga-rtx-ampere-3090">RTX Ampere 3090</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/ssd-o-cung-the-ran">SSD - Ổ cứng thể rắn</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ssd-sata-3">SSD -
                                                        2.5' SATA 3</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ssd-laptop-m-2-sata">SSD - M.2 SATA3</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ssd-m-2-pcie-gen-3x4">SSD - M.2 PCIe NVMe</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ssd-pcl-express-card">SSD - PCl Express
                                                        Card</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ssd-120g">SSD 120G
                                                        - 128G</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ssd-240g">SSD 240G
                                                        - 256G</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ssd-480-512gb">SSD
                                                        480G - 512G</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ssd-tren-1tb">SSD
                                                        trên 1TB</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/hdd-o-cung-pc">HDD -
                                                        Ổ cứng PC</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/western-digital-1tb">HDD - 1TB</a>


                                                    <a class="sub-cat-item-filter" href="/collections/hdd-2tb">HDD -
                                                        2TB</a>


                                                    <a class="sub-cat-item-filter" href="/collections/hdd-6tb">HDD -
                                                        3-8TB</a>


                                                    <a class="sub-cat-item-filter" href="/collections/hdd-8tb">HDD -
                                                        Trên 8TB</a>


                                                    <a class="sub-cat-item-filter" href="/collections/hdd-wd">HDD -
                                                        WD</a>


                                                    <a class="sub-cat-item-filter" href="/collections/hdd-seagate">HDD -
                                                        Seagate</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/o-cung-di-dong-hdd-box">Ổ cứng di động</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/case-thung-may-tinh">Case - Vỏ Máy Tính</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/vo-case-custom-water-cooling">Vỏ Case
                                                        Custom</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/case-duoi-1-trieu">Case Dưới 1 Triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/case-tu-1-trieu-den-2-trieu">Case Từ 1 đến 2
                                                        triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/case-coolermaster">Case CoolerMaster</a>


                                                    <a class="sub-cat-item-filter" href="/collections/case-corsair">Case
                                                        Corsair</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/case-deepcool-gamerstorm">Case Deepcool</a>


                                                    <a class="sub-cat-item-filter" href="/collections/case-nzxt">Case
                                                        NZXT</a>


                                                    <a class="sub-cat-item-filter" href="/collections/case-itx-sfx">Case
                                                        ITX</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/psu-nguon-may-tinh">PSU - Nguồn Máy Tính</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/psu-duoi-1-trieu">Nguồn Dưới 1 Triệu</a>


                                                    <a class="sub-cat-item-filter" href="/collections/nguon-sfx">Nguồn
                                                        SFX</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/psu-coller-master">Nguồn Cooler Master</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/nguon-corsair">Nguồn Corsair</a>


                                                    <a class="sub-cat-item-filter" href="/collections/400-500w">Nguồn
                                                        300W-520W</a>


                                                    <a class="sub-cat-item-filter" href="/collections/500-600w">Nguồn
                                                        550W-650W</a>


                                                    <a class="sub-cat-item-filter" href="/collections/700w-800w">Nguồn
                                                        700W-850W</a>


                                                    <a class="sub-cat-item-filter" href="/collections/tren-1000w">Nguồn
                                                        Trên 1000W</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/fan-rgb-tan-nhiet-pc">Tản nhiệt - Fan RGB</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/fan-led-trang-tri">Fan RGB</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/day-sleeve-cable">Dây Sleeve</a>


                                                    <a class="sub-cat-item-filter" href="/collections/tan-nhiet-khi">Tản
                                                        nhiệt khí</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tan-nhiet-nuoc-240mm">Tản nhiệt nước AIO
                                                        240mm</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tan-nhiet-nuoc-280mm">Tản nhiệt nước AIO
                                                        280mm</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tan-nhiet-nuoc-360mm">Tản nhiệt nước AIO
                                                        360mm</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/phu-kien-may-tinh">Phụ kiện máy tính</a>


                                                    <br>
                                                </div>


                                            </div>
                                            <div class="sub-cat-item pull-right"
                                                style="padding: 0; display: flex; justify-content: flex-end">
                                                <a class="none" href="https://gearvn.com/pages/linh-kien-may-tinh">
                                                    <img src="//theme.hstatic.net/1000026716/1000440777/14/xxxbannerxxx5.png?v=19892"
                                                        alt="">
                                                </a>

                                            </div>
                                        </div>
                                    </li>






                                    <li class="cat-menu-item ">
                                        <a class="gearvn-cat-menu-item" href="https://gearvn.com/pages/man-hinh">
                                            <span class="gearvn-cat-menu-icon">
                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx26.png?v=19892">

                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx16.png?v=19892">
                                            </span>
                                            <span class="gearvn-cat-menu-name">Màn hình</span>
                                        </a>
                                        <div class="megamenu absolute-center level0 xlab_grid_container">
                                            <div class="column xlab_column_5_5">


                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/man-hinh">Giá
                                                        tiền</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-duoi-5-trieu">Dưới 5 triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-tu-5-den-10-trieu">Từ 5 triệu đến 10
                                                        triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-tu-10-den-20-trieu">Từ 10 triệu đến
                                                        20 triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-tu-20-trieu-den-30-trieu">Từ 20
                                                        triệu đến 30 triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-tren-30-trieu">Trên 30 triệu</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/man-hinh">Hãng sản
                                                        xuất</a>


                                                    <a class="sub-cat-item-filter" href="/collections/monitor-lg">LG</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-acer">Acer</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-viewsonic">ViewSonic</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-asus">Asus</a>


                                                    <a class="sub-cat-item-filter" href="/collections/hkc">HKC</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-dell">Dell</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-aoc">AOC</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-msi">MSI</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-philips">Philips</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-samsung">Samsung</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-cooler-master">Cooler Master</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-gigabyte">Gigabyte</a>


                                                    <a class="sub-cat-item-filter" href="/collections/hp">HP</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-benq">BenQ</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-lenovo">Lenovo</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-conceptd">ConceptD</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/man-hinh">Kích
                                                        thước</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-22-inch">22"</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-24-inch">24"</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-27-inch">27"</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-29">29"</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-32">32"</a>


                                                    <a class="sub-cat-item-filter" href="/collections/man-hinh-32">Trên
                                                        32"</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/man-hinh-144-240hz">Tần số quét</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-60hz">60Hz</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-75hz">75Hz</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-100hz">100Hz</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-144hz">144Hz</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-240hz">240Hz</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/man-hinh-cong">Màn
                                                        hình cong</a>


                                                    <a class="sub-cat-item-filter" href="/collections/24-curve">24"
                                                        Curved</a>


                                                    <a class="sub-cat-item-filter" href="/collections/27-curve">27"
                                                        Curved</a>


                                                    <a class="sub-cat-item-filter" href="/collections/32-curve">32"
                                                        Curved</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tren-32-curve">Trên 32" Curved</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/man-hinh">Độ Phân
                                                        giải</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-may-tinh-hd-720p">HD 720p</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/do-phan-giai-full-hd-1080p">Full HD 1080p</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/do-phan-giai-2k-1440p">2K 1440p</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/man-hinh-may-tinh-4k-uhd">Màn hình máy tính
                                                        4K UHD</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/man-hinh-do-hoa">Màn
                                                        hình đồ họa</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/cap-chuyen-hdmi-vga-lan-usb">Phụ kiện dây
                                                        HDMI,VGA,LAN,DP</a>


                                                    <br>
                                                </div>


                                            </div>
                                            <div class="sub-cat-item pull-right"
                                                style="padding: 0; display: flex; justify-content: flex-end">
                                                <a class="none" href="https://gearvn.com/collections/man-hinh">
                                                    <img src="//theme.hstatic.net/1000026716/1000440777/14/xxxbannerxxx6.png?v=19892"
                                                        alt="">
                                                </a>

                                            </div>
                                        </div>
                                    </li>






                                    <li class="cat-menu-item ">
                                        <a class="gearvn-cat-menu-item"
                                            href="https://gearvn.com/pages/ban-phim-may-tinh">
                                            <span class="gearvn-cat-menu-icon">
                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx27.png?v=19892">

                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx17.png?v=19892">
                                            </span>
                                            <span class="gearvn-cat-menu-name">Bàn phím</span>
                                        </a>
                                        <div class="megamenu absolute-center level0 xlab_grid_container">
                                            <div class="column xlab_column_5_5">


                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/ban-phim-logitech">Thương hiệu Logitech</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/logitech-gia-co">Bàn phím giả cơ</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/logitech-cherry-mx">Bàn phím cơ</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-co-gx-switch">Bàn phím cơ GX
                                                        Switch</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/logitech-romer-g">Bàn phím cơ Romer-G</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/ban-phim-choi-game-razer">Thương hiệu
                                                        Razer</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/razer-blackwidow-series">Blackwidow
                                                        Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/razer-huntsman-series">Huntsman Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-razer-cynosa">Cynosa Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/ban-phim-leopold">Thương hiệu Leopold</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/ban-phim-co-leopold-fc650m-ds-white-blue-star">650M
                                                        Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/leopold-fc660m-series">660M Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/leopold-fc750r-series">750R Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/leopold-fc900r-series">900R Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/leopold-fc980m-series">980M Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/leopold-topre">Topre Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/ban-phim-ikbc">Thương hiệu IKBC</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-cd87-series">CD87 Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-cd108-series">CD108 Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ikbc-w200-series">W200 Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-table-e-series">Table E Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/i8kbc-typemaster-series">Typemaster
                                                        Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/ban-phim-choi-game-corsair">Thương hiệu
                                                        Corsair</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-corsair-k63-series">K63 Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-corsair-k68-series">K68 Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-corsair-k70-series">K70 Series</a>


                                                    <a class="sub-cat-item-filter" href="/collections/k83-series">K83
                                                        Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-corsair-k95-series">K95 Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-corsair-k100-series">K100 Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/ban-phim-co-gaming">Các thương hiệu khác</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-dare-u">Dare-U</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-akko">Akko</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-steelseries">Steelseries</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-fuhlen">Fuhlen</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-ajazz">Ajazz</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-e-dra">E-Dra</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-ducky">Ducky</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-mistel">Mistel</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-asus">Asus</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-hyperx">HyperX</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-rapoo">Rapoo</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-newmen">Newmen</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/cougar-keyboard">Cougar</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-durgod">Durgod</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/ban-phim-co-gaming">Giá tiền</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-duoi-1-trieu">Dưới 1 triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-1-den-2-trieu">1 triệu - 2 triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-2-den-3-trieu">2 triệu - 3 triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-tu-3-den-4-trieu">3 triệu - 4
                                                        triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-tren-4-trieu">Trên 4 triệu</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/ban-phim-co-gaming">Kết nối</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-bluetooth">Bluetooth</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ban-phim-wireless">Wireless</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/ban-phim-akko">Thương hiệu Akko</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/akko-world-tour-tokyo-series">World Tour
                                                        Tokyo Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/midnight-series">Midnight Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/akko-dragonball-z-series">Dragonball Z
                                                        Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/akko-oceanstar-series">Oceanstar Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/akko-silent-series">Silent Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/akko-v2-rgb-series">RGB Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/akko-osa-series">OSA Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/akko-anime-series">Anime Series</a>


                                                    <br>
                                                </div>


                                            </div>
                                            <div class="sub-cat-item pull-right"
                                                style="padding: 0; display: flex; justify-content: flex-end">
                                                <a class="none" href="https://gearvn.com/pages/ban-phim-may-tinh">
                                                    <img src="//theme.hstatic.net/1000026716/1000440777/14/xxxbannerxxx7.png?v=19892"
                                                        alt="">
                                                </a>

                                            </div>
                                        </div>
                                    </li>






                                    <li class="cat-menu-item ">
                                        <a class="gearvn-cat-menu-item" href="https://gearvn.com/pages/chuot-may-tinh">
                                            <span class="gearvn-cat-menu-icon">
                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx28.png?v=19892">

                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx18.png?v=19892">
                                            </span>
                                            <span class="gearvn-cat-menu-name">Chuột + Lót chuột</span>
                                        </a>
                                        <div class="megamenu absolute-center level0 xlab_grid_container">
                                            <div class="column xlab_column_5_5">


                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/gaming-mouse">Chuột
                                                        theo hãng</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-logitech">Logitech</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-razer">Razer</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-zowie">Zowie</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-steelseries">Steelseries</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-corsair">Corsair</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-dare-u">Dare-U</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-fuhlen">Fuhlen</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-akko">Akko</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-asus">Asus</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-ajazz">Ajazz</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-hyperx">HyperX</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-cooler-master">Cooler Master</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-rapoo">Rapoo</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-cougar">Cougar</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/durgod-mouse">Durgod</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/gaming-mouse">Chuột
                                                        theo giá tiền</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-duoi-500-nghin">Dưới 500 nghìn</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-500-nghin-den-1-trieu">Từ 500 nghìn - 1
                                                        triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-1-den-2-trieu">Từ 1 triệu - 2 triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-2-den-3-trieu">Trên 2 triệu - 3
                                                        triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-tren-3-trieu">Trên 3 triệu</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/gaming-mouse">Kết
                                                        nối</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-bluetooth">Bluetooth</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-wireless">Wireless</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/gaming-mouse">Nhu
                                                        cầu</a>


                                                    <a class="sub-cat-item-filter" href="/collections/chuot-fps">Game
                                                        FPS</a>


                                                    <a class="sub-cat-item-filter" href="/collections/chuot-moba">Game
                                                        Moba</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/chuot-van-phong">Văn phòng</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/mouse-pad">Lót chuột
                                                        theo hãng</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-steelseries">Steelseries</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-razer">Razer</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-corsair">Corsair</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-akko">Akko</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-cougar">Cougar</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-dare-u">Dare-U</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-logitech">Logitech</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-asus">Asus</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-rapoo">Rapoo</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/mouse-pad">Các loại
                                                        lót chuột</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-mem">Mềm</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-cung">Cứng</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-day">Dày</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-mong">Mỏng</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-co-led">Viền có led</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/mouse-pad">Lót chuột
                                                        theo size</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-kich-thuoc-nho">Nhỏ</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-kich-thuoc-vua">Vừa</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/lot-chuot-kich-thuoc-lon">Lớn</a>


                                                    <br>
                                                </div>


                                            </div>
                                            <div class="sub-cat-item pull-right"
                                                style="padding: 0; display: flex; justify-content: flex-end">
                                                <a class="none" href="https://gearvn.com/pages/chuot-may-tinh">
                                                    <img src="//theme.hstatic.net/1000026716/1000440777/14/xxxbannerxxx8.png?v=19892"
                                                        alt="">
                                                </a>

                                            </div>
                                        </div>
                                    </li>






                                    <li class="cat-menu-item ">
                                        <a class="gearvn-cat-menu-item"
                                            href="https://gearvn.com/pages/tai-nghe-may-tinh">
                                            <span class="gearvn-cat-menu-icon">
                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx29.png?v=19892">

                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx19.png?v=19892">
                                            </span>
                                            <span class="gearvn-cat-menu-name">Tai nghe Gaming</span>
                                        </a>
                                        <div class="megamenu absolute-center level0 xlab_grid_container">
                                            <div class="column xlab_column_5_5">


                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/collections/gaming-headphones">Hãng sản
                                                        xuất</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-hyperx">HyperX</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-logitech">Logitech</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-razer">Razer</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-steelseries">Steelseries</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-corsair">Corsair</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-dare-u">Dare-U</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-asus">Asus</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-rapoo">Rapoo</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-cougar">Cougar</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-cooler-master">Cooler Master</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-astro">Astro</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-gaming-zidli">Zidli</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-mpow">MPOW</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/tai-nghe-may-tinh">Giá tiền</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-duoi-1-trieu">Tai nghe dưới 1
                                                        triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-1-trieu-den-2-trieu">Tai nghe 1
                                                        triệu đến 2 triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-2-den-3-trieu">Tai nghe 2 đến 3
                                                        triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-3-den-4-trieu">Tai nghe 3 đến 4
                                                        triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-tren-4-trieu">Tai nghe trên 4
                                                        triệu</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/tai-nghe-may-tinh">Kết nối</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-wireless">Tai nghe Wireless</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-gaming-bluetooth">Tai nghe gaming
                                                        Bluetooth</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/tai-nghe-may-tinh">Kiểu tai
                                                        nghe</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-over-ear">Tai nghe Over-ear</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-gaming-in-ear">Tai nghe Gaming
                                                        In-ear</a>


                                                    <br>
                                                </div>


                                            </div>
                                            <div class="sub-cat-item pull-right"
                                                style="padding: 0; display: flex; justify-content: flex-end">
                                                <a class="none" href="https://gearvn.com/pages/tai-nghe-may-tinh">
                                                    <img src="//theme.hstatic.net/1000026716/1000440777/14/xxxbannerxxx9.png?v=19892"
                                                        alt="">
                                                </a>

                                            </div>
                                        </div>
                                    </li>






                                    <li class="cat-menu-item ">
                                        <a class="gearvn-cat-menu-item"
                                            href="https://gearvn.com/pages/ghe-gaming-gia-re-gearvn">
                                            <span class="gearvn-cat-menu-icon">
                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx210.png?v=19892">

                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx110.png?v=19892">
                                            </span>
                                            <span class="gearvn-cat-menu-name">Ghế Gaming</span>
                                        </a>
                                        <div class="megamenu absolute-center level0 xlab_grid_container">
                                            <div class="column xlab_column_5_5">


                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/cougar-chair">Cougar</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ghe-cougar-armor-k-series">Armor K Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/cougar-armors-series">Armor S Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/ghe-cougar-armor-pro">Armor Pro Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ghe-cougar-armor-titan">Armor Titan
                                                        Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/anda-seat">AndaSeat</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/andaseat-assassin-king">Assassin King
                                                        Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/andaseat-spirit-king">Spirit King Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/andaseat-infinity-king">Infinity King
                                                        Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/akracing">AKRacing</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ghe-akracing-core-series">Core Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/akracing-premium-series">Premium Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/akraing-onyx-series">Onyx Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/akracing-special-series">Special Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/ghe-dxracer">DXRacer</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/formula-series">Formula Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/dxracer-racing-series">Racing Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/dxracer-valkyrie-series">Valkyrie Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/dxracer-king-series">King Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/dxracer-classic-series">Classic Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/dxracer-iron-series">Iron Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/drifting-series">Drifting Series</a>


                                                    <a class="sub-cat-item-filter" href="/collections/tank-series">Tank
                                                        Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/noble-chair">Noble
                                                        Chair</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/noble-chair-epic-series">Epic Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/noble-chair-icon-series">Icon Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/noble-chair-hero-series">Hero Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ghe-noble-chair-da-that">Ghế Noble Chair da
                                                        thật</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/razer-iskur">Razer</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/ghe-corsair-t3-rush-series">Corsair</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/ghe-gaming-asus">ASUS</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/ghe-cooler-master">Cooler Master</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/cooler-master-r1s-series">R1S Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/ghe-cooler-master-calibre-ergo-l">Ergo
                                                        Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/ghe-warrior">Warrior</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/warrior-raider-series">Raider Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/ghe-e-dra">E-DRA</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ghe-choi-game-e-dra-ares-egc207-series">Ares
                                                        Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ghe-choi-game-e-dra-hercules-series">Hercules
                                                        Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/ghe-choi-game-e-dra-hunter-egc206-black">Hunter
                                                        Series</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/e-dra-medusa-series">Medusa Series</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/ghe-gaming-gia-re-gearvn">Lựa
                                                        chọn theo chiều cao</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ghe-cho-nguoi-cao-1m7-nang-duoi-80kg">Dưới
                                                        1m70</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ghe-cho-nguoi-cao-tren-1m7-nang-tren-80kg">Trên
                                                        1m70</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/ghe-gaming-gia-re-gearvn">Lựa
                                                        chọn theo cân nặng</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ghe-cho-nguoi-cao-1m7-nang-duoi-80kg">Dưới 80
                                                        KG</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ghe-cho-nguoi-cao-tren-1m7-nang-tren-80kg">Trên
                                                        80 KG</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/ghe-gaming-gia-re-gearvn">Chất
                                                        liệu</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ghe-da-pu">PU
                                                        Leather</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ghe-da-pvc">PVC
                                                        Leather</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ghe-da-that">Real
                                                        Leather</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/ghe-gaming-gia-re-gearvn">Giá
                                                        tiền</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ghe-5-den-7-trieu">Từ 5 - 7 triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ghe-7-den-10-trieu">Từ 7 - 10 triệu</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ghe-tren-10-trieu">Trên 10 triệu</a>


                                                    <br>
                                                </div>


                                            </div>
                                            <div class="sub-cat-item pull-right"
                                                style="padding: 0; display: flex; justify-content: flex-end">
                                                <a class="none"
                                                    href="https://gearvn.com/pages/ghe-gaming-gia-re-gearvn">
                                                    <img src="//theme.hstatic.net/1000026716/1000440777/14/xxxbannerxxx10.png?v=19892"
                                                        alt="">
                                                </a>

                                            </div>
                                        </div>
                                    </li>






                                    <li class="cat-menu-item ">
                                        <a class="gearvn-cat-menu-item" href="/collections/may-choi-game">
                                            <span class="gearvn-cat-menu-icon">
                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx211.png?v=19892">

                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx111.png?v=19892">
                                            </span>
                                            <span class="gearvn-cat-menu-name">Console</span>
                                        </a>
                                        <div class="megamenu absolute-center level0 xlab_grid_container">
                                            <div class="column xlab_column_5_5">


                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/may-choi-game">Hệ
                                                        Máy Console</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/sony-playstation">Sony Playstation</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tay-cam-x-box">Microsoft Xbox</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/sony-playstation">Sony Playstation</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/sony-playstation-classic">Playstation
                                                        Classic</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/sony-playstation">Playstation 4 (PS4)</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tay-cam-sony-playsation">Tay Cầm
                                                        Playstation</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/dia-game-playstation">Đĩa Game
                                                        Playstation</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/">Microsoft Xbox</a>


                                                    <a class="sub-cat-item-filter" href="/collections/tay-cam-x-box">Tay
                                                        Cầm Xbox</a>


                                                    <br>
                                                </div>


                                            </div>
                                            <div class="sub-cat-item pull-right"
                                                style="padding: 0; display: flex; justify-content: flex-end">
                                                <a class="none" href="https://gearvn.com/collections/may-choi-game">
                                                    <img src="//theme.hstatic.net/1000026716/1000440777/14/xxxbannerxxx11.png?v=19892"
                                                        alt="">
                                                </a>

                                            </div>
                                        </div>
                                    </li>






                                    <li class="cat-menu-item ">
                                        <a class="gearvn-cat-menu-item"
                                            href="https://gearvn.com/pages/audio-chinh-hang-gia-tot-gearvn">
                                            <span class="gearvn-cat-menu-icon">
                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx212.png?v=19892">

                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx112.png?v=19892">
                                            </span>
                                            <span class="gearvn-cat-menu-name">Thiết bị Audio</span>
                                        </a>
                                        <div class="megamenu absolute-center level0 xlab_grid_container">
                                            <div class="column xlab_column_5_5">


                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/thuong-hieu">THƯƠNG
                                                        HIỆU</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-loa-jbl-chinh-hang">JBL</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/loa-harman-kardon-chinh-hang">HARMAN/KARDON</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/loa-creative-chinh-hang">CREATIVE</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-akg-chinh-hang">AKG</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/sony-audio-gearvn">SONY</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/loa-logitech">LOGITECH</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-audio-technica-chinh-hang">AUDIO-TECHNICA</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-jabra-chinh-hang">JABRA</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-sennheiser-chinh-hang">SENNHEISER</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-plantronics-chinh-hang">PLANTRONICS</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/loa-thonet-vander-chinh-hang">THONET &amp;
                                                        VANDER</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/loa-ultimate-ears">ULTIMATE EARS</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/tai-nghe-audio-chinh-hang-tai-gearvn">TAI
                                                        NGHE AUDIO</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-true-wireless-chinh-hang">TAI NGHE
                                                        TRUE WIRELESS</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-in-ear-chinh-hang">TAI NGHE NHÉT
                                                        TAI</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-over-ear-chinh-hang">TAI NGHE CHỤP
                                                        TAI</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-bluetooth-chinh-hang">TAI NGHE
                                                        BLUETOOTH</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-co-day-chinh-hang">TAI NGHE CÓ
                                                        DÂY</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-chinh-hang-gia-re-duoi-1-trieu">TAI
                                                        NGHE AUDIO DƯỚI 1 TRIỆU</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-chinh-hang-tu-1-den-2-trieu">TAI
                                                        NGHE AUDIO TỪ 1 TRIỆU ĐẾN 2 TRIỆU</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-chinh-hang-tu-2-den-3-trieu">TAI
                                                        NGHE AUDIO TỪ 2 TRIỆU ĐẾN 3 TRIỆU</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghechinh-hang-tu-3-den-5-trieu">TAI NGHE
                                                        AUDIO TỪ 3 TRIỆU ĐẾN 5 TRIỆU</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tai-nghe-chinh-hang-tren-5-trieu">TAI NGHE
                                                        AUDIO TRÊN 5 TRIỆU</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/loa-audio-chinh-hang-tai-gearvn">LOA
                                                        AUDIO</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/loa-di-dong-bluetooth-chinh-hang">LOA DI
                                                        ĐỘNG</a>


                                                    <a class="sub-cat-item-filter" href="/collections/loa-de-ban">LOA ĐỂ
                                                        BÀN</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/loa-gia-re-duoi-1-trieu">LOA DƯỚI 1 TRIỆU</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/loa-chinh-hang-tu-1-den-3-trieu">LOA TỪ 1
                                                        TRIỆU ĐẾN 3 TRIỆU</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/loa-chinh-hang-tu-3-den-5-trieu">LOA TỪ 3
                                                        TRIỆU ĐẾN 5 TRIỆU</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/loa-cao-cap-tu-5-trieu-den-10-trieu">LOA TỪ 5
                                                        TRIỆU ĐẾN 10 TRIỆU</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/loa-cao-cap-tren-10-trieu">LOA TRÊN 10
                                                        TRIỆU</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/phu-kien-am-thanh">SOUNDCARD - PHỤ KIỆN</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/dac-soundcard">SOUNDCARD</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/micro-thu-am-chinh-hang">MICRO</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/phu-kien-am-thanh">PHỤ KIỆN</a>


                                                    <br>
                                                </div>


                                            </div>
                                            <div class="sub-cat-item pull-right"
                                                style="padding: 0; display: flex; justify-content: flex-end">
                                                <a class="none" href="https://gearvn.com/collections/loa-ultimate-ears">
                                                    <img src="//theme.hstatic.net/1000026716/1000440777/14/xxxbannerxxx12.png?v=19892"
                                                        alt="">
                                                </a>

                                            </div>
                                        </div>
                                    </li>






                                    <li class="cat-menu-item ">
                                        <a class="gearvn-cat-menu-item" href="/collections/thiet-bi-van-phong">
                                            <span class="gearvn-cat-menu-icon">
                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx213.png?v=19892">

                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx113.png?v=19892">
                                            </span>
                                            <span class="gearvn-cat-menu-name">Thiết bị văn phòng</span>
                                        </a>
                                        <div class="megamenu absolute-center level0 xlab_grid_container">
                                            <div class="column xlab_column_5_5">


                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/phan-mem">Phần mềm
                                                        bán chạy</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/window">Microsoft
                                                        Windows</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/windows-10-home">Windows 10 Home</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/windows-10-pro">Windows 10 Pro</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/windows-server-2016">Windows Server 2016</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/office">Microsoft
                                                        Office</a>


                                                    <a class="sub-cat-item-filter" href="/collections/office-365">Office
                                                        365</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/office-2019">Office 2019</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/microsoft-project">Microsoft Project</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/project-2016">Project 2016</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/project-2019">Project 2019</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/microsoft-visio">Microsoft Visio</a>


                                                    <a class="sub-cat-item-filter" href="/collections/visio-2016">Visio
                                                        2016</a>


                                                    <a class="sub-cat-item-filter" href="/collections/visio-2019">Visio
                                                        2019</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/may-in-van-phong">Thương hiệu máy in</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/may-in-brother">Brother</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/may-in-da-nang">Máy
                                                        in đa năng</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/may-in-laser">Máy in
                                                        laser</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/may-in-phun">Máy in
                                                        phun</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/muc-in">Mực in</a>


                                                    <a class="sub-cat-item-filter" href="/collections/muc-in-laser">Mực
                                                        in laser</a>


                                                    <a class="sub-cat-item-filter" href="/collections/muc-in-phun">Mực
                                                        in phun</a>


                                                    <br>
                                                </div>


                                            </div>
                                            <div class="sub-cat-item pull-right"
                                                style="padding: 0; display: flex; justify-content: flex-end">
                                                <a class="none" href="https://gearvn.com/collections/phan-mem">
                                                    <img src="//theme.hstatic.net/1000026716/1000440777/14/xxxbannerxxx13.png?v=19892"
                                                        alt="">
                                                </a>

                                            </div>
                                        </div>
                                    </li>






                                    <li class="cat-menu-item ">
                                        <a class="gearvn-cat-menu-item" href="https://gearvn.com/pages/thiet-bi-mang">
                                            <span class="gearvn-cat-menu-icon">
                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx214.png?v=19892">

                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx114.png?v=19892">
                                            </span>
                                            <span class="gearvn-cat-menu-name">Thiết bị mạng</span>
                                        </a>
                                        <div class="megamenu absolute-center level0 xlab_grid_container">
                                            <div class="column xlab_column_5_5">


                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/thiet-bi-mang">Hãng
                                                        sản xuất</a>


                                                    <a class="sub-cat-item-filter" href="/collections/asus">Asus</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/linksys">LinkSys</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tp-link">TP-LINK</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/card-mang-intel">Intel</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/thiet-bi-phat-wifi">Router Wi-Fi</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/router-gaming">Gaming</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/router-pho-thong">Phổ thông</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/router-xuyen-tuong">Xuyên tường</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/router-mesh-pack">Router Mesh Pack</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/router-ax-wifi-6">Router WiFi 6</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/usb-card-mang">USB
                                                        Thu sóng - Card mạng</a>


                                                    <a class="sub-cat-item-filter" href="/collections/usb-wifi">Usb
                                                        WiFi</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/card-mang-wifi">Card WiFi</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/card-mang-ethernet">Card Ethernet</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/o-cung-mang-nas">NAS
                                                        - Lưu trữ mạng</a>


                                                    <a class="sub-cat-item-filter" href="/collections/o-cung-mang-nas">Ổ
                                                        cứng mạng - NAS</a>


                                                    <br>
                                                </div>


                                            </div>
                                            <div class="sub-cat-item pull-right"
                                                style="padding: 0; display: flex; justify-content: flex-end">
                                                <a class="none" href="https://gearvn.com/collections/thiet-bi-mang">
                                                    <img src="//theme.hstatic.net/1000026716/1000440777/14/xxxbannerxxx14.png?v=19892"
                                                        alt="">
                                                </a>

                                            </div>
                                        </div>
                                    </li>






                                    <li class="cat-menu-item ">
                                        <a class="gearvn-cat-menu-item" href="/collections/phu-kien">
                                            <span class="gearvn-cat-menu-icon">
                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx215.png?v=19892">

                                                <img
                                                    src="//theme.hstatic.net/1000026716/1000440777/14/xxx115.png?v=19892">
                                            </span>
                                            <span class="gearvn-cat-menu-name">Phụ kiện</span>
                                        </a>
                                        <div class="megamenu absolute-center level0 xlab_grid_container">
                                            <div class="column xlab_column_5_5">


                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/phu-kien-streaming">Thiết bị Streaming</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/phu-kien-streaming-elgato">Elgato</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/phu-kien-streaming-razer">Razer</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/capture-card-avermedia">AverMedia</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/microphone">Microphone</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/microphone-razer">Razer</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/micro-hyperx">HyperX</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/microphone-elgato">Elgato</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/webcam">Webcam</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/webcam-720p">720p</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/webcam-1080p">1080p</a>


                                                    <a class="sub-cat-item-filter" href="/collections/webcam-4k">4K</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/webcam-conference">Conference</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/balo-cap-tui-game-thu">Balo &amp; Túi
                                                        xách</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/balo-razer">Razer</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/balo-gearvn">GEARVN</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/balo-tui-chong-soc">Túi chống sốc</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/balo-asus">Asus</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/de-tan-nhiet-laptop">Đế tản nhiệt Laptop</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/de-tan-nhiet-laptop">Cooler Master</a>


                                                    <a class="sub-cat-item-filter" href="/collections/rain-design">Rain
                                                        Design</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/hyper-usa-chinh-hang">Hyperdrive</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/bungee-gia-giu-chuot">Bungee - Giá đỡ
                                                        chuột</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/gia-do-chuot-razer">Razer</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/bungee-zowie">Zowie</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/gia-do-chuot-cougar">Cougar</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/keycaps">Phụ kiện
                                                        bàn phím cơ</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/keycaps">Keycaps</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/keypuller">Keypuller</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ke-tay">Kê tay</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/gia-treo-tai-nghe">Giá treo tai nghe</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/gia-treo-tai-nghe-razer">Razer</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/gia-treo-tai-nghe-cougar">Cougar</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/products/corsair-st100-rgb-headstand">Corsair</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/phu-kien-gvn">GVN</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/phu-kien-hyperx">Phụ
                                                        kiện HyperX</a>


                                                    <a class="sub-cat-item-filter" href="/collections/dem-tai-nghe">Đệm
                                                        tai nghe</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/micro-hyperx">Microphone</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/hop-am-thanh-hyperx">Hộp âm thanh</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/day-cap-hyperx">Dây cáp</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/tui-hop-dung-hyperx">Túi/hộp đựng</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/sac-tay-cam-hyperx">Sạc tay cầm</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/keycaps-hyperx">Keycaps</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name" href="/collections/tay-cam-vo-lang">Tay
                                                        cầm, vô lăng</a>


                                                    <a class="sub-cat-item-filter" href="/collections/tay-cam-ps4">Tay
                                                        cầm PS4</a>


                                                    <a class="sub-cat-item-filter" href="/collections/tay-cam-x-box">Tay
                                                        cầm X-Box</a>


                                                    <a class="sub-cat-item-filter" href="/collections/tay-cam-rapoo">Tay
                                                        cầm Rapoo</a>


                                                    <a class="sub-cat-item-filter" href="/collections/vo-lang">Vô
                                                        lăng</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/cong-chuyen-usb-gia-do">Cổng chuyển USB, Giá
                                                        đỡ</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/hyper-usa-chinh-hang">Hyperdrive</a>


                                                    <a class="sub-cat-item-filter" href="/collections/rain-design">Rain
                                                        Design</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/cap-chuyen-hdmi-vga-lan-usb">Cáp HDMI, DP,
                                                        MiniDP, USB-C,..</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ugreen-hdmi">Cáp
                                                        HDMI</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ugreen-mini-hdmi">Cáp Mini HDMI</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ugreen-micro-hdmi">Cáp Micro HDMI</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ugreen-dp">Cáp
                                                        DP</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ugreen-mini-dp">Cáp Mini DP</a>


                                                    <a class="sub-cat-item-filter" href="/collections/ugreen-usb-c">Cáp
                                                        USB-C</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/ugreen-hdd-box">HDD Box</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/phu-kien-am-thanh">Soundcard</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/hop-am-thanh-hyperx">HyperX</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/soundcard-creative">Creative</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/soundcard-sennheiser">Sennheiser</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="/collections/phu-kien-dien-thoai">Phụ kiện điện thoại</a>


                                                    <a class="sub-cat-item-filter" href="/collections/sac-du-phong">Sạc
                                                        dự phòng</a>


                                                    <a class="sub-cat-item-filter" href="/collections/cap-typec">Cáp
                                                        Type C</a>


                                                    <a class="sub-cat-item-filter" href="/collections/cap-lightning">Cáp
                                                        Lightning - IOS</a>


                                                    <a class="sub-cat-item-filter" href="/collections/o-cam-dien">Ổ cắm
                                                        điện</a>


                                                    <br>
                                                </div>



                                                <div class="sub-cat-item">
                                                    <a class="sub-cat-item-name"
                                                        href="https://gearvn.com/pages/garmin-official-store">Đồng hồ
                                                        thông minh</a>


                                                    <a class="sub-cat-item-filter"
                                                        href="/collections/dong-ho-garmin">Garmin</a>


                                                    <br>
                                                </div>


                                            </div>
                                            <div class="sub-cat-item pull-right"
                                                style="padding: 0; display: flex; justify-content: flex-end">
                                                <a class="none" href="https://gearvn.com/pages/uu-dai-gear">
                                                    <img src="//theme.hstatic.net/1000026716/1000440777/14/xxxbannerxxx15.png?v=19892"
                                                        alt="">
                                                </a>

                                            </div>
                                        </div>
                                    </li>


                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!--MENU LEFT-->
                </div>

                <div class="gearvn-header-navigation-right content-flex">
                    <a href="https://gearvn.com/pages/gearvn-dai-tiec-online"
                        class="gearvn-header-navigation-item recently-product-item header-navigation-recently-products "
                        style="margin-left: 0">
                        <div class="xxxkt">
                            <img src="//theme.hstatic.net/1000026716/1000440777/14/xk1.png?v=19892">
                            <img src="//theme.hstatic.net/1000026716/1000440777/14/xk1s.png?v=19892">
                        </div>


                        TỔNG HỢP KHUYẾN MÃI
                    </a>
                    <a href="https://gearvn.com/pages/huong-dan-thanh-toan-gearvn"
                        class="gearvn-header-navigation-item recently-product-item header-navigation-recently-products ">
                        <div class="xxxkt">

                            <img src="//theme.hstatic.net/1000026716/1000440777/14/xk2.png?v=19892">
                            <img src="//theme.hstatic.net/1000026716/1000440777/14/xk2s.png?v=19892">
                        </div>

                        HƯỚNG DẪN THANH TOÁN
                    </a>
                    <a href="https://gearvn.com/pages/huong-dan-tra-gop"
                        class="gearvn-header-navigation-item recently-product-item header-navigation-recently-products ">
                        <div class="xxxkt">

                            <img src="//theme.hstatic.net/1000026716/1000440777/14/xk3.png?v=19892">
                            <img src="//theme.hstatic.net/1000026716/1000440777/14/xk3s.png?v=19892">
                        </div>
                        HƯỚNG DẪN TRẢ GÓP
                    </a>
                    <a href="https://gearvn.com/pages/chinh-sach-bao-hanh"
                        class="gearvn-header-navigation-item recently-product-item header-navigation-recently-products ">
                        <div class="xxxkt">

                            <img src="//theme.hstatic.net/1000026716/1000440777/14/xk4.png?v=19892">
                            <img src="//theme.hstatic.net/1000026716/1000440777/14/xk4s.png?v=19892">
                        </div>
                        CHÍNH SÁCH BẢO HÀNH
                    </a>
                    <a href="https://gearvn.com/pages/chinh-sach-giao-hang"
                        class="gearvn-header-navigation-item recently-product-item header-navigation-recently-products ">
                        <div class="xxxkt">

                            <img src="//theme.hstatic.net/1000026716/1000440777/14/xk5.png?v=19892">
                            <img src="//theme.hstatic.net/1000026716/1000440777/14/xk5s.png?v=19892">
                        </div>
                        CHÍNH SÁCH VẬN CHUYỂN
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    jQuery('.ultimate-search').submit(function(e) {

        e.preventDefault();

        var q = jQuery(this).find('input[name=q]').val();

        if (!q) {
            window.location = '/search?type=product&q=**';
            return;
        } else {
            /*var str = '(title:product**'+q+')||(tag:product**'+q+')||(variant:product**'+q+')||(body:product**'+q+')||(sku:product**'+q+')';*/
            var str = '(title:product adjacent ' + q + ')';
            str = encodeURIComponent('(' + str + ')');
            window.location = '/search?type=product&q=filter=' + str;
            return;
        }
    });

    function selectSuggest(act) {

        cur = jQuery('.smart-search-wrapper > .select').index();

        length = jQuery('.smart-search-wrapper > a').length;

        if (act == 38) {
            if (cur == -1 || cur == 0)
                cur = length - 1;
            else
                cur = cur - 1;
        }
        if (act == 40) {

            if (cur == -1 || cur == length - 1)

                cur = 0;

            else

                cur = cur + 1;
        }

        jQuery('.smart-search-wrapper>a').removeClass('select');

        jQuery('.smart-search-wrapper>a:nth-child(' + (cur + 1) + ')').addClass(
            'select');


        jQuery('.ultimate-search input[name=q]').val(jQuery(
            '.smart-search-wrapper>.select').attr('data-title'));
        return false;
    }


    (function(jQuery) {
        jQuery.fn.smartSearch = function(_option) {


            var o, issending = false,

                timeout = null;

            var option = {
                smartoffset: true, //auto calc offset

                searchoperator: '**', //** contain, *= begin with, =* end with

                searchfield: "title",

                searchwhen: 'keyup', //0: after keydown, 1: after keypress, after space

                searchdelay: 500, //delay time before load data

            };

            if (typeof(_option) !== 'undefined') {

                jQuery.each(_option, function(i, v) {

                    if (typeof(_option[i]) !== 'undefined') option[i] =
                        _option[i];

                })
            }

            o = jQuery(this);

            o.attr('autocomplete', 'off');

            this.bind(option.searchwhen, function(event) {

                if (event.keyCode == 38 || event.keyCode == 40) {

                    return selectSuggest(event.keyCode);

                } else {

                    jQuery(".smart-search-wrapper." + option.wrapper)
                        .remove();

                    clearTimeout(timeout);

                    timeout = setTimeout(l, option.searchdelay, jQuery(
                        this).val());

                }

            });

            var l = function(t) {

                if (issending) return this;

                issending = true;

                coll = ''

                if (option.collection != null)

                    coll = jQuery(option.collection).val() + "&&";

                jQuery.ajax({

                    url: "/search?q=filter=(" + coll + "(" + option
                        .searchfield + ":product" + option
                        .searchoperator + t +
                        "))&view=ultimate-search",

                    dataType: "JSON",

                    async: false,

                    success: function(data) {

                        if (jQuery('.smart-search-wrapper.' +
                                option.wrapper).length == 0) {

                            jQuery('body').append(
                                "<div class='smart-search-wrapper " +
                                option.wrapper + "'></div>");

                        }

                        p();

                        jQuery.each(data, function(i, v) {

                            jQuery(".smart-search-wrapper." +
                                    option.wrapper)
                                .append(
                                    "<a data-title='" +
                                    v.title +
                                    "'class='thumbs' href='" +
                                    v.url +
                                    "'> <img src='" +
                                    Haravan.resizeImage(
                                        v
                                        .featured_image,
                                        'small') +
                                    "'/></a><a data-title='" +
                                    v.title +
                                    "' href='" + v.url +
                                    "'>" + v.title +
                                    "<span class='price-search'>" +
                                    Haravan.formatMoney(
                                        v.price, '') +
                                    "đ</span></a>");

                        });

                        issending = false;

                    },

                    error: function(xhr, ajaxOptions, thrownError) {

                        //alert(xhr.status);

                        //alert(thrownError);

                    }

                });

            }

            jQuery(window).resize(function() {

                p();

            });

            jQuery(window).scroll(function() {

                p();

            });

            jQuery(this).blur(function() {

                //	jQuery('.smart-search-wrapper.' + option.wrapper).slideUp();

            });

            var p = function() {

                if (!o.offset()) {

                    return;

                }


                jQuery(".smart-search-wrapper." + option.wrapper).css(
                    "width", o.outerWidth() + "px");

                jQuery(".smart-search-wrapper." + option.wrapper).css(
                    "left", o.offset().left + "px");

                if (option.smartoffset) {


                    h = jQuery(".smart-search-wrapper." + option.wrapper)
                        .height();

                    if (h + o.offset().top - jQuery(window).scrollTop() + o
                        .outerHeight() > jQuery(window).height()) {

                        jQuery(".smart-search-wrapper." + option.wrapper)
                            .css('top', '');


                        jQuery(".smart-search-wrapper." + option.wrapper)
                            .css('bottom', (jQuery(window).scrollTop() +
                                jQuery(window).height() - o.offset().top
                            ) + "px");

                    } else {

                        jQuery(".smart-search-wrapper." + option.wrapper)
                            .css('bottom', '');

                        jQuery(".smart-search-wrapper." + option.wrapper)
                            .css('top', (o.offset().top - jQuery(window)
                                .scrollTop() + o.outerHeight()) + "px");

                    }

                } else {

                    jQuery(".smart-search-wrapper." + option.wrapper).css(
                        'top', (o.offset().top - jQuery(window)
                            .scrollTop() + o.outerHeight()) + "px");

                }

            }

            return this;

        };
    }(jQuery));



    jQuery('.ultimate-search input[name=q]').smartSearch({
        searchdelay: 400,
        wrapper: 'search-wrapper',
        collection: '.collection_id'
    });

</script>
<script>
    (function(jQuery) {

        jQuery.fn.menuAim = function(opts) {
            // Initialize menu-aim for all elements in jQuery collection
            this.each(function() {
                init.call(this, opts);
            });

            return this;
        };

        function init(opts) {
            var jQuerymenu = jQuery(this),
                activeRow = null,
                mouseLocs = [],
                lastDelayLoc = null,
                timeoutId = null,
                options = jQuery.extend({
                    rowSelector: "> li",
                    submenuSelector: "*",
                    submenuDirection: "right",
                    tolerance: 75, // bigger = more forgivey when entering submenu
                    enter: jQuery.noop,
                    exit: jQuery.noop,
                    activate: jQuery.noop,
                    deactivate: jQuery.noop,
                    exitMenu: jQuery.noop
                }, opts);

            var MOUSE_LOCS_TRACKED = 3, // number of past mouse locations to track
                DELAY = 300; // ms delay when user appears to be entering submenu

            /**
             * Keep track of the last few locations of the mouse.
             */
            var mousemoveDocument = function(e) {
                mouseLocs.push({
                    x: e.pageX,
                    y: e.pageY
                });

                if (mouseLocs.length > MOUSE_LOCS_TRACKED) {
                    mouseLocs.shift();
                }
            };
            /**
             * Cancel possible row activations when leaving the menu entirely
             */
            var mouseleaveMenu = function() {
                if (timeoutId) {
                    clearTimeout(timeoutId);
                }

                // If exitMenu is supplied and returns true, deactivate the
                // currently active row on menu exit.
                if (options.exitMenu(this)) {
                    if (activeRow) {
                        options.deactivate(activeRow);
                    }

                    activeRow = null;
                }
            };

            /**
             * Trigger a possible row activation whenever entering a new row.
             */
            var mouseenterRow = function() {
                    if (timeoutId) {
                        // Cancel any previous activation delays
                        clearTimeout(timeoutId);
                    }

                    options.enter(this);
                    possiblyActivate(this);
                },
                mouseleaveRow = function() {
                    options.exit(this);
                };

            /*
             * Immediately activate a row if the user clicks on it.
             */
            var clickRow = function() {
                activate(this);
            };

            /**
             * Activate a menu row.
             */
            var activate = function(row) {
                if (row == activeRow) {
                    return;
                }

                if (activeRow) {
                    options.deactivate(activeRow);
                }

                options.activate(row);
                activeRow = row;
            };

            /**
             * Possibly activate a menu row. If mouse movement indicates that we
             * shouldn't activate yet because user may be trying to enter
             * a submenu's content, then delay and check again later.
             */
            var possiblyActivate = function(row) {
                var delay = activationDelay();

                if (delay) {
                    timeoutId = setTimeout(function() {
                        possiblyActivate(row);
                    }, delay);
                } else {
                    activate(row);
                }
            };

            /**
             * Return the amount of time that should be used as a delay before the
             * currently hovered row is activated.
             *
             * Returns 0 if the activation should happen immediately. Otherwise,
             * returns the number of milliseconds that should be delayed before
             * checking again to see if the row should be activated.
             */
            var activationDelay = function() {
                if (!activeRow || !jQuery(activeRow).is(options.submenuSelector)) {
                    // If there is no other submenu row already active, then
                    // go ahead and activate immediately.
                    return 0;
                }

                var offset = jQuerymenu.offset(),
                    upperLeft = {
                        x: offset.left,
                        y: offset.top - options.tolerance
                    },
                    upperRight = {
                        x: offset.left + jQuerymenu.outerWidth(),
                        y: upperLeft.y
                    },
                    lowerLeft = {
                        x: offset.left,
                        y: offset.top + jQuerymenu.outerHeight() + options.tolerance
                    },
                    lowerRight = {
                        x: offset.left + jQuerymenu.outerWidth(),
                        y: lowerLeft.y
                    },
                    loc = mouseLocs[mouseLocs.length - 1],
                    prevLoc = mouseLocs[0];

                if (!loc) {
                    return 0;
                }

                if (!prevLoc) {
                    prevLoc = loc;
                }

                if (prevLoc.x < offset.left || prevLoc.x > lowerRight.x ||
                    prevLoc.y < offset.top || prevLoc.y > lowerRight.y) {
                    // If the previous mouse location was outside of the entire
                    // menu's bounds, immediately activate.
                    return 0;
                }

                if (lastDelayLoc &&
                    loc.x == lastDelayLoc.x && loc.y == lastDelayLoc.y) {
                    // If the mouse hasn't moved since the last time we checked
                    // for activation status, immediately activate.
                    return 0;
                }

                // Detect if the user is moving towards the currently activated
                // submenu.
                //
                // If the mouse is heading relatively clearly towards
                // the submenu's content, we should wait and give the user more
                // time before activating a new row. If the mouse is heading
                // elsewhere, we can immediately activate a new row.
                //
                // We detect this by calculating the slope formed between the
                // current mouse location and the upper/lower right points of
                // the menu. We do the same for the previous mouse location.
                // If the current mouse location's slopes are
                // increasing/decreasing appropriately compared to the
                // previous's, we know the user is moving toward the submenu.
                //
                // Note that since the y-axis increases as the cursor moves
                // down the screen, we are looking for the slope between the
                // cursor and the upper right corner to decrease over time, not
                // increase (somewhat counterintuitively).
                function slope(a, b) {
                    return (b.y - a.y) / (b.x - a.x);
                };

                var decreasingCorner = upperRight,
                    increasingCorner = lowerRight;

                // Our expectations for decreasing or increasing slope values
                // depends on which direction the submenu opens relative to the
                // main menu. By default, if the menu opens on the right, we
                // expect the slope between the cursor and the upper right
                // corner to decrease over time, as explained above. If the
                // submenu opens in a different direction, we change our slope
                // expectations.
                if (options.submenuDirection == "left") {
                    decreasingCorner = lowerLeft;
                    increasingCorner = upperLeft;
                } else if (options.submenuDirection == "below") {
                    decreasingCorner = lowerRight;
                    increasingCorner = lowerLeft;
                } else if (options.submenuDirection == "above") {
                    decreasingCorner = upperLeft;
                    increasingCorner = upperRight;
                }

                var decreasingSlope = slope(loc, decreasingCorner),
                    increasingSlope = slope(loc, increasingCorner),
                    prevDecreasingSlope = slope(prevLoc, decreasingCorner),
                    prevIncreasingSlope = slope(prevLoc, increasingCorner);

                if (decreasingSlope < prevDecreasingSlope &&
                    increasingSlope > prevIncreasingSlope) {
                    // Mouse is moving from previous location towards the
                    // currently activated submenu. Delay before activating a
                    // new menu row, because user may be moving into submenu.
                    lastDelayLoc = loc;
                    return DELAY;
                }

                lastDelayLoc = null;
                return 0;
            };

            /**
             * Hook up initial menu events
             */
            jQuerymenu
                .mouseleave(mouseleaveMenu)
                .find(options.rowSelector)
                .mouseenter(mouseenterRow)
                .mouseleave(mouseleaveRow)
                .click(clickRow);

            jQuery(document).mousemove(mousemoveDocument);

        };
    })(jQuery);
    var jQuerymenu = jQuery('#megamenu-nav-main');
    jQuerymenu.menuAim({
        activate: activateSubmenu,
        deactivate: deactivateSubmenu,
        exitMenu: function() {

            return jQuery(this).find(".megamenu").removeClass("ok");
        }
    });

    var jQuerymenu2 = jQuery('#megamenu-nav-main-2');
    jQuerymenu2.menuAim({
        activate: activateSubmenu,
        deactivate: deactivateSubmenu,
        exitMenu: function() {

            return jQuery(this).find(".megamenu").removeClass("ok");
        }
    });



    function activateSubmenu(row) {
        var jQueryrow = jQuery(row),
            jQuerysubmenu = jQueryrow.children('.megamenu');

        //	console.log(jQuerysubmenu);
        jQueryrow.find('a').addClass('hover');

        jQuerysubmenu.css('display', 'block');
        //jQuery('.gearvn-cat-menu-item').css('background','#ea1c04 !important'); 


        //jQuerysubmenu.css({'display': 'opacity:1 !important', 'visibility':'visible !important'});
    }

    function deactivateSubmenu(row) {
        var jQueryrow = jQuery(row),
            jQuerysubmenu = jQueryrow.children('.megamenu');

        jQueryrow.find('a').removeClass('hover');
        //jQuerysubmenu.css('display', 'none');
        jQuerysubmenu.css('display', 'none');


    }







    jQuery(window).load(function() {
        jQuery('.loader').fadeOut("slow");
    })

    $('.style-nav-fix');
    jQuery(document).ready(function() {
        var date = new Date();
        var minutes = 720;
        date.setTime(date.getTime() + (minutes * 60 * 1000));


        if ($.cookie('test_status') != '1') {
            //show popup here
            $('#myModal').modal('show');
            jQuery.cookie('test_status', '1', {
                expires: date
            });
        }



        var ul = $('.gearvn-top-banner-block ');

        var lis = $('.gearvn-top-banner-block .gearvn-top-banner ').length;

        var random = Math.floor(Math.random() * (lis - 0));
        $('.gearvn-top-banner-block .gearvn-top-banner ').eq(random).addClass('oktr');
        console.log(random);
        /*
        var ul = $('.gearvn-top-banner-block '),
        lis = ul.find('.gearvn-top-banner').detach(),
        used = [];

        function showRandom() {
        var new_lis = [];
        while (true) {
        var li = lis[Math.floor(Math.random() * lis.length)];
        if (used.indexOf(li) === -1 && new_lis.indexOf(li) === -1) new_lis.push(li);
        if (new_lis.length >= 3) break;
        }
        used = new_lis;
        ul.html(new_lis);
        }

        showRandom();

        */

        jQuery('.sidebar-dropdown a').click(function(e) {

            jQuery(this).parent().toggleClass("active");
            jQuery(this).next().slideToggle('fast');


        });


        jQuery('#show-sidebar').click(function(e) {
            jQuery("body").addClass("show-fade");
            jQuery("html").addClass("show-fadex");

            jQuery('.page-wrapper').removeClass(
                'toggled'); //If there is any p with class yellow, it removes that
            jQuery(e.target).closest('.page-wrapper').addClass(
                'toggled'); //This find closest target when you click, in our case current paragraph(p)

        });

        jQuery('.faded').click(function(e) {
            jQuery("body").removeClass("show-fade");
            jQuery("html").removeClass("show-fadex");

            jQuery('.page-wrapper').removeClass(
                'toggled'); //If there is any p with class yellow, it removes that

        });
        if (jQuery(window).width() > 768) {
            jQuery(window).scroll(function() {
                var k = jQuery('.header').innerHeight();
                var kk = k / 2 + 100;
                if (jQuery(window).scrollTop() > k) {
                    jQuery('.gearvn-top-banner-block ').addClass('fixed');
                    jQuery('.fix-xxx ').addClass('xxxz');

                    //	jQuery('.xxx').css('padding-top',k);
                    //	jQuery('.gearvn-header-navigation').addClass('sticky-header');
                } else if (jQuery(window).scrollTop() < kk) {
                    //	jQuery('.gearvn-header-navigation').removeClass('sticky-header');
                    jQuery('.gearvn-top-banner-block ').removeClass('fixed');
                    jQuery('.fix-xxx ').removeClass('xxxz');


                }
            });
        }

    });
    jQuery('.search_bar').submit(function(e) {
        e.preventDefault();
        var q = jQuery(this).find('input[name=q]').val();
        if (!q) {
            window.location = '/search?type=product&q=**';
            return;
        } else {
            /*var str = '(title:product**'+q+')||(tag:product**'+q+')||(variant:product**'+q+')||(body:product**'+q+')||(sku:product**'+q+')';*/
            var str = '(title:product adjacent ' + q + ')';
            str = encodeURIComponent('(' + str + ')');
            window.location = '/search?type=product&q=filter=' + str;
            return;
        }
    });
    var dropdown = document.getElementsByClassName("dropdown-btn-arrow");
    var i;
    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent) {
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            }

        });
    }

    function redirectIt(obj) {
        var goToLink = obj.getAttribute("href");
        window.location.href = goToLink;
    }

</script>
