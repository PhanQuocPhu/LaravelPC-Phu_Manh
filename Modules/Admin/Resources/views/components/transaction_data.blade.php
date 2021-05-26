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
                    <a href="#" class="badge {{ $transaction->getStatus($transaction->tr_status)['class'] }} "
                        data-toggle="{{ $transaction->getStatus($transaction->tr_status)['toggle'] }}"
                        aria-haspopup="true" aria-expanded="false">
                        {{ $transaction->getStatus($transaction->tr_status)['name'] }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item"
                            href="{{ route('admin.get.action.transaction', ['done', $transaction->id]) }}">Đã xử
                            lý</a>
                        <a class="dropdown-item"
                            href="{{ route('admin.get.action.transaction', ['shipping', $transaction->id]) }}">Đang
                            giao hàng</a>
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
                <a style="padding: 5px 10px" class="btn btn-outline-danger del_item" id="delete" href="{{ route('admin.get.action.transaction', ['delete', $transaction->id]) }}"><i
                        class="far fa-trash-alt text-danger"></i> Delete</a>

                <a style="padding: 5px 10px" class="btn btn-outline-primary js_order_item" id="edit" data-toggle="modal"
                    data-target="#ModalOrder" data-id="{{ $transaction->id }}"
                    href="{{ route('admin.get.view.order', $transaction->id) }}"><i
                        class="far fa-eye text-primary"></i></a>
            </td>
        </tr>
    @endforeach
@endif
