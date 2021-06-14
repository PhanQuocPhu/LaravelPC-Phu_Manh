@if (isset($slidebanners))
    @foreach ($slidebanners as $slidebanner)
        <tr>
            <td>{{ $slidebanner->id }}</td>
            <td> <img src="{{ pare_url_file($slidebanner->sb_img) }}" alt="" class="img img-fluid"
                    style="height: 184px; width:368px"></td>

            <td>
                <a class="badge {{ $slidebanner->getStatus($slidebanner->sb_status)['class'] }} status_sb"
                    href="{{ route('admin.get.action.slidebanner.ajax', ['active', $slidebanner->id]) }}">{{ $slidebanner->getStatus($slidebanner->sb_status)['name'] }}
                </a>
            </td>

            <td>
                {{-- Edit --}}
                <a style="padding: 5px 10px" class="btn btn-outline-primary" id="edit"
                    href="{{ route('admin.get.edit.slidebanner', $slidebanner->id) }}"><i
                        class="far fa-edit text-primary"></i> Edit</a>
                {{-- Xóa --}}
                <a style="padding: 5px 10px" class="btn btn-outline-danger del_item" id="delete"
                    href="{{ route('admin.get.action.slidebanner.ajax', ['delete', $slidebanner->id]) }}"><i
                        class="far fa-trash-alt text-danger"></i> Delete</a>
            </td>
        </tr>
    @endforeach
@endif
