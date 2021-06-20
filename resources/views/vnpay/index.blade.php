<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tạo mới đơn hàng</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vnpay_php/assets/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('vnpay_php/assets/jumbotron-narrow.css') }}" rel="stylesheet">
    <link href="https://sandbox.vnpayment.vn/paymentv2/Styles/css/Styles.min.css?u=190411" rel="stylesheet"
        type="text/css">
    <link href="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.css" rel="stylesheet" />
</head>

<body>

    <div class="container">
        <div class="header clearfix text-center">
            <h3 class="text-muted">Chọn ngân hàng</h3>
        </div>
        <div class="table-responsive">
            <form action="{{ route('payment.online') }}" id="create_form" method="post">
                @csrf
                <div class="collapse-wrap">
                    <ul class="list_cart-2 clearfix">
                        <li>
                            <label for="NCB">
                                <input type="submit" value="NCB" id="NCB" name="bank_code"><img
                                    src="https://sandbox.vnpayment.vn/paymentv2/images/bank/ncb_logo.png" width="200"
                                    height="40" alt="NCB">
                            </label>
                        </li>
                        <li>
                            <label for="VIETCOMBANK">
                                <input type="submit" value="VIETCOMBANK" id="VIETCOMBANK" name="paymethod"><img
                                    src="https://sandbox.vnpayment.vn/paymentv2/images/bank/vietcombank_logo.png"
                                    width="200" height="40" alt="VIETCOMBANK">
                            </label>
                        </li>
                    </ul>
                </div>
                <button type="button" class="btn btn-default" onclick="history.back()">Quay lại</button>

            </form>
        </div>
        <p>
            &nbsp;
        </p>
        <footer class="footer">
            <p>&copy; VNPAY 2015</p>
        </footer>
    </div>

</body>

<footer>
    <script src="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.js"></script>
    <script src="{{ asset('vnpay_php/assets/jquery-1.11.3.min.js') }}"></script>
    <script type="text/javascript">
    </script>
</footer>

</html>
