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

    #a_cat_menu_item:hover {
        background: #ff391e;
        color: #fff
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        position: absolute;
        border-radius: 7px 0 0 7px !important;
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
        z-index: 999;
    }

</style>

<div class="header">
    <!--TOP BANNER SLIDER RANDOM-->
    <div class="fix-xxx">
        <div class="headerxxx">
            <div class="container gearvn-content-section">
                <div class="row">
                    {{-- Logo với khung search --}}
                    <div class="left_header" style="z-index: 997;">
                        <a href="/" class="hidden-xsx logo-big">
                            <img src="{{ asset('img/logo.gif') }}" alt="" />
                        </a>
                        <a href="/" class="hidden-sm hidden-md hidden-lg logo-small">
                            <img src="{{ asset('img/logo.gif') }}" alt="" />
                        </a>
                        {{-- Search mobile --}}
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
                                    <button type="submit" value="Search"><span class="fa fa-search" aria-hidden="true"
                                            style="color: white"></span></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    {{-- Mấy cái còn lại --}}
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
                        {{-- Thanh kế bên search --}}
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
                <div class="fixed-nav dropdown">
                    <span class="fixed-menu style-nav-fix "><i class="fa fa-bars"></i> Danh mục sản phẩm</span>
                    <!--MENU LEFT-->
                    <div class="gearvn-header-menu dropdown-content freez" style="background-color: #f1f0f1">
                        <div class="cat-menu gearvn-cat-menu mainmenu" style="margin-top: 13px">
                            <nav id="megamenu-nav-freez" class="megamenu-nav">
                                <ol class="megamenu-nav-primary responsive" id="megamenu-nav-main">
                                    @if (isset($categories))
                                        @foreach ($categories as $category)
                                            <li class="cat-menu-item " id="cat_menu_item">
                                                <a class="gearvn-cat-menu-item" id="a_cat_menu_item"
                                                    href="{{ route('get.list.product', [$category->c_slug, $category->id]) }}">
                                                    <span class="gearvn-cat-menu-icon">
                                                        <img src="{{ pare_url_file($category->c_icon) }}">
                                                        <img src="{{ pare_url_file($category->c_icon) }}">
                                                    </span>
                                                    <span class="gearvn-cat-menu-name">{{ $category->c_name }}</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif
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
                        SẢN PHẨM VỪA XEM
                    </a>
                    <a href="{{ route('get.list.article') }}"
                        class="gearvn-header-navigation-item recently-product-item header-navigation-recently-products ">
                        <div class="xxxkt">

                            <img src="//theme.hstatic.net/1000026716/1000440777/14/ak1.png?v=19892">
                            <img src="//theme.hstatic.net/1000026716/1000440777/14/ak1.png?v=19892">
                        </div>

                        THÔNG TIN CÔNG NGHỆ
                    </a>
                    <a href="{{ route('get.buy.installment') }}"
                        class="gearvn-header-navigation-item recently-product-item header-navigation-recently-products ">
                        <div class="xxxkt">

                            <img src="//theme.hstatic.net/1000026716/1000440777/14/xk3.png?v=19892">
                            <img src="//theme.hstatic.net/1000026716/1000440777/14/xk3s.png?v=19892">
                        </div>
                        HƯỚNG DẪN TRẢ GÓP
                    </a>
                    <a href="{{ route('get.guarantee') }}"
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

    <div class="gearvn-header-navigation {{ \Request::route()->getName() == 'home' ? '' : 'hidden' }}">
        <div class="row gearvn-content-section gearvn-header-navigation-content padding-10-0 container">
            <!--MENU LEFT-->
            <!--<span class="click-list"><i class="fa fa-bars"></i> Danh mục sản phẩm</span>-->
            <div class="gearvn-header-menu">
                <div class="cat-menu gearvn-cat-menu">
                    <nav id="megamenu-nav" class="megamenu-nav">
                        <ol class="megamenu-nav-primary responsive" id="megamenu-nav-main">
                            @if (isset($categories))
                                @foreach ($categories as $category)
                                    <li class="cat-menu-item " id="cat_menu_item">
                                        <a class="gearvn-cat-menu-item" id="a_cat_menu_item"
                                            href="{{ route('get.list.product', [$category->c_slug, $category->id]) }}">
                                            <span class="gearvn-cat-menu-icon">
                                                <img src="{{ pare_url_file($category->c_icon) }}">
                                                <img src="{{ pare_url_file($category->c_icon) }}">
                                            </span>
                                            <span class="gearvn-cat-menu-name">{{ $category->c_name }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ol>
                    </nav>
                </div>
            </div>
            <!--MENU LEFT-->

            <!--NAVIGATION RIGHT-->
            <div class="gearvn-header-navigation-block ">
                <div class="gearvn-header-banner">
                    <div class="left" {{-- style="width: 66%;" --}}>
                        <div class="slider-wrap">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="5" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="6" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="7" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="8" class=""></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    @foreach ($slideBanners as $slideBanner)
                                        <div
                                            class="item {{ $slideBanner->sb_img == $firstSb->sb_img ? 'active' : '' }}">
                                            <a href="{{ $slideBanner->sb_link }}">

                                                <img class="w-100" src="{{ pare_url_file($slideBanner->sb_img) }}"
                                                    alt="...">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button"
                                    data-slide="prev">
                                    <span class="fas fa fa-chevron-left"></span>
                                </a>

                                <a class="right carousel-control" href="#carousel-example-generic" role="button"
                                    data-slide="next">
                                    <span class="fas fa fa-chevron-right" style="position: absolute; top: 50%;"></span>
                                </a>
                            </div> <!-- Carousel -->
                        </div>
                        <div class="sub-banner-wrap i100">
                            <a href="{{ $outBanners[0]->ob_link }}" class="sub-item">
                                <img src="{{ pare_url_file($outBanners[0]->ob_img) }}">
                            </a>
                            <a href="{{ $outBanners[1]->ob_link }}" class="sub-item">
                                <img src="{{ pare_url_file($outBanners[1]->ob_img) }}">
                            </a>
                        </div>
                    </div>
                    <div class="right i100">
                        <div class="sub-item-right">
                            <a href="{{ $outBanners[2]->ob_link }}" class="sub-item">
                                <img src="{{ pare_url_file($outBanners[2]->ob_img) }}">
                            </a>
                            <a href="{{ $outBanners[3]->ob_link }}" class="sub-item">
                                <img src="{{ pare_url_file($outBanners[3]->ob_img) }}">
                            </a>
                            <a href="{{ $outBanners[4]->ob_link }}" class="sub-item">
                                <img src="{{ pare_url_file($outBanners[4]->ob_img) }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--END NAVIGATION RIGHT-->
        </div>
    </div>
</div>

<br>



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
