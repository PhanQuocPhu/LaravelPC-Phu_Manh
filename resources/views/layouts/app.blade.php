<!DOCTYPE html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PcOnline</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon
  ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Fonts
  ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet'
        type='text/css'>

    <!-- CSS  -->

    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('shopping/css/bootstrap.min.css') }}">

    <!-- owl.carousel CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('shopping/css/owl.carousel.css') }}">

    <!-- owl.theme CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('shopping/css/owl.theme.css') }}">

    <!-- owl.transitions CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('shopping/css/owl.transitions.css') }}">

    <!-- font-awesome.min CSS
  ============================================ -->
    <link href=" {{ asset('theme_admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('shopping/css/font-awesome.min.css') }}">

    <!-- meanmenu CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('shopping/css/meanmenu.min.css') }}">

    <!-- font-icon CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('shopping/fonts/font-icon.css') }}">

    <!-- animate CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('shopping/css/animate.css') }}">

    <!-- normalize CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('shopping/css/normalize.css') }}">

    <!-- main CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('shopping/css/main.css') }}">

    <!-- style CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('shopping/style.css') }}">

    <!-- responsive CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('shopping/css/responsive.css') }}">






    <!-- Login style CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('theme_admin/css/themestyle/loginstyle.css') }}">

    <!-- header CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('theme_admin/css/gearvn.css') }}">
    <link rel="stylesheet" href="{{ asset('theme_admin/css/header_new.css') }}">

    <!-- nivo slider CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('theme_admin/custom-slider/css/nivo-slider.css') }} " type="text/css" />
    <link rel="stylesheet" href="{{ asset('theme_admin/custom-slider/css/preview.css') }} " type="text/css"
        media="screen" />

    {{-- Jquery confirm --}}
    <link href=" {{ asset('js/jquery-confirm-v3.3.4/dist/jquery-confirm.min.css') }}" rel="stylesheet"
        type="text/css">

    {{-- Sweet Alert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0"
nonce="cDYxzErr"></script>

<body class="home-four" {{-- style="background-color: #f1f0f1 !important" --}}>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- Header start -->
    <header>
        @include('components.header')
    </header>

    <!-- Header end -->

    <!-- Begin alert -->
    <div>
        @if (\Session::has('success'))
            <div class=" alert alert-success alert-dismissible" role="alert"
                style="position: fixed; right:20px; top:20px; left:50%; transform: translateX(-50%); z-index:99999999999">
                <strong>Success!</strong> {{ \Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (\Session::has('warning'))
            <div class="alert alert-danger alert-dismissible" role="alert"
                style="position: fixed; right:20px; top:20px; left:50%; transform: translateX(-50%); z-index:99999999999">
                {{ \Session::get('warning') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (\Session::has('danger'))
            <div class="alert alert-danger alert-dismissible" role="alert"
                style="position: fixed; right:20px; top:20px; left:50%; transform: translateX(-50%); z-index:99999999999">
                <strong>Error</strong> {{ \Session::get('error') }}Vui l??ng ki???m tra l???i d??? li???u nh???p!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>


    <!-- End alert -->

    <!-- main area start -->
    <div style="{{ \Request::route()->getName() == 'home' ? '' : 'margin-top:120px' }}">
        @yield('content')
    </div>

    <!-- main area end -->


    <!-- Footer start -->
    @include('components.footer')
    <!-- Footer end -->





</body>
<footer>

    {{-- Script --}}


    <script type="text/javascript">
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 2000);
    </script>

    <!-- JS -->

    <!-- jquery-1.11.3.min js
  ============================================ -->
    <script src="{{ asset('theme_admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    {{-- <script src="{{ asset('shopping/js/jquery-1.11.3.min.js') }}"></script> --}}

    <!-- bootstrap js
  ============================================ -->
    <script src="{{ asset('shopping/js/bootstrap.min.js') }}"></script>

    <!-- owl.carousel.min js
  ============================================ -->
    <script src="{{ asset('shopping/js/owl.carousel.min.js') }}"></script>

    <!-- jquery scrollUp js 
  ============================================ -->
    <script src="{{ asset('shopping/js/jquery.scrollUp.min.js') }}"></script>

    <!-- price-slider js
  ============================================ -->
    <script src="{{ asset('shopping/js/price-slider.js') }}"></script>

    <!-- elevateZoom js 
  ============================================ -->
    <script src="{{ asset('shopping/js/jquery.elevateZoom-3.0.8.min.js') }}"></script>

    <!-- jquery.bxslider.min.js
  ============================================ -->
    <script src="{{ asset('shopping/js/jquery.bxslider.min.js') }}"></script>

    <!-- mobile menu js
  ============================================ -->
    <script src="{{ asset('shopping/js/jquery.meanmenu.js') }}"></script>

    <!-- wow js
  ============================================ -->
    <script src="{{ asset('shopping/js/wow.js') }}"></script>

    <!-- plugins js
  ============================================ -->
    <script src="{{ asset('shopping/js/plugins.js') }}"></script>

    <!-- main js
  ============================================ -->
    <script src="{{ asset('shopping/js/main.js') }}"></script>



    <!-- Nivo slider js
  ============================================ -->
    <script src="{{ asset('theme_admin/custom-slider/js/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('theme_admin/custom-slider/home.js') }}" type="text/javascript"></script>

    @yield('script')
</footer>

</html>
