@extends('admin::layouts.master')

@section('content')
    <style>
        @import 'https://code.highcharts.com/css/highcharts.css';

        .highcharts-pie-series .highcharts-point {
            stroke: #EDE;
            stroke-width: 2px;
        }

        .highcharts-pie-series .highcharts-data-label-connector {
            stroke: silver;
            stroke-dasharray: 2, 2;
            stroke-width: 2px;
        }

        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 320px;
            max-width: 600px;
            margin: 1em auto;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #EBEBEB;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
            padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }

        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }

    </style>
    <div class="container-fluid">

        <!-- Page Heading -->


        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Thống kê</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Tổng hợp thông tin theo card -->
        <div class="row">

            <!-- Doanh thu ngày Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Doanh thu (Ngày)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ number_format($moneyDay, 0, '.', '.') }} đ</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Doanh thu tháng Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Doanh thu (Tháng)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ number_format($moneyMonth, 0, '.', '.') }} đ</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Đơn hàng chưa xử lý Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Đơn hàng chưa xử lý
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $notdoneTrans }}</div>
                                    </div>
                                    {{-- <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div> --}}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tin nhắn đang chờ -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Tin nhắn đang chờ</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $notdoneCont }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End -->

        <div class="row">

            <!-- Thống kê doanh thu theo ngày -->
            <div class="col-xl-8 col-lg-8">
                <div id="container1" data-list-date={{ $listDate }} data-money={{ $arrDailyMoney }}>
                    <div id="line_chart_content"></div>
                </div>

            </div>
            <div class="col-xl-4 col-lg-4">
                <div id="container2" data="{{ $statusTrans }}">
                    <div id="pie_chart_content">

                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
@section('script')
    <script>
        //Data cho line chart
        let listDay = $('#container1').attr('data-list-date');
        listDay = JSON.parse(listDay);
        let listMoney = $('#container1').attr('data-money');
        listMoney = JSON.parse(listMoney);

        //Data cho pie chart
        let data = $("#container2").attr('data');
        data = JSON.parse(data);
        console.log(data);

        Highcharts.chart('line_chart_content', {
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Thống kê doanh thu các ngày trong tháng'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: listDay
            },
            yAxis: {
                title: {
                    text: 'Doanh Thu'
                },
                labels: {
                    formatter: function() {
                        return this.value + 'vnđ';
                    }
                }
            },
            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                spline: {
                    marker: {
                        radius: 4,
                        lineColor: '#666666',
                        lineWidth: 1
                    }
                }
            },
            series: [{
                name: '',
                marker: {
                    symbol: 'square'
                },
                data: listMoney
            }]
        });
        Highcharts.chart('pie_chart_content', {

            chart: {
                styledMode: true
            },

            title: {
                text: 'Trạng thái đơn hàng'
            },

            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },

            series: [{
                type: 'pie',
                allowPointSelect: true,
                keys: ['name', 'y', 'selected', 'sliced'],
                data: data,
                showInLegend: true
            }]
        });
    </script>
@endsection
