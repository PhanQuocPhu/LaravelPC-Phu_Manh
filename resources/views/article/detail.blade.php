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
            width: 240px;
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

        .quick-link {
            text-align: left;
            font-size: 14px;
            border-bottom: 1px dotted #ddd;
            border-top: 1px dotted #ddd;
            margin-bottom: 10px;
        }

        .quick-link ul {
            margin: 10px 0;
            padding-left: 2.14285714em;
        }



        .quick-link ul li::before {
            content: '\0095';
            display: inline-block;
            color: red;
            padding: 0 6px 0 0;
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
                            <li class="home">
                                <a href="{{ route('get.list.article') }}">Tin tức</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span> {{ $articleDetail->a_name }} </span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <div class="container">
        <h1 style="color: black"> {{ $articleDetail->a_name }} </h1>
        <div class="row">
            <div class="col-md-8">
                <strong>{{ $articleDetail->a_description }}</strong>
                <div class="quick-link" style="font-family: Helvetica Neue,Helvetica,Roboto,Arial,sans-serif !important;">
                    <ul>
                        @foreach ($articles as $articleHot)
                            <li style="margin-bottom: .5em;">
                                <a href="{{ route('get.detail.article', [$articleHot->a_slug, $articleHot->id]) }}"
                                    style="color: #f70d28; text-decoration: none;">
                                    {{ $articleHot->a_name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                {!! $articleDetail->a_content !!}
            </div>
            <div class="col-md-4">
                RIGHT
            </div>
        </div>
    </div>

@stop
