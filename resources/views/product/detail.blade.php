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
    <!-- product-details Area Start -->
    <div class="product-details-area">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="zoomWrapper">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}"
                                    data-zoom-image="img/product-details/ex-big-1-1.jpg" alt="big-1">
                            </a>
                        </div>
                        {{-- <div class="single-zoom-thumb">
                            <ul class="bxslider" id="gallery_01">
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                        data-image="img/product-details/big-1-1.jpg"
                                        data-zoom-image="img/product-details/ex-big-1-1.jpg"><img
                                            src="img/product-details/th-1-1.jpg" alt="zo-th-1" /></a>
                                </li>
                                <li class="">
                                    <a href="#" class="elevatezoom-gallery" data-image="img/product-details/big-1-2.jpg"
                                        data-zoom-image="img/product-details/ex-big-1-2.jpg"><img
                                            src="img/product-details/th-1-2.jpg" alt="zo-th-2"></a>
                                </li>
                                <li class="">
                                    <a href="#" class="elevatezoom-gallery" data-image="img/product-details/big-1-3.jpg"
                                        data-zoom-image="img/product-details/ex-big-1-3.jpg"><img
                                            src="img/product-details/th-1-3.jpg" alt="ex-big-3" /></a>
                                </li>
                                <li class="">
                                    <a href="#" class="elevatezoom-gallery" data-image="img/product-details/big-4.jpg"
                                        data-zoom-image="img/product-details/ex-big-4.jpg"><img
                                            src="img/product-details/th-4.jpg" alt="zo-th-4"></a>
                                </li>
                                <li class="">
                                    <a href="#" class="elevatezoom-gallery" data-image="img/product-details/big-5.jpg"
                                        data-zoom-image="img/product-details/ex-big-5.jpg"><img
                                            src="img/product-details/th-5.jpg" alt="zo-th-5" /></a>
                                </li>
                                <li class="">
                                    <a href="#" class="elevatezoom-gallery" data-image="img/product-details/big-6.jpg"
                                        data-zoom-image="img/product-details/ex-big-6.jpg"><img
                                            src="img/product-details/th-6.jpg" alt="ex-big-3" /></a>
                                </li>
                                <li class="">
                                    <a href="#" class="elevatezoom-gallery" data-image="img/product-details/big-7.jpg"
                                        data-zoom-image="img/product-details/ex-big-7.jpg"><img
                                            src="img/product-details/th-7.jpg" alt="ex-big-3" /></a>
                                </li>
                                <li class="">
                                    <a href="#" class="elevatezoom-gallery" data-image="img/product-details/big-8.jpg"
                                        data-zoom-image="img/product-details/ex-big-8.jpg"><img
                                            src="img/product-details/th-8.jpg" alt="ex-big-3" /></a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="product-list-wrapper">
                        <div class="single-product">
                            <div class="product-content">
                                <h2 class="product-name"><a href="#">{{ $productDetail->pro_name }}</a></h2>
                                <div class="rating-price">
                                    <?php
                                    $ageDetail = 0;
                                    if ($productDetail->pro_total_rating) {
                                    $ageDetail = round($productDetail->pro_total_number / $productDetail->pro_total_rating,
                                    2);
                                    }
                                    ?>
                                    <div class="pro-rating">

                                        @for ($i = 1; $i <= 5; $i++)
                                            <a href="#"><i
                                                    class="fa fa-star {{ $i <= $ageDetail ? 'active' : '' }}"></i></a>
                                        @endfor
                                    </div>
                                    <div class="price-boxes">
                                        <span
                                            class="new-price">{{ number_format($productDetail->pro_price, 0, '.', '.') }}vnđ</span>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>
                                        {{ $productDetail->pro_description }}
                                    </p>
                                </div>
                                <p class="availability in-stock">Availability: <span>In stock</span></p>
                                <div class="actions-e">
                                    <div class="action-buttons-single">
                                        <div class="inputx-content">
                                            <label for="qty">Quantity:</label>
                                            <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty"
                                                class="input-text qty">
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="#">Add to cart</a>
                                        </div>
                                        <div class="add-to-links">
                                            <div class="add-to-wishlist">
                                                <a href="#" data-toggle="tooltip" title=""
                                                    data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                            </div>
                                            <div class="compare-button">
                                                <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i
                                                        class="fa fa-refresh"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="singl-share">
                                    <a href="#"><img src="img/single-share.png" alt=""></a>
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
                        <li class="active"><a href="" data-toggle="tab">Chi tiết sản phẩm</a></li>
                    </ul>
                    <!-- Chi tiết sản phẩm -->
                    <div class="product-tab-content" style="border: 1px solid #ddd; border-top: none; padding: 10px;">
                        <p>{!! $productDetail->pro_content !!}</p>
                    </div>
                    <br>
                    <!-- Đánh giá sản phẩm -->
                    <div class="component_rating col"
                        style="margin-bottom: 20px;  border: 1px solid #dedede; border-radius:5px">
                        <h3 style="margin: 5px"> Đánh giá sản phẩm</h3>
                        <div class="component_rating_content" style="display:flex; align-items:center;">
                            <div class="rating_item" style="width: 20%; position: relative;">
                                <span class="fa fa-star"
                                    style="font-size: 100px; display:block;color:#ff9785;margin: 0 auto; text-align: center"></span>
                                <b
                                    style="position: absolute; top:50%; left:50%; transform: translateX(-50%) translateY(-50%); color:white; font-size: 20px">2.5</b>
                            </div>
                            <div class="list_rating" style="width: 60%; padding:20px">
                                @for ($i = 1; $i <= 5; $i++)
                                    <div class="item_rating" style="display: flex; align_items:center">
                                        <div style="width: 10%; font-size:14px">
                                            {{ $i }} <span class="fa fa-star"> </span>
                                        </div>
                                        <div style="width: 70%; margin: 6px 20px">
                                            <span
                                                style="width: 100%; height:6px; display:block; border: 1px solid #dedede; border-radius:5px"><b
                                                    style="width: 30%; background-color:#f25800; display:block; height:100%;border-radius:5px"></b></span>
                                        </div>
                                        <div style="width: 20%">
                                            <a href="">290 đánh giá</a>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div style="width: 20%">
                                <button class="btn btn-primary js_rating_action"
                                    style="width: 80%; padding:10px; color:white;">
                                    Gửi đánh giá
                                </button>
                            </div>
                        </div>

                        {{-- Khung đánh giá --}}
                        <div class="form_rating col-12 hide">
                            <div
                                style="display: flex; margin-top:15px; margin-left:10px; margin-bottom:5px; font-size:15px">
                                <p style="margin-bottom:0">Chọn đánh giá:</p>
                                <span style="margin: 0 15px" class="list_start">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="fa fa-star" data-key="{{ $i }}"></i>
                                    @endfor
                                </span>
                                <span class="list_text"> </span>
                                <input type="hidden" value="" class="number_rating">
                            </div>
                            <div class="row">
                                {{-- Khung nội dung --}}
                                <div class="col-md-6" style="margin-left:10px; margin-bottom:5px; margin-right:10px;">
                                    <textarea name="" class="form-control" rows="5" id="ra_content"></textarea>
                                </div>
                                {{-- Khung thông tin cá nhân --}}
                                <div class="col-md-2">
                                    <a class="btn btn-primary js_rating_product" style="margin-left:10px;"
                                        href="{{ route('post.rating.product', $productDetail->id) }}"> Gửi đánh
                                        giá</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Bình luận đánh giá sản phẩm --}}
                    <div class="component_list_rating">
                        @if (isset($ratings))
                            @foreach ($ratings as $rating)
                                <div class="rating_item" style="margin: 10px 0">
                                    <div>
                                        <span style="color: #333; font-weight: bold; text-transform:capitalize;">
                                            {{ $rating->user->name }} &nbsp;
                                        </span>
                                        <a href="" class="fa fa-check-circle-o" style="color: #52b858"> Đã mua hàng tại
                                            website </a>
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
                                        <span><i class="fa fa-clock-o"></i> {{ $rating->created__at }}</span>
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
    <br>
@stop
@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function() {
            let listStart = $(".list_start .fa");
            $listRatingText = {
                '1': 'Không thích',
                '2': 'Tạm được',
                '3': 'Bình thường',
                '4': 'Tốt',
                '5': 'Rất tốt',
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
                            alert("Cảm ơn bạn đã đánh giá sản phẩm");
                            location.reload();
                        }
                    });
                }

            });
        });

    </script>
@endsection
