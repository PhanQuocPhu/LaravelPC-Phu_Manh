@extends('layouts.app')
@section('content')

    <style>
        .product-tab-content {
            overflow: hidden;
        }

        .product-tab-content h2 {
            font-size: 24px !important;
        }

        .product-tab-content h3 {
            font-size: 20px !important;
        }

        .product-tab-content h4 {
            font-size: 18px !important;
        }

        .product-tab-content img {
            margin: 0 auto;
            text-align: center;
            max-width: 100%;
            display: block;
        }

        .list_start i:hover {
            cursor: pointer;
        }

        .list_text {
            display: inline-block;
            margin-left: 10px;
            position: relative;
            background: #52b858;
            color: #fff;
            padding: 2px 8px;
            box-sizing: border-box;
            font-size: 12px;
            border-radius: 2px;
            display: none;
        }

        .list_text::after {
            right: 100%;
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            border-color: rgba(82, 184, 88, 0);
            border-right-color: #52b858;
            border-width: 6px;
            margin-top: -6px;
        }

        .list_start .rating_active,
        .rating-price .pro-rating .active,
        .rating_item .active {
            color: #ff9785;
        }

    </style>

    <div class="main">
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
                                <li class="home">
                                    <a
                                        href="{{ route('get.list.product', [$cateProduct->c_slug, $cateProduct->id]) }}">{{ $cateProduct->c_name }}</a>
                                    <span><i class="fa fa-angle-right"></i></span>
                                </li>
                                <li class="home">
                                    <span>{{ $productDetail->pro_name }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs area end -->
        <!-- product-details Area Start -->
        <div class="product-details-area" id="content_product" data-id="{{ $productDetail->id }}">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="zoomWrapper">
                            <div id="img-1" class="zoomWrapper single-zoom">
                                <a href="#">
                                    <img id="zoom1" src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}"
                                        style="max-height: 515px;"
                                        data-zoom-image="{{ asset(pare_url_file($productDetail->pro_avatar)) }}"
                                        alt="big-1">
                                </a>
                            </div>
                            @if (isset($images))
                                <div class="single-zoom-thumb">
                                    <ul class="bxslider" id="gallery_01">
                                        <li class="">
                                            <a href="#" class="elevatezoom-gallery active"
                                                data-image="{{ asset(pare_url_file($productDetail->pro_avatar)) }}"
                                                data-zoom-image="{{ asset(pare_url_file($productDetail->pro_avatar)) }}"><img
                                                    src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" /></a>
                                        </li>
                                        @foreach ($images as $key => $image)
                                            <li class="">
                                                <a href="#" class="elevatezoom-gallery {{-- {{ $key == 0 ? 'active' : '' }} --}}"
                                                    data-image="{{ asset(pare_url_file($image->pi_slug)) }}"
                                                    data-zoom-image="{{ asset(pare_url_file($image->pi_slug)) }}"><img
                                                        src="{{ asset(pare_url_file($image->pi_slug)) }}" /></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-sm-3">
                                        <img class="galery" src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}">
                                    </div>
                                    @foreach ($images as $image)
                                        <div class="col-sm-3">
                                            <img class="galery" src="{{ asset(pare_url_file($image->pi_slug)) }}">
                                        </div>
                                    @endforeach
                                </div> --}}
                            @endif
                        </div>
                    </div>

                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="product-list-wrapper">
                            <div class="single-product">
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">{{ $productDetail->pro_name }}</a></h2>
                                    <div class="rating-price row">
                                        <div class="col-md-3">
                                            <strong>????nh gi??:</strong>
                                        </div>
                                        <?php
                                        $ageDetail = 0;
                                        if ($productDetail->pro_total_rating) {
                                            $ageDetail = round($productDetail->pro_total_number / $productDetail->pro_total_rating, 2);
                                        }
                                        ?>
                                        <div class="pro-rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <a href="#"><i
                                                        class="fa fa-star {{ $i <= $ageDetail ? 'active' : '' }}"></i></a>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <strong>Th??ng tin chung: </strong>
                                        <p>{!! $productDetail->pro_description !!}</p>
                                    </div>
                                    <div class="price-boxes row">
                                        <span class="col-md-2" style="display: inline-block; font-size:16px;">
                                            Gi??:
                                        </span>
                                        <div class="product-row-price pull-left">
                                            @if ($productDetail->pro_sale)
                                                <del
                                                    style="font-size: 12px">{{ number_format($productDetail->pro_price, 0, '.', '.') }}???</del>
                                            @else
                                                <del> </del>
                                            @endif
                                            <br>
                                            <span class="product-row-sale"
                                                style="font-size: 30px">{{ number_format(($productDetail->pro_price * (100 - $productDetail->pro_sale)) / 100, 0, '.', '.') }}???
                                            </span>
                                        </div>
                                        {{-- <span class="new-price" style="font-size: 22px;color: #e61010; font-weight: 700;">
                                    {{ number_format($productDetail->pro_price, 0, '.', '.') }}vn??
                                </span> --}}
                                    </div>
                                    <p class="availability in-stock">Availability:
                                        @if ($productDetail->pro_number >> 0)
                                            <span> C??n h??ng</span>
                                        @else
                                            <span style="color: #e61010"> H???t h??ng</span>
                                        @endif
                                    </p>
                                    <div class="actions-e">
                                        <div class="action-buttons-single" style="border-radius:8px">
                                            <div class="add-to-cart">
                                                <a class="add-cart"
                                                    href="{{ route('add.shopping.cart.ajax', $productDetail->id) }}">?????t
                                                    h??ng</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="single-product-tab">
                        <!-- Nav tabs -->
                        <ul class="details-tab">
                            <li class="active"><a href="" data-toggle="tab">Chi ti???t s???n ph???m</a></li>
                        </ul>
                        <!-- Chi ti???t s???n ph???m -->
                        <div class="product-tab-content" style="border: 1px solid #ddd; border-top: none; padding: 10px;">
                            <p>{!! $productDetail->pro_content !!}</p>
                        </div>
                        <br>
                        <!-- ????nh gi?? s???n ph???m -->
                        <div class="component_rating col"
                            style="margin-bottom: 20px;  border: 1px solid #dedede; border-radius:5px">
                            <h3 style="margin: 5px"> ????nh gi?? s???n ph???m</h3>
                            <div class="component_rating_content" style="display:flex; align-items:center;">
                                <div class="rating_item" style="width: 20%; position: relative;">
                                    <span class="fa fa-star"
                                        style="font-size: 100px; display:block;color:#ff9785;margin: 0 auto; text-align: center"></span>
                                    <b
                                        style="position: absolute; top:50%; left:50%; transform: translateX(-50%) translateY(-50%); color:white; font-size: 20px">{{ $ageDetail }}</b>
                                </div>
                                <div class="list_rating" style="width: 60%; padding:20px">
                                    @if (isset($arrayRatings))
                                        @foreach ($arrayRatings as $key => $arrayRating)
                                            <?php $itemAge = round(($arrayRating['total'] / $productDetail->pro_total_rating) * 100, 0); ?>
                                            <div class="item_rating" style="display: flex; align_items:center">
                                                {{-- {{dd($arrayRating)}} --}}
                                                <div style="width: 10%; font-size:14px">
                                                    {{ $key }} <span class="fa fa-star"> </span>
                                                </div>
                                                <div style="width: 70%; margin: 6px 20px">
                                                    <span
                                                        style="width: 100%; height:6px; display:block; border: 1px solid #dedede; border-radius:5px">
                                                        <b
                                                            style="width: {{ $itemAge }}%; background-color:#f25800; display:block; height:100%;border-radius:5px">
                                                        </b>
                                                    </span>
                                                </div>
                                                <div style="width: 20%">
                                                    <a href="">{{ $arrayRating['total'] }} ????nh gi??
                                                        ({{ $itemAge }}%)</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif


                                </div>
                                <div style="width: 20%">
                                    <button class="btn btn-primary js_rating_action"
                                        style="width: 80%; padding:10px; color:white;">
                                        G???i ????nh gi??
                                    </button>
                                </div>
                            </div>

                            {{-- Khung ????nh gi?? --}}
                            <div class="form_rating col-12 hide">
                                <div
                                    style="display: flex; margin-top:15px; margin-left:10px; margin-bottom:5px; font-size:15px">
                                    <p style="margin-bottom:0">Ch???n ????nh gi??:</p>
                                    <span style="margin: 0 15px" class="list_start">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i class="fa fa-star" data-key="{{ $i }}"></i>
                                        @endfor
                                    </span>
                                    <span class="list_text"> </span>
                                    <input type="hidden" value="" class="number_rating">
                                </div>
                                <div class="row">
                                    {{-- Khung n???i dung --}}
                                    <div class="col-md-6" style="margin-left:10px; margin-bottom:5px; margin-right:10px;">
                                        <textarea name="" class="form-control" rows="5" id="ra_content"></textarea>
                                    </div>
                                    {{-- Khung th??ng tin c?? nh??n --}}
                                    <div class="col-md-2">
                                        <a class="btn btn-primary js_rating_product" style="margin-left:10px;"
                                            href="{{ route('post.rating.product', $productDetail->id) }}"> G???i ????nh
                                            gi??</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- B??nh lu???n ????nh gi?? s???n ph???m --}}
                        <div class="component_list_rating">
                            <h2>B??nh lu???n</h2>
                            @if (isset($ratings))
                                @foreach ($ratings as $rating)
                                    <div class="rating_item" style="margin: 10px 0">
                                        <div>
                                            <span style="color: #333; font-weight: bold; text-transform:capitalize;">
                                                {{ $rating->user->name }} &nbsp;
                                            </span>
                                            {{-- <a href="" class="fa fa-check-circle-o" style="color: #52b858"> ???? mua h??ng t???i
                                                website </a> --}}
                                        </div>
                                        <div class="pro-rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i class="fa fa-star {{ $i <= $rating->ra_number ? 'active' : '' }}"></i>
                                            @endfor
                                        </div>
                                        <span>
                                            {{ $rating->ra_content }}
                                        </span>
                                        <div>
                                            <span><i class="fa fa-clock-o"></i> {{ $rating->created_at }}</span>
                                        </div>
                                    </div>
                                @endforeach

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-details Area end -->
    </div>

    <br>
@stop
@section('script')

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('body').on('click', '.add-cart', function(event) {
            event.preventDefault();
            let $this = $(this);
            let url = $this.attr('href');
            /*  console.log(url); */
            Swal.fire({
                title: 'Th??m s???n ph???m v??o gi??? h??ng ?',
                /* showDenyButton: true, */
                showCancelButton: true,
                confirmButtonText: `Yes`,
                /* denyButtonText: `No`, */
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        method: 'POST',
                        success: function(response) {
                            Swal.fire('Th??m s???n ph???m th??nh c??ng', '', 'success')
                            $("#cart-count").html(response);
                        }
                    });
                }
            });

        });

        $(document).ready(function() {
            $('.galery').click(function() {
                // Change src attribute of image
                let $this = $(this);
                let src = $(this).attr("src");
                $('#thumb').attr('src', src);
                $('#thumb').attr('data-zoom-image', src);

            });
        });

        $(function() {
            let listStart = $(".list_start .fa");
            $listRatingText = {
                '1': 'Kh??ng th??ch',
                '2': 'T???m ???????c',
                '3': 'B??nh th?????ng',
                '4': 'T???t',
                '5': 'R???t t???t',
            };
            listStart.mouseover(function() {
                let $this = $(this);
                let number = $this.attr('data-key');
                listStart.removeClass('rating_active');

                $(".number_rating").val(number);
                $.each(listStart, function(key, value) {
                    if (key + 1 <= number) {
                        $(this).addClass('rating_active');
                    }
                });
                $(".list_text").text('').text($listRatingText[number]).show();
            });
            $(".js_rating_action").click(function(event) {
                event.preventDefault();
                if ($(".form_rating").hasClass('hide')) {
                    $(".form_rating").addClass('active').removeClass('hide');
                } else {
                    $(".form_rating").addClass('hide').removeClass('active');
                }

            });
            $('.js_rating_product').click(function(e) {
                event.preventDefault();
                let content = $("#ra_content").val();
                let number = $(".number_rating").val();
                let url = $(this).attr('href');
                if (content && number) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            number: number,
                            r_content: content
                        }
                    }).done(function(result) {
                        if (result.code == 1) {
                            alert("C???m ??n b???n ???? ????nh gi?? s???n ph???m");
                            location.reload();
                        } else {
                            alert("Vui l??ng ????ng nh???p ????? ????nh gi?? s???n ph???m");
                            location.href = "/dang-nhap";
                        }
                    });
                }

            });
            //L??u id s???n ph???m
            let idProduct = $("#content_product").attr('data-id');
            //L???y gi?? tr??? trong storage
            let products = localStorage.getItem('products');

            if (products == null) {
                arrayProduct = new Array();
                arrayProduct.push(idProduct);
                localStorage.setItem('products', JSON.stringify(arrayProduct));

            } else {
                //Chuy???n v??? m???ng
                products = $.parseJSON(products);
                if (products.indexOf(idProduct) == -1) {
                    products.push(idProduct);
                    localStorage.setItem('products', JSON.stringify(products));
                }
                console.log(products);
            }
        });
    </script>
@endsection
