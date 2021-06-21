<form method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="pro_name" class="form-label">Tên sản phẩm:</label>
                <input type="text" class="form-control" placeholder="Tên Danh Mục"
                    value="{{ old('pro_name', isset($product->pro_name) ? $product->pro_name : '') }}"
                    name="pro_name">
                @if ($errors->has('pro_name'))
                    <span class="font-weight-bold font-italic text-danger small">
                        {{ $errors->first('pro_name') }}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="pro_description" class="form-label">Mô tả:</label>
                <textarea name="pro_description" class="form-control" id="" cols="30" rows="3"
                    placeholder="Mô tả ngắn">{{ old('pro_description', isset($product->pro_description) ? $product->pro_description : '') }}</textarea>
                @if ($errors->has('pro_description'))
                    <span class="font-weight-bold font-italic text-danger small">
                        {{ $errors->first('pro_description') }}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="pro_content" class="form-label">Nội dung:</label>
                <textarea name="pro_content" class="form-control" id="pro_content" cols="30" rows="3"
                    placeholder="Nội dung">{{ old('pro_content', isset($product->pro_content) ? $product->pro_content : '') }}
                </textarea>
            </div>
            <div class="form-group">
                <label for="pro_title_seo" class="form-label">Meta title:</label>
                <input type="text" class="form-control" placeholder="Meta title"
                    value="{{ old('pro_title_seo', isset($product->pro_title_seo) ? $product->pro_title_seo : '') }}"
                    name="pro_title_seo">
            </div>
            <div class="form-group">
                <label for="pro_description_seo" class="form-label">Meta Description</label>
                <input type="text" class="form-control" placeholder="Meta description"
                    value="{{ old('pro_description_seo', isset($product->pro_description_seo) ? $product->pro_description_seo : '') }}"
                    name="pro_description_seo">
            </div>
            {{-- <div class="form-group">
                <label class="form-check-label" for="hot"> <input type="checkbox" class="form-check-inline" name="hot">
                    Nổi bật</label>
            </div> --}}
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="pro_category_id" class="form-label">Loại sản phẩm:</label>
                <select name="pro_category_id" id="" class="form-control">
                    <option value="">--Chọn loại sản phẩm--</option>
                    @if (isset($categories))
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('pro_category_id', (isset($product->pro_category_id) ? $product->pro_category_id : '') == $category->id ? "selected='selected'" : '') }}>
                                {{ $category->c_name }} </option>
                        @endforeach
                    @endif
                </select>
                @if ($errors->has('pro_category_id'))
                    <span class="font-weight-bold font-italic text-danger small">
                        {{ $errors->first('pro_category_id') }}
                    </span>
                @endif
            </div>
            {{-- Giá sản phẩm --}}
            <div class="form-group">
                <label for="pro_price" class="form-label">Giá sản phẩm:</label>
                <input type="number" name="pro_price" class="form-control" placeholder="Giá sản phẩm" id=""
                    value="{{ old('pro_price', isset($product->pro_price) ? $product->pro_price : '') }}">
                @if ($errors->has('pro_price'))
                    <span class="font-weight-bold font-italic text-danger small">
                        {{ $errors->first('pro_price') }}
                    </span>
                @endif
            </div>
            {{-- Khuyến mãi --}}
            <div class="form-group">
                <label for="pro_sale" class="form-label">% Khuyến mãi:</label>
                <input type="number" name="pro_sale" class="form-control" placeholder="% giảm giá" id="" min="0"
                    value="{{ old('pro_sale', isset($product->pro_sale) ? $product->pro_sale : '0') }}">
            </div>

            {{-- Số lượng --}}
            <div class="form-group">
                <label for="pro_sale" class="form-label">Số lượng sản phẩm:</label>
                <input type="number" name="pro_number" class="form-control" placeholder="Số lượng" id="" min="0"
                    value="{{ old('pro_number', isset($product->pro_number) ? $product->pro_number : '0') }}">
            </div>

            {{-- Hình ảnh --}}
            <div class="form-group">
                @if (isset($product->pro_avatar))
                    <img id="output_img" src=" {{ pare_url_file($product->pro_avatar) }}" class="img-fluid" alt="">
                @else
                    <img id="output_img" src="{{ asset('img/noimg.jpg') }}" class="img-fluid" alt="">
                @endif
            </div>
            <div class="form-group">
                <input type="file" name="avatar" class="form-control" id="input_img">
            </div>

            {{-- <div class="form-group">
                <label class="form-check-label" for="hot"> <input type="checkbox" class="form-check-inline" name="hot">
                    Nổi bật</label>
            </div> --}}
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
