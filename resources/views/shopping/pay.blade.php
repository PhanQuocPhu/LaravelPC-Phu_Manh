@extends('layouts.app')
@section('content')

    <div class="container wrapper">
        <!-- breadcrumbs area start -->
        <div class="row cart-head">
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
                                    <li class="category3"><span>Thanh toán</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs area end -->
        </div>
        <!-- breadcrumbs area end -->

        <div class="row cart-body">
            <form class="form-horizontal" method="post" action="">
                @csrf
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Giỏ hàng <div class="pull-right"><small><a class="afix-1" href="{{ route('get.list.shopping.cart') }}">Edit Cart</a></small>
                            </div>
                        </div>
                        <div class="panel-body">
                            {{-- Cart product start --}}
                            @foreach ($products as $product)
                                <div class="form-group">
                                    <div class="col-sm-3 col-xs-3">
                                        <img class="img-responsive"
                                            src="{{ pare_url_file($product->options->avatar) }}" />
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <div class="col-xs-12">{{ $product->name }}</div>
                                        <div class="col-xs-12"><small>Số lượng:<span>{{ $product->qty }}</span></small>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-3 text-right">
                                        <h6>{{ number_format($product->price, 0, '.', '.') }} <span>vnđ</span></h6>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <hr />
                                </div>
                            @endforeach

                            {{-- Cart product end --}}

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Subtotal</strong>
                                    <div class="pull-right"><span>{{ Cart::subtotal() }}</span> <span>vnđ</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading">Thông tin thanh toán</div>
                        <div class="panel-body">
                            {{-- <div class="form-group">
                                <div class="col-md-12"><strong>Họ và tên người nhận:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control" value="{{ get_data_user('web', 'name') }}" />
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <div class="col-md-12"><strong>Địa chỉ:</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control" value="{{ get_data_user('web', 'address') }}" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Email:</strong></div>
                                <div class="col-md-12"><input type="text" name="email" class="form-control"
                                        value="{{ get_data_user('web', 'email') }}" readonly /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Số điện thoại:</strong></div>
                                <div class="col-md-12"><input type="text" name="phone" class="form-control"
                                        value="{{ get_data_user('web', 'phone') }}" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Ghi chú:</strong></div>
                                <div class="col-md-12">
                                    <textarea name="note" id="" cols="30" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <button type="submit" class="btn btn-primary btn-submit-fix">Đặt hàng</button>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <button type="submit" name="payment" value="2" class="btn btn-primary btn-submit-fix">Thanh toán online</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--SHIPPING METHOD END-->
                </div>

            </form>
        </div>
        <div class="row cart-footer">

        </div>
    </div>
    <br>
@stop
