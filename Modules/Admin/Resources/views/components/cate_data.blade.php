@if (isset($categories))
    @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->c_name }}</td>
            <td> <img src="{{ pare_url_file($category->c_icon) }}" alt="" class="img img-responsive" style="height: 20px; width:20px"></td>
            <td>{{ $category->c_title_seo }}</td>
            <td>
                <a class="badge {{ $category->getHome($category->c_home)['class'] }} status_cate"
                    href="{{ route('admin.get.action.category.ajax', ['home', $category->id]) }}">{{ $category->getHome($category->c_home)['name'] }}
                </a>
            </td>
            <td>
                <a class="badge {{ $category->getStatus($category->c_active)['class'] }} status_cate"
                    href="{{ route('admin.get.action.category.ajax', ['active', $category->id]) }}">{{ $category->getStatus($category->c_active)['name'] }}
                </a>
            </td>
            <td>
                {{-- Edit --}}
                <a style="padding: 5px 10px" class="btn btn-outline-primary" id="edit"
                    href="{{ route('admin.get.edit.category', $category->id) }}}}"><i
                        class="far fa-edit text-primary"></i> Edit</a>
                {{-- Xóa --}}
                <a style="padding: 5px 10px" class="btn btn-outline-danger del_item" id="delete"
                    href="{{ route('admin.get.action.category.ajax', ['delete', $category->id]) }}"><i
                        class="far fa-trash-alt text-danger"></i> Delete</a>
            </td>
        </tr>
    @endforeach
@endif
