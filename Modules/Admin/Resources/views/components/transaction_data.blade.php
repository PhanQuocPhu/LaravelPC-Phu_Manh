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
            {{ $transaction->created_at->format('d-m-y') }}
        </td>
        <td>
            <div class="btn-group">
                <a href="#"
                    class="badge {{ $transaction->getStatus($transaction->tr_status)['class'] }} "
                    data-toggle="{{ $transaction->getStatus($transaction->tr_status)['toggle'] }}"
                    aria-haspopup="true" aria-expanded="false">
                    {{ $transaction->getStatus($transaction->tr_status)['name'] }}
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('admin.get.action.transaction', ['done', $transaction->id]) }}">Đã xử lý</a>
                    <a class="dropdown-item" href="{{ route('admin.get.action.transaction', ['shipping', $transaction->id]) }}">Đang giao hàng</a>
                </div>
            </div>
            {{-- @if ($transaction->tr_status == 1)
                <a class="badge badge-success" href="#" id="tr_status"> Đã xử lý</a>
            @else
                <a class="badge badge-secondary "
                    href="{{ route('admin.get.active.transaction', $transaction->id) }}"
                    id="tr_status"> Đang chờ</a>
            @endif --}}
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

<script>
    $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   /* $('.del_product').click(function(event) {
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
   }); */

   $('.status_transaction').click(function(event) {
       event.preventDefault()
       let $this = $(this);
       let url = $this.attr('href');
       $.ajax({
           url: url,
           method: 'POST',
           success: function(response) {
               $('#tb_content').html(response);
           }
       });
   });


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

