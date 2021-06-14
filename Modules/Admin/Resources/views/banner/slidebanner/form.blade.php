<form method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            {{-- Hình ảnh --}}
            <div class="form-group">
                @if (isset($slidebanner->sb_img))
                    <img id="output_img" src=" {{ pare_url_file($slidebanner->sb_img) }}" class="img-fluid" alt="">
                @else
                    <img id="output_img" src="{{ asset('img/noimg.jpg') }}" class="img-fluid" alt="">
                @endif
            </div>
            <div class="form-group">
                <input type="file" name="sb_img" class="form-control" id="input_img">
            </div>
            {{-- Dẫn link --}}
            <div class="form-group">
                <label for="sb_link" class="form-label">Dẫn link danh mục</label>
                <select name="sb_link" id="" class="form-control">
                    <option value="">--Chọn loại sản phẩm--</option>
                    @if (isset($categories))
                        @foreach ($categories as $category)
                            <option value="{{ route('get.list.product', [$category->c_slug, $category->id]) }}"
                                {{ old('sb_link', (isset($slidebanner->sb_link) ? $slidebanner->sb_link : '') == route('get.list.product', [$category->c_slug, $category->id]) ? "selected='selected'" : '') }}>
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
