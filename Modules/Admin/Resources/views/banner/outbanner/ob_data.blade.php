@if (isset($outbanners))
    @foreach ($outbanners as $outbanner)
        <tr>
            <td>{{ $outbanner->id }}</td>
            <td> <img src="{{ pare_url_file($outbanner->ob_img) }}" alt="" class="img img-fluid"
                    style="height: 184px; width:368px"></td>

            <td>
                <a class="badge {{ $outbanner->getStatus($outbanner->ob_status)['class'] }} status_ob"
                    href="{{ route('admin.get.action.outbanner.ajax', ['active', $outbanner->id]) }}">{{ $outbanner->getStatus($outbanner->ob_status)['name'] }}
                </a>
            </td>

            <td>
                {{-- Edit --}}
                <a style="padding: 5px 10px" class="btn btn-outline-primary" id="edit"
                    href="{{ route('admin.get.edit.outbanner', $outbanner->id) }}"><i
                        class="far fa-edit text-primary"></i> Edit</a>
                {{-- Xóa --}}
                <a style="padding: 5px 10px" class="btn btn-outline-danger del_item" id="delete"
                    href="{{ route('admin.get.action.outbanner.ajax', ['delete', $outbanner->id]) }}"><i
                        class="far fa-trash-alt text-danger"></i> Delete</a>
            </td>
        </tr>
    @endforeach
@endif
