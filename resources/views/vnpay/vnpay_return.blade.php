<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thông tin thanh toán</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
</head>
<style>
    body {
        font-family: Helvetica Neue, sans-serif;
        line-height: 1.42857143em;
        font-size: 14px;
    }

    .product-thumbnail {
        width: 50px;
        height: 50px;
        border-radius: 8px;
        background: #fff;
        position: relative;
    }

    .product-product__description {
        padding-left: 1em;
        font-weight: 500;
        color: #333;
    }

    .product__description__name,
    .product__description__property {
        display: block;
    }

    .product-table tbody th,
    .stock-table tbody th {
        padding-left: 1em;
        font-weight: 500;
        color: #333;
        padding-top: 0;
        padding-bottom: 0;
    }

    .product-thumbnail__image {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        max-width: 100%;
        max-height: 100%;
        margin: auto;
    }

    .product-thumbnail__quantity {
        color: #FFFFFF;
        background-color: #008744;
        font-size: .78em;
        white-space: nowrap;
        padding: 0 .62em;
        border-radius: 2em;
        color: #fff;
        position: absolute;
        right: -.9em;
        top: -.55em;
        z-index: 3;
        box-sizing: border-box;
        min-width: 1.75em;
        height: 1.75em;
        text-align: center;
        line-height: 1.75em;
    }

    h5 {
        font-weight: bold;
    }

    .thanks {
        font-weight: bolder;
    }

</style>

<body>
    <div class="container mt-4">
        <div class="header">
            <a href="/" class="hidden-xsx logo-big">
                <img src="http://127.0.0.1:8000/img/logo.gif" alt="">
            </a>
        </div>
        <br>
        <div class="main">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-2 text-center">
                            <img src="http://127.0.0.1:8000/img/Green-Check-Mark-PNG-Image.png" class="img-fluid" alt=""
                                style="width: 72px; height: 72px;">
                        </div>
                        <div class="col-md-10" style="font-size: 14px;">
                            <h5 class="thanks">Cảm ơn bạn đã mua hàng</h5>
                            <p>Một email xác nhận đã được gửi tới phanquocphu1998@gmail.com. <br> Xin vui lòng kiểm tra
                                email của bạn</p>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Thông tin mua hàng</h5>
                            <p>{{ get_data_user('web', 'name') }}</p>
                            <p>{{ get_data_user('web', 'email') }}</p>
                            <p>{{ get_data_user('web', 'phone') }}</p>
                        </div>
                        <div class="col-sm-6">
                            <h5>Địa chỉ thanh toán</h5>
                            <p>{{ get_data_user('web', 'email') }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Thông tin hóa đơn</h5>
                            <p>Mã đơn hàng: {{ $vnpayData['vnp_TxnRef'] }}<?php echo
                                $_GET['vnp_TxnRef']; ?>
                            </p>
                            <p>Mã GD Tại VNPAY: {{ $vnpayData['vnp_TransactionNo'] }}</p>
                            <p>Mã Ngân hàng: {{ $vnpayData['vnp_BankCode'] }}</p>
                            <p>Thời gian thanh toán: {{ $vnpayData['vnp_PayDate'] }}</p>
                        </div>
                        <div class="col-sm-6">
                            <h5>Phương thức thanh toán</h5>
                            <p>Thanh toán Online</p>
                            <p>Kết quả giao dịch: Thành công</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-5">
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Đơn hàng #3333333</strong>
                            </li>
                            <li class="list-group-item">
                                <table class="product-table">
                                    <tbody>
                                        <tr class="product">
                                            <td class="product__image">
                                                <div class="product-thumbnail">
                                                    <div class="product-thumbnail__wrapper">
                                                        <img src="http://127.0.0.1:8000/img/Green-Check-Mark-PNG-Image.png"
                                                            alt="SSD Samsung PM871b 128GB 2.5-Inch SATA III MZ-7LN128C Cáp SATA III PC chính hãng"
                                                            class="product-thumbnail__image">

                                                    </div>
                                                    <span class="product-thumbnail__quantity unprintable">2</span>
                                                </div>
                                            </td>
                                            <th class="product__description">
                                                <span class="product__description__name">SSD Samsung PM871b 128GB
                                                    2.5-Inch SATA III MZ-7LN128C</span>
                                            </th>
                                            <td class="product__price">
                                                1.260.000₫
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h6>Tổng cộng: </h6>
                                    </div>
                                    <div class="col-sm-6 text-right ">
                                        <h4>1.260.000₫</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <button class="btn btn-success">
                Tiếp tục mua hàng
            </button>
        </div>

    </div>

</body>

<footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</footer>

</html>
