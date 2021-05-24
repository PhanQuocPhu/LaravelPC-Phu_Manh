<style>
    #edit {
        font-size: 12px;
    }

    #delete {
        font-size: 12px;
    }

</style>

<hr class="sidebar-divider my-0"> <br>
<div class="col-sm-12">
    <form class="form-inline">
        <input type="text" class="form-control my-1 mr-sm-2" name="name" placeholder="Tên sản phẩm...."
            value="{{ \Request::get('name') }}">
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="cate">
            @if (@isset($categories))
                <option class="selected" value="">All</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ \Request::get('cate') == $category->id ? "selected='selected'" : '' }}>
                        {{ $category->c_name }}</option>
                @endforeach
            @endif
        </select>
        <div class="form-group">

        </div>
        <button type="submit" class="btn btn-primary my-1 mr-sm-2"><i class="fas fa-search"></i></button>
    </form>
</div>
<br>
<hr class="sidebar-divider my-0"> <br>


<h3> <strong> Quản lý đơn hàng <a class="btn btn-success" href="{{ route('admin.get.create.product') }}"
            style="float: right;"><i class="far fa-plus-square"></i> Thêm mới</a> </strong></h3>
<div id="Tr_Data">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Tổng giá trị</th>
                    <th scope="col">Status</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($transactions))
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->id }}</td>
                            <td>
                                {{ isset($transaction->user->name) ? $transaction->user->name : '[N/A]' }}
                            </td>
                            <td>
                                {{ $transaction->tr_address }}
                            </td>
                            <td>
                                {{ $transaction->tr_phone }}
                            </td>
                            <td>
                                {{ number_format($transaction->tr_total, 0, '.', '.') }} vnđ
                            </td>
                            <td>
                                @if ($transaction->tr_status == 1)
                                    <a class="badge badge-success" href="#" id="tr_status"> Đã xử lý</a>
                                @else
                                    <a class="badge badge-secondary "
                                        href="{{ route('admin.get.active.transaction', $transaction->id) }}"
                                        id="tr_status"> Đang chờ</a>
                                @endif
                            </td>
                            <td>
                                <a style="padding: 5px 10px" class="btn btn-outline-danger" id="delete"
                                    href="{{ route('admin.get.action.product', ['delete', $transaction->id]) }}"><i
                                        class="far fa-trash-alt text-danger"></i> Delete</a>

                                <a style="padding: 5px 10px" class="btn btn-outline-primary js_order_item" id="edit"
                                    data-toggle="modal" data-target="#ModalOrder" data-id="{{ $transaction->id }}"
                                    href="{{ route('admin.get.view.order', $transaction->id) }}"><i
                                        class="far fa-eye text-primary"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
@include('admin::components.modalOrder')

<script>
    $(function() {
        console.log("ready!");
        $(".js_order_item").click(function(event) {
            let $this = $(this);
            let url = $this.attr('href');
            let md = $this.attr('data-id');
            $("#md_content").html('');
            $("#trid").text(md);
            $.ajax({
                url: url,
            }).done(function(result) {
                /* console.log(result); */
                if (result) {
                    $("#md_content").append(result);
                }
            });
        });
    })

</script>
