@if ($products)
    <?php $i = 1; ?>
    @foreach ($products as $key => $product)
        <tr>
            <td>#{{ $i }}</td>
            <td>
                {{ $product->name }}
            </td>
            <td>
                <img src="{{ pare_url_file($product->options->avatar) }}" alt="" class="img img-responsive"
                    style="height: 80px; width:80px">
            </td>
            <td>{{ number_format($product->price, 0, '.', '.') }}</td>
            <td>{{ $product->qty }}</td>
            <td>{{ number_format($product->qty * $product->price, 0, '.', '.') }}</td>
            <td>
                <a style="padding: 5px 10px" class="border-left delete-cart"
                    href="{{-- {{ route('delete.shopping.cart', $key) }} --}} {{ route('delete.shopping.cart.ajax', $key) }}"><i
                        class="far fa-trash-alt"></i></a>
            </td>
        </tr>
        <?php $i++; ?>
    @endforeach
    <tr>
        <td></td>
        <td colspan="4">
            <h5>Tổng giá trị đơn hàng:</h5>
        </td>
        <td colspan="2">
            <h5>{{ Cart::subtotal() }}</h5>
        </td>
    </tr>
@else
    <div class="alert alert-warning" role="alert">
        This is a warning alert—check it out!
    </div>
@endif

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.delete-cart').click(function(event) {
        event.preventDefault()
        let $this = $(this);
        let url = $this.attr('href');
        $.ajax({
            url: url,
            method: 'POST',
            success: function(response) {
                alert("Đã xóa sản phẩm khỏi giỏ hàng");
                $('#cart-content').html(response);
            }
        });
    });

</script>