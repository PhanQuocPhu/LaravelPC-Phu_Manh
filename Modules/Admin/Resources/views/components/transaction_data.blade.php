@if (isset($transactions))
    @foreach ($transactions as $transaction)
        <tr>
            <td>{{ $transaction->id }}</td>
            <td>
                <ul>
                    <li>
                        <Strong>Tên khách hàng: </Strong>
                        {{ isset($transaction->user->name) ? $transaction->user->name : '[N/A]' }}
                    </li>
                </ul>
                <ul>
                    <li><Strong>Địa chỉ: </Strong>{{ $transaction->tr_address }}</li>
                </ul>
                <ul>
                    <li><Strong>Số điện thoại: </Strong>{{ $transaction->tr_phone }}</li>
                </ul>
                <ul>
                    <li><Strong>Ngày đặt hàng: </Strong>
                        {{ $transaction->created_at->format('d-m-y') }}</li>
                </ul>
            </td>
            <td>
                {{ number_format($transaction->tr_total, 0, '.', '.') }} vnđ
            </td>
            <td>
                <div class="btn-group">
                    <a href="#" class="badge {{ $transaction->getStatus($transaction->tr_status)['class'] }} "
                        data-toggle="{{ $transaction->getStatus($transaction->tr_status)['toggle'] }}"
                        aria-haspopup="true" aria-expanded="false">
                        {{ $transaction->getStatus($transaction->tr_status)['name'] }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item status_transaction"
                            href="{{ route('admin.get.action.transaction', ['done', $transaction->id]) }}">Đã
                            xử lý</a>
                        <a class="dropdown-item status_transaction"
                            href="{{ route('admin.get.action.transaction', ['shipping', $transaction->id]) }}">Đang
                            giao hàng</a>
                    </div>
                </div>
            </td>
            <td>
                <a class="badge {{ $transaction->getPayment($transaction->tr_payment)['class'] }} status_paid"
                    href="{{ route('admin.get.action.transaction', ['paid', $transaction->id]) }}">{{ $transaction->getPayment($transaction->tr_payment)['name'] }}
                </a>
            </td>
            <td>
                <div>
                    <a style="padding: 5px 10px" class="btn btn-outline-danger del_item" id="delete"
                        href="{{ route('admin.get.action.transaction', ['delete', $transaction->id]) }}"><i
                            class="far fa-trash-alt text-danger"></i> </a>

                    <a style="padding: 5px 10px" class="btn btn-outline-primary js_order_item" id="edit"
                        data-toggle="modal" data-target="#ModalOrder" data-id="{{ $transaction->id }}"
                        href="{{ route('admin.get.view.order', $transaction->id) }}"
                        submit="{{ route('admin.update.transaction.ajax', [$transaction->id]) }}"><i
                            class="far fa-eye text-primary"></i></a>
                </div>

            </td>
        </tr>
    @endforeach
@endif
