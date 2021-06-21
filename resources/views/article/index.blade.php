@extends('layouts.app')
@section('content')
    <style>
        .Ar-new-head {
            background-color: #dd3333;
            color: white;
            font-family: Helvetica Neue, Helvetica, Roboto, Arial, sans-serif !important;
        }

        .Ar-new-tittle {
            line-height: 36px;
            padding: 0 15px;
            font-size: 16px;
            font-weight: 700;
        }

        .Ar-new-content .Post-img {
            width: 245px;
            height: 150px;

        }

        .ar-Ar-new-content-img {
            margin-right: 30px;
        }

        .Post {
            margin-right: 0;
            margin-left: 0;
            margin-bottom: 30px;
        }

        .Ar-new-content-contain h3 {
            font-size: 22px;
            font-weight: 700;
            line-height: 1.4em;
            margin: 0 0 5px;
        }
        }

    </style>

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
                            <li class="category3"><span>Tin Tức</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @include('components.article')
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
    </div>
@stop
