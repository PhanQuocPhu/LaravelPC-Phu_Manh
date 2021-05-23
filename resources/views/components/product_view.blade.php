<div style="position: relative">
    <h2 class="product-group-tittle">Sản phẩm vừa xem</h2>
    <a class="products-hot-view-all" href="#">
        Xem tất cả <i class="fa fa-chevron-right"></i>
    </a>
</div>
<div class="products-group">
    <div class="module-products row">
        @if (isset($products))
            @foreach ($products as $product)
                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 padding-none col-fix20">
                    <div class="product-row">
                        <a href="{{ route('get.detail.product', [$product->pro_slug, $product->id]) }}"></a>
                        {{-- Hình ảnh sản phẩm start --}}
                        <div class="product-row-img">
                            @if ($product->pro_number == 0)
                                <span
                                    style="position: absolute; background:#e91e63; color: white; border-radius:5px; white-space:nowrap; font-size:11px; padding: 0 5px; margin-left:2px">Tạm
                                    hết hàng
                                </span>
                            @endif
                            <a href="{{ route('get.detail.product', [$product->pro_slug, $product->id]) }}">
                                <img class="product-row-thumbnail"
                                    src="{{ asset(pare_url_file($product->pro_avatar)) }}" alt="">
                            </a>
                            <div class="product-row-price-hover">
                                <a href="{{ route('get.detail.product', [$product->pro_slug, $product->id]) }}">
                                    <div class="product-row-note pull-left">Click để xem chi tiết</div>
                                </a>
                                <a href="{{-- {{ route('add.shopping.cart', $product->id) }} --}} {{ route('add.shopping.cart.ajax', $product->id) }}"
                                    class="product-row-btnbuy pull-right add-to-cart"><i
                                        class=" fas fa-cart-plus "></i></a>
                            </div>
                        </div>
                        {{-- Hình ảnh sản phẩm end --}}
                        {{-- Chi tiết sản phẩm start --}}
                        <h2 class="product-row-name">{{ $product->pro_name }}</h2>
                        <div class="product-row-info">
                            <div class="product-row-price pull-left">
                                @if ($product->pro_sale)
                                    <del>{{ number_format($product->pro_price, 0, '.', '.') }}₫</del>
                                @else
                                    <del> </del>
                                @endif
                                <br>
                                <span
                                    class="product-row-sale">{{ number_format(($product->pro_price * (100 - $product->pro_sale)) / 100, 0, '.', '.') }}₫
                                </span>
                            </div>
                            <!--<span class="product-row-buyer pull-right"><i class="fa fa-user"></i><br/>185</span>-->
                            <div class="clearfix"></div>
                            @if ($product->pro_sale)
                                <div class="new-product-percent">-{{ $product->pro_sale }}%</div>
                            @endif

                        </div>
                        {{-- Chi tiết sản phẩm end --}}
                    </div>
                </div>
            @endforeach
        @endif

    </div>
</div>
<script>
    $('.add-to-cart').click(function(event) {
            event.preventDefault()
            let $this = $(this);
            let id = $this.attr('data-id');
            let url = $this.attr('href');
            $.ajax({
                url: url,
                method: 'POST',
                success: function(response) {
                    alert("Thêm sản phẩm thành công")
                    $("#cart-count").html(response);
                }
            });
        });
</script>