<div class="modal fade" id="ModalOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <form class="modal-content" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng - Mã đơn <b>#</b><b id="trid"></b>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="md_content">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close_modal"
                    href="{{ route('admin.get.list.transaction') }}" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary update_item"
                    href="{{ route('admin.update.transaction.ajax', [$transaction->id]) }}">Save changes</button>
            </div>
        </form>
    </div>
</div>
