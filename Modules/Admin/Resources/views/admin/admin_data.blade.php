@if (isset($users))
    @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>
                {{ $user->name }}
            </td>
            <td>{{ $user->email }}</td>

            <td>{{ $user->phone }}</td>
            {{-- <td>
                                <img src="{{ pare_url_file($user->avatar) }}" alt="" class="img img-responsive"
                                    style="height: 80px; width:80px">
                            </td>
                            <td>
                                <a class="badge {{ $user->getStatus($user->active)['class'] }}"
                                    href="{{ route('admin.get.action.user', ['active', $user->id]) }}">{{ $user->getStatus($user->active)['name'] }}</a>
                            </td> --}}

            <td>
                <a style="padding: 5px 10px" class="border-right"
                    href="{{ route('admin.get.edit.user', $user->id) }}"><i class="far fa-edit text-primary"></i></a>
                <a style="padding: 5px 10px" class="border-left del_item"
                    href="{{ route('admin.get.action.user', ['delete', $user->id]) }}"><i
                        class="far fa-trash-alt text-danger"></i></a>
            </td>
        </tr>
    @endforeach
@endif
