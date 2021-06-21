<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PcPM - Thanh toán Online</title>
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
                                <input type="submit" value="VIETCOMBANK" id="VIETCOMBANK" name="bank_code"><img
                                    src="https://sandbox.vnpayment.vn/paymentv2/images/bank/vietcombank_logo.png"
                                    width="200" height="40" alt="VIETCOMBANK">
                            </label>
                        </li>
                        <li>
                            <label for="VIETINBANK">
                                <input type="submit" value="VIETINBANK" id="VIETINBANK" name="bank_code"><img
                                    src="https://sandbox.vnpayment.vn/paymentv2/images/bank/vietinbank_logo.png"
                                    width="200" height="40" alt="VIETINBANK">
                            </label>
                        </li>
                        <li>
                            <label for="BIDV">
                                <input type="submit" value="BIDV" id="BIDV" name="bank_code"><img
                                    src="https://sandbox.vnpayment.vn/paymentv2/images/bank/bidv_logo.png" width="200"
                                    height="40" alt="BIDV">
                            </label>
                        </li>
                        <li>
                            <label for="AGRIBANK">
                                <input type="submit" value="AGRIBANK" id="AGRIBANK" name="bank_code"><img
                                    src="https://sandbox.vnpayment.vn/paymentv2/images/bank/agribank_logo.png"
                                    width="200" height="40" alt="AGRIBANK">
                            </label>
                        </li>

                        <li>
                            <label for="SACOMBANK">
                                <input type="submit" value="SACOMBANK" id="SACOMBANK" name="bank_code"><img
                                    src="https://sandbox.vnpayment.vn/paymentv2/images/bank/sacombank_logo.png"
                                    width="200" height="40" alt="SACOMBANK">
                            </label>
                        </li>
                        <li>
                            <label for="TECHCOMBANK">
                                <input type="submit" value="TECHCOMBANK" id="TECHCOMBANK" name="bank_code"><img
                                    src="https://sandbox.vnpayment.vn/paymentv2/images/bank/techcombank_logo.png"
                                    width="200" height="40" alt="TECHCOMBANK">
                            </label>
                        </li>
                        <li>
                            <label for="MBBANKHP">
                                <input type="submit" value="MBBANKHP" id="MBBANKHP" name="bank_code"><img
                                    src="https://sandbox.vnpayment.vn/paymentv2/images/bank/mbb_logo.png" width="200"
                                    height="40" alt="MBBANKHP">
                            </label>
                        </li>
                        <li>
                            <label for="MBBANK">
                                <input type="submit" value="MBBANK" id="MBBANK" name="bank_code"><img
                                    src="https://sandbox.vnpayment.vn/paymentv2/images/bank/mbb_logo.png" width="200"
                                    height="40" alt="MBBANK">
                            </label>
                        </li>
                        <li>
                            <label for="ACB">
                                <input type="submit" value="ACB" id="ACB" name="bank_code"><img
                                    src="https://sandbox.vnpayment.vn/paymentv2/images/bank/acb_logo.png" width="200"
                                    height="40" alt="ACB">
                            </label>
                        </li>
                        <li>
                            <label for="VPBANK">
                                <input type="submit" value="VPBANK" id="VPBANK" name="bank_code"><img
                                    src="https://sandbox.vnpayment.vn/paymentv2/images/bank/vpbank_logo.png" width="200"
                                    height="40" alt="VPBANK">
                            </label>
                        </li>
                        <li>
                            <label for="SHB">
                                <input type="submit" value="SHB" id="SHB" name="paymethod"><img
                                    src="https://sandbox.vnpayment.vn/paymentv2/images/bank/shb_logo.png" width="200"
                                    height="40" alt="SHB">
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-default" onclick="history.back()">Quay lại</button>
                </div>


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
