@extends('layouts.app')
@section('content')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inner">
                        <ul>
                            <li class="home">
                                <a href="index.html">Home</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>Contact-us</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- contact-details start -->
    <div class="main-contact-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="contact-us-area">
                        <!-- google-map-area start -->
                        <div class="google-map-area">
                            <!--  Map Section -->
                            <div id="contacts" class="map-area">
                                <div id="map" class="map" data-lat="43.6532" data-lng="-79.3832">
                                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4843009464507!2d106.76972825095976!3d10.850721392233233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752763f23816ab%3A0x282f711441b6916f!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBTxrAgcGjhuqFtIEvhu7kgdGh14bqtdCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmg!5e0!3m2!1svi!2s!4v1619523088865!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- google-map-area end -->
                        <!-- contact us form start -->
                        <div class="contact-us-form">
                            <div class="sec-heading-area">
                                <h2>Contact US</h2>
                            </div>
                            <div class="contact-form">
                                <span class="legend">Contact Information</span>
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-top">
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                                                <label>Họ tên: <sup>*</sup></label>
                                                <input type="text" class="form-control" name="c_name" required>
                                            </div>
                                            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                                                <label>Email: <sup>*</sup></label>
                                                <input type="email" class="form-control" name="c_email" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-12 col-md-12 col-lg-512">
                                                <label>Tiêu đề: <sup>*</sup></label>
                                                <input type="text" class="form-control" name="c_title" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                            <label>Comment <sup>*</sup></label>
                                            <textarea class="yourmessage" name="c_content"></textarea>
                                        </div>
                                    </div>
                                    <div class="submit-form form-group col-sm-12 submit-review">
                                        <p><sup>*</sup> Required Fields</p>
                                        <button type="submit" class="add-tag-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- contact us form end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-details end -->
@stop
