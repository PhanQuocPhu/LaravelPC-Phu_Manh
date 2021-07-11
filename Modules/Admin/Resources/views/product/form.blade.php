<form method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="pro_name" class="form-label">Tên sản phẩm:</label>
                <input type="text" class="form-control" placeholder="Tên sản phẩm"
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
                @if ($errors->has('pro_content'))
                    <span class="font-weight-bold font-italic text-danger small">
                        {{ $errors->first('pro_content') }}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="pro_title_seo" class="form-label">Meta title:</label>
                <input type="text" class="form-control" placeholder="Meta title"
                    value="{{ old('pro_title_seo', isset($product->pro_title_seo) ? $product->pro_title_seo : '') }}"
                    name="pro_title_seo">
            </div>
             {{-- Meta Descripstion --}}
             <div class="form-group">
                <label for="pro_description_seo" class="form-label">Meta Description</label>
                <input type="text" class="form-control" placeholder="Meta description"
                    value="{{ old('pro_description_seo', isset($product->pro_description_seo) ? $product->pro_description_seo : '') }}"
                    name="pro_description_seo">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="pro_category_id" class="form-label">Loại sản phẩm:</label>
                <select name="pro_category_id" id="" class="form-control">
                    <option value="">--Chọn loại sản phẩm--</option>
                    @if (isset($categories))
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('pro_category_id', (isset($product->pro_category_id) ? $product->pro_category_id : '') == $category->id ? "selected" : '') }}>
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
                <label for="pro_number" class="form-label">Số lượng sản phẩm:</label>
                <input type="number" name="pro_number" class="form-control" placeholder="Số lượng" id="" min="0"
                    value="{{ old('pro_number', isset($product->pro_number) ? $product->pro_number : '0') }}">
            </div>

            {{-- Hình ảnh --}}
            <div class="form-group text-center">
                @if (isset($product->pro_avatar))
                    <img id="output_img" src=" {{ pare_url_file($product->pro_avatar) }}" class="img-fluid col-sm-10"
                        alt="">
                @else
                    <img id="output_img" src="{{ asset('img/noimg.jpg') }}" class="img-fluid col-sm-10" alt="">
                @endif
            </div>
            <div class="form-group">
                <input type="file" name="pro_avatar" class="" id="input_img">
            </div>
        </div>
    </div>

    {{-- Album ảnh --}}
    <div class="form-group">
        <label for="file" class="form-label">Album ảnh</label>
        @if (isset($images))
            <div class="row">
                @foreach ($images as $image)
                <div class="col-sm-2">
                    <div class="card">
                        <img class="card-img-top" src="{{ pare_url_file($image->pi_slug) }}" alt="Card image cap">
                        <div class="card-body text-center">
                            <a href="{{ route('admin.get.delete.product.image', $image->id) }}" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
        <div class="file-loading">
            <input id="images" type="file" name="file[]" multiple class="file" data-overwrite-intial="false"
                data-min-file-count="0">
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
