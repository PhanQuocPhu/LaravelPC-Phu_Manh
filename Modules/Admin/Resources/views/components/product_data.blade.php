@if (isset($products))
    @foreach ($products as $product)
        <?php
        $age = 0;
        if ($product->pro_total_rating) {
        $age = round($product->pro_total_number / $product->pro_total_rating, 2);
        }
        ?>
        <tr>
            <td>{{ $product->id }}</td>
            <td>
                {{ $product->pro_name }}
                <ul>
                    <li><span>{{ number_format($product->pro_price, 0, '.', ',') }} vnđ</span></li>
                    <li><span>{{ $product->pro_sale }} (%)</span></li>
                    <li> <span>Đánh giá:</span>
                        <span>
                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fa fa-star {{ $i <= $age ? 'active' : '' }}" style="color: #999"></i>
                            @endfor
                        </span>
                        <span> {{ $age }}</span>
                    </li>
                    <li><span>Số lượng: </span> <span>{{ $product->pro_number }}</span></li>
                </ul>
            </td>
            <td>{{ isset($product->category->c_name) ? $product->category->c_name : '[N/A]' }}</td>
            <td>
                <img src="{{ pare_url_file($product->pro_avatar) }}" alt="" class="img img-responsive"
                    style="height: 80px; width:80px">
            </td>
            <td>
                <a class="badge {{ $product->getStatus($product->pro_active)['class'] }} status_product"
                    href="{{ route('admin.get.action.product.ajax', ['active', $product->id]) }}">{{ $product->getStatus($product->pro_active)['name'] }}</a>
            </td>
            <td>
                <a class="badge {{ $product->getHot($product->pro_hot)['class'] }} status_product"
                    href="{{ route('admin.get.action.product.ajax', ['hot', $product->id]) }}">{{ $product->getHot($product->pro_hot)['name'] }}
                </a>
            </td>
            <td>
                <a style="padding: 5px 10px" class="btn btn-outline-primary" id="edit"
                    href="{{ route('admin.get.edit.product', $product->id) }}"><i
                        class="far fa-edit text-primary"></i> Edit</a>
                <a style="padding: 5px 10px" class="btn btn-outline-danger del_product" id="delete"
                    href="{{-- {{ route('admin.get.action.product', ['delete', $product->id]) }} --}} {{ route('admin.get.action.product.ajax', ['delete', $product->id]) }}"><i
                        class="far fa-trash-alt text-danger"></i> Delete</a>
            </td>
        </tr>
    @endforeach
@endif
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.del_product').click(function(event) {
        event.preventDefault()
        let $this = $(this);
        let url = $this.attr('href');
        $.ajax({
            url: url,
            method: 'POST',
            success: function(response) {
                alert("Đã xóa sản phẩm");
                $('#tb_content').html(response);
            }
        });
    });
    $('.status_product').click(function(event) {
        event.preventDefault()
        let $this = $(this);
        let url = $this.attr('href');
        $.ajax({
            url: url,
            method: 'POST',
            success: function(response) {
                alert("Thay đổi trạng thái sản phẩm thành công");
                $('#tb_content').html(response);
            }
        });
    });

</script>
