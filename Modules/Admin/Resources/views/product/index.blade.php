@extends('admin::layouts.master')

@section('content')
    <style>
        .table .active {
            color: #ff9705 !important;
        }

        #edit {
            font-size: 12px;
        }

        #delete {
            font-size: 12px;
        }

    </style>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
        </ol>
    </nav>
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


    <h3> <strong> Quản lý sản phẩm <a class="btn btn-success" href="{{ route('admin.get.create.product') }}"
                style="float: right;"><i class="far fa-plus-square"></i> Thêm mới</a> </strong></h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Loại sản phẩm</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Status</th>
                    <th scope="col">Nổi bật</th>
                    <th scope="col">Thao tác</th>
                </tr>
            </thead>
            <tbody id="tb_content">
                @if (isset($products))
                    @foreach ($products as $product)
                        <?php
                        $age = 0;
                        if ($product->pro_total_rating) {
                        $age = round($product->pro_total_number / $product->pro_total_rating, 2);
                        }
                        ?>
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>
                                {{ $product->pro_name }}
                                <ul>
                                    <li><span>{{ number_format($product->pro_price, 0, '.', ',') }} vnđ</span></li>
                                    <li><span>{{ $product->pro_sale }} (%)</span></li>
                                    <li> <span>Đánh giá:</span>
                                        <span>
                                            @for ($i = 1; $i <= 5; $i++)
                                                <i class="fa fa-star {{ $i <= $age ? 'active' : '' }}"
                                                    style="color: #999"></i>
                                            @endfor
                                        </span>
                                        <span> {{ $age }}</span>
                                    </li>
                                    <li><span>Số lượng: </span> <span>{{ $product->pro_number }}</span></li>
                                </ul>
                            </td>
                            <td>{{ isset($product->category->c_name) ? $product->category->c_name : '[N/A]' }}</td>
                            <td>
                                <img src="{{ pare_url_file($product->pro_avatar) }}" alt="" class="img img-responsive"
                                    style="height: 80px; width:80px">
                            </td>
                            {{-- Active --}}
                            <td>
                                <a class="badge {{ $product->getStatus($product->pro_active)['class'] }} status_product"
                                    href="{{ route('admin.get.action.product.ajax', ['active', $product->id]) }}">{{ $product->getStatus($product->pro_active)['name'] }}</a>
                            </td>
                            {{-- Hot --}}
                            <td>
                                <a class="badge {{ $product->getHot($product->pro_hot)['class'] }} status_product"
                                    href="{{ route('admin.get.action.product.ajax', ['hot', $product->id]) }}">{{ $product->getHot($product->pro_hot)['name'] }}
                                </a>
                            </td>
                            <td>
                                <a style="padding: 5px 10px" class="btn btn-outline-primary" id="edit"
                                    href="{{ route('admin.get.edit.product', $product->id) }}"><i
                                        class="far fa-edit text-primary"></i> Edit</a>
                                <a style="padding: 5px 10px" class="btn btn-outline-danger del_item" id="delete"
                                    href="{{-- {{ route('admin.get.action.product', ['delete', $product->id]) }} --}} {{ route('admin.get.action.product.ajax', ['delete', $product->id]) }}"><i
                                        class="far fa-trash-alt text-danger"></i> Delete</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection


@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //Xóa
        $('body').on('click', '.del_item', function(event) {
            event.preventDefault()
            let $this = $(this);
            let url = $this.attr('href');
            $.confirm({
                title: 'Xóa sản phẩm này ?',
                content: 'Chắc chắn ?',
                buttons: {
                    confirm: {
                        text: 'Xóa',
                        btnClass: 'btn-danger',
                        action: function() {
                            /* console.log(url); */
                            $.ajax({
                                url: url,
                                method: 'POST',
                                success: function(response) {
                                    $.alert('Đã xóa sản phẩm');
                                    $('#tb_content').html(response);
                                }
                            });
                        }
                    },
                    cancel: {
                        text: 'Hủy',
                        btnClass: 'btn-secondary'
                    }
                }
            });
            /* Swal.fire({
                title: 'Do you want to save the changes?',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `Save`,
                denyButtonText: `Don't save`,
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire('Saved!', '', 'success')
                } else if (result.isDenied) {
                    Swal.fire('Changes are not saved', '', 'info')
                }
            }); */
        });
        

        //Edit status
        $('body').on('click', '.status_product', function(event) {
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

    </script>
@stop
