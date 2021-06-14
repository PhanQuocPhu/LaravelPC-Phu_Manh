<form method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            {{-- Hình ảnh --}}
            <div class="form-group">
                @if (isset($outbanner->ob_img))
                    <img id="output_img" src=" {{ pare_url_file($outbanner->ob_img) }}" class="img-fluid" alt="">
                @else
                    <img id="output_img" src="{{ asset('img/noimg.jpg') }}" class="img-fluid" alt="">
                @endif
            </div>
            <div class="form-group">
                <input type="file" name="ob_img" class="form-control" id="input_img">
            </div>
            {{-- Dẫn link --}}
            <div class="form-group">
                <label for="ob_link" class="form-label">Dẫn link danh mục</label>
                <select name="ob_link" id="" class="form-control">
                    <option value="">--Chọn loại sản phẩm--</option>
                    @if (isset($categories))
                        @foreach ($categories as $category)
                            <option value="{{ route('get.list.product', [$category->c_slug, $category->id]) }}"
                                {{ old('ob_link', (isset($outbanner->ob_link) ? $outbanner->ob_link : '') == route('get.list.product', [$category->c_slug, $category->id]) ? "selected='selected'" : '') }}>
                                {{ $category->c_name }} </option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>

    </div>
    <div class="button">
        <button type="submit" class="btn btn-primary">Lưu Thông Tin</button>
    </div>

</form>
@section('script')
    <script type="text/javascript">
        CKEDITOR.replace('pro_content');

    </script>
@endsection
