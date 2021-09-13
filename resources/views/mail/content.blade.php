<div
    style="font-family:&quot;Arial&quot;,Helvetica Neue,Helvetica,sans-serif;line-height:14pt;padding:20px 0px;font-size:14px;max-width:580px;margin:0 auto">
    <div class="adM">
    </div>
    <div style="padding:0 10px;margin-bottom:25px">
        <div class="adM">

        </div>
        <p>Xin chào {{ $data['user']->name }}</p>
        <p>Cảm ơn Anh/chị đã đặt hàng tại <strong>PCPM - Laravel</strong>!</p>
        <p>Đơn hàng của Anh/chị đã được tiếp nhận, chúng tôi sẽ nhanh chóng liên hệ với Anh/chị.</p>
    </div>
    <hr>
    <div style="padding:0 10px">

        <table style="width:100%;border-collapse:collapse;margin-top:20px">
            <thead>
                <tr>
                    <th style="text-align:left;width:50%;font-size:medium;padding:5px 0">Thông tin mua hàng</th>
                    <th style="text-align:left;width:50%;font-size:medium;padding:5px 0">Địa chỉ nhận hàng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="padding-right:15px">
                        <table style="width:100%">
                            <tbody>

                                <tr>
                                    <td>{{ $data['user']->name }}</td>
                                </tr>


                                <tr>
                                    <td style="word-break:break-word;word-wrap:break-word"><a
                                            href="mailto:{{ $data['user']->email }}"
                                            target="_blank">{{ $data['user']->email }}</a>
                                    </td>
                                </tr>


                                <tr>
                                    {{ $data['user']->phone }}
                                </tr>

                            </tbody>
                        </table>
                    </td>
                    <td>
                        <table style="width:100%">
                            <tbody>

                                <tr>
                                    <td>{{ $data['user']->name }}</td>
                                </tr>


                                <tr>
                                    <td style="word-break:break-word;word-wrap:break-word">
                                        {{ $data['user']->address }}
                                    </td>
                                </tr>

                                {{-- <tr>
                                <td style="word-break:break-word;word-wrap:break-word">

                                    Phường 4,


                                    Quận 8,


                                    TP Hồ Chí Minh

                                </td>
                            </tr> --}}

                                <tr>
                                    <td>{{ $data['user']->phone }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        {{-- <table style="width:100%;border-collapse:collapse;margin-top:20px">
        <thead>
            <tr>
                <th style="text-align:left;width:50%;font-size:medium;padding:5px 0">Phương thức thanh toán</th>
                <th style="text-align:left;width:50%;font-size:medium;padding:5px 0">Phương thức vận chuyển</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding-right:15px">Thanh toán khi giao hàng (COD)</td>
                <td>

                    ĐƠN HÀNG TRÊN 300.000đ<br>

                </td>
            </tr>
        </tbody>
    </table> --}}

    </div>
    <div style="margin-top:20px;padding:0 10px">
        <div style="padding-top:10px;font-size:medium"><strong>Thông tin đơn hàng</strong></div>
        <table style="width:100%;margin:10px 0">
            <tbody>
                <tr>
                    <td style="width:50%;padding-right:15px">Mã đơn hàng: #{{ $data['transactionId'] }}</td>
                    <td style="width:50%">Ngày đặt hàng: <?php echo date('F j, Y, g:i a'); ?></td>
                </tr>
            </tbody>
        </table>
        <ul style="padding-left:0;list-style-type:none;margin-bottom:0">
            @foreach ($data['products'] as $product)
                <li>
                    <table style="width:100%;border-bottom:1px solid #e4e9eb">
                        <tbody>
                            <tr>
                                <td style="width:100%;padding:25px 10px 0px 0" colspan="2">
                                    <div
                                        style="float:left;width:80px;height:80px;border:1px solid #ebeff2;overflow:hidden">

                                        <img style="max-width:100%;max-height:100%" src="http://127.0.0.1:8000{{ pare_url_file($product->options->avatar) }}" class="CToWUd">

                                    </div>
                                    <div style="margin-left:100px">
                                        <a href="" style="color:#357ebd;text-decoration:none" target="_blank">
                                            {{ $product->name }}</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:70%;padding:5px 0px 25px">
                                    <div style="margin-left:100px">
                                        {{ number_format($product->qty * $product->price, 0, '.', '.') }}đ <span style="margin-left:20px">{{ $product->qty!=0?'x'.$product->qty :'' }}</span>
                                    </div>
                                </td>
                                <td style="text-align:right;width:30%;padding:5px 0px 25px">
                                    {{ number_format($product->qty * $product->price, 0, '.', '.') }}đ</td>
                            </tr>
                        </tbody>
                    </table>
                </li>
            @endforeach
        </ul>
        <table style="width:100%;border-collapse:collapse;margin-bottom:50px;margin-top:10px">
            <tbody>
                <tr>
                    <td style="width:20%"></td>
                    <td style="width:80%">
                        <table style="width:100%;float:right">
                            <tbody>
                                <tr>
                                    <td style="padding-bottom:10px">Giảm giá:</td>
                                    <td style="font-weight:bold;text-align:right;padding-bottom:10px">
                                        -0 VND</td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom:10px">Giá trừ khuyến mãi:</td>
                                    <td style="font-weight:bold;text-align:right;padding-bottom:10px">
                                        {{ number_format(str_replace(',', '', $data['total']), 0, '.', '.') }}đ</td></td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom:10px">Phí vận chuyển:</td>
                                    <td style="font-weight:bold;text-align:right;padding-bottom:10px">
                                        0 VND</td>
                                </tr>
                                <tr style="border-top:1px solid #e5e9ec">
                                    <td style="padding-top:10px">Thành tiền</td>
                                    <td style="font-weight:bold;text-align:right;font-size:16px;padding-top:10px">
                                        {{ number_format(str_replace(',', '', $data['total']), 0, '.', '.') }}đ</td></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div style="clear:both"></div>

    <div style="padding:0 10px">

    </div>

    <div style="clear:both"></div>
    <div style="padding:0 10px">

        <p style="height:50px">
            <span style="float:left;margin-top:14px;margin-right:10px">Để kiểm tra trạng thái đơn hàng, Anh/chị vui
                lòng:</span><span style="margin-top:25px;float:left"><span
                    style="padding:14px 35px;background:#357ebd"><a href=""
                        style="font-size:16px;text-decoration:none;color:#fff" target="_blank" data-saferedirecturl="">
                        Đăng nhập vào tài khoản</a>
                </span></span>
        </p>

        <div style="clear:both"></div>
        <p style="margin:30px 0">Nếu Anh/chị có bất kỳ câu hỏi nào, xin liên hệ với chúng tôi tại <a
                href="mailto:16110180@student.hcmute.edu.vn" style="color:#357ebd"
                target="_blank">16110180@student.hcmute.edu.vn</a>
        </p>
        <p style="text-align:right"><i>Trân trọng,</i></p>
        <p style="text-align:right"><strong>Ban quản trị cửa hàng PCPM - PC Laravel</strong></p>
    </div>
</div>
