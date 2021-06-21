@if ($orders)
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($orders))
                    <?php $i = 1; ?>
                    @foreach ($orders as $key => $order)
                        <tr>
                            <td>#{{ $i }}</td>
                            <td>
                                <a href="{{ route('get.detail.product', [$order->product->pro_slug, $order->or_product_id]) }}"
                                    target="_blank">{{ isset($order->product->pro_name) ? $order->product->pro_name : '' }}</a>
                            </td>
                            <td>
                                <img src="{{ isset($order->product->pro_avatar) ? pare_url_file($order->product->pro_avatar) : '' }}"
                                    alt="" class="img img-responsive" style="height: 80px; width:80px">
                            </td>
                            <td>{{ number_format($order->or_price, 0, '.', '.') }}đ</td>
                            <td>{{ $order->or_qty }}</td>
                            <td>{{ number_format($order->or_price * $order->or_qty, 0, '.', '.') }}đ</td>
                        </tr>
                        <?php $i++; ?>
                    @endforeach

                @endif
            </tbody>
        </table>
    </div>
@endif
<div class="row">
    <div class="col-md-6 form-group row">
        <div class="col-md-2">
            <label for="tr_address" class="form-group"> Địa chỉ:</label>
        </div>
        <div class="col-md-10">
            <input type="text" class="form-control" id="tr_address" name="tr_address"
                value="{{ $transnote->tr_address }}" readonly>
        </div>
    </div>
    <div class="col-md-6 form-group row">
        <div class="col-md-2">
            <label for="tr_phone"> Số điện thoại:</label>
        </div>
        <div class="col-md-10">
            <input type="number" min="0" class="form-control" id="tr_phone" name="tr_phone"
                value="{{ $transnote->tr_phone }}" readonly>
        </div>
    </div>
</div>
<div class="form-group note">
    <h5>Ghi chú:</h5>
    <textarea class="form-control" id="tr_note" rows="3" readonly>{{ $transnote->tr_note }}</textarea>
</div>
