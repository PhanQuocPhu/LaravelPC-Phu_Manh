<form method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="name" class="form-label">Tên Danh Mục</label>
                <input type="text" class="form-control" placeholder="Tên Danh Mục"
                    value="{{ old('name', isset($category->c_name) ? $category->c_name : '') }}" name="name">
                @if ($errors->has('name'))
                    <span class="font-weight-bold font-italic text-danger small">
                        {{ $errors->first('name') }}
                    </span>
                @endif
            </div>

            {{-- Meta tittle --}}
            <div class="form-group">
                <label for="c_title_seo" class="form-label">Meta title:</label>
                <input type="text" class="form-control" placeholder="Meta title"
                    value="{{ old('c_title_seo', isset($category->c_title_seo) ? $category->c_title_seo : '') }}"
                    name="c_title_seo">
            </div>
            <div class="form-group">
                <label for="c_description_seo" class="form-label">Meta Description</label>
                <input type="text" class="form-control" placeholder="Meta description"
                    value="{{ old('c_description_seo', isset($category->c_description_seo) ? $category->c_description_seo : '') }}"
                    name="c_description_seo">
            </div>
        </div>
        <div class="col-sm-3">
            {{-- Hình ảnh --}}
            <div class="form-group text-center">
                @if (isset($category->c_icon))
                    <img id="output_img" src=" {{ pare_url_file($category->c_icon) }}" class="" alt="" style="height: 100px; width:100px">
                @else
                    <img id="output_img" src="{{ asset('img/noimg.jpg') }}" class="" alt="" style="height: 100px; width:100px">
                @endif
                <input type="file" name="icon" class="form-control" id="input_img" {{ isset($category->c_icon) ? '' : 'required' }}>
            </div>
            {{-- <div class="form-group">
                <label for="icon" class="form-label">Icon</label>
                <input type="text" class="form-control" placeholder="fa fa-sm"
                    value="{{ old('icon', isset($category->c_icon) ? $category->c_icon : '') }}" name="icon">
                @if ($errors->has('icon'))
                    <span class="font-weight-bold font-italic text-danger small">
                        {{ $errors->first('icon') }}
                    </span>
                @endif
            </div> --}}
        </div>
    </div>

    {{-- <div class="form-group">
        
        <label class="form-check-label" for="hot"> <input type="checkbox" class="form-check-inline" name="hot"> Nổi bật</label>
    </div> --}}
    <button type="submit" class="btn btn-primary">Lưu Thông Tin</button>
</form>
