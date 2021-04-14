<form method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-9 m-auto">
            <div class="form-group">
                <label for="pro_name" class="form-label">Tên bài viết:</label>
                <input type="text" class="form-control" placeholder="Tên bài viết"
                    value="{{ old('a_name', isset($article->a_name) ? $article->a_name : '') }}"
                    name="a_name">
                @if ($errors->has('a_name'))
                    <span class="font-weight-bold font-italic text-danger small">
                        {{ $errors->first('a_name') }}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="a_description" class="form-label">Mô tả:</label>
                <textarea name="a_description" class="form-control" id="" cols="30" rows="3" placeholder="Mô tả ngắn">
                    {{ old('a_description', isset($article->a_description) ? $article->a_description : '') }}
                </textarea>
                @if ($errors->has('a_description'))
                    <span class="font-weight-bold font-italic text-danger small">
                        {{ $errors->first('a_description') }}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="a_content" class="form-label">Nội dung bài viết:</label>
                <textarea name="a_content" class="form-control" id="" cols="30" rows="3" placeholder="Nội dung">
                    {{ old('a_content', isset($article->a_content) ? $article->a_content : '') }}
                </textarea>
            </div>
            <div class="form-group">
                <label for="a_title_seo" class="form-label">Meta title:</label>
                <input type="text" class="form-control" placeholder="Meta title"
                    value="{{ old('a_title_seo', isset($article->a_title_seo) ? $article->a_title_seo : '') }}"
                    name="a_title_seo">
            </div>
            <div class="form-group">
                <label for="a_description_seo" class="form-label">Meta Description</label>
                <input type="text" class="form-control" placeholder="Meta description"
                    value="{{ old('a_description_seo', isset($article->a_description_seo) ? $article->a_description_seo : '') }}"
                    name="a_description_seo">
            </div>
            <div class="form-group">
                <label for="a_avatar" class="form-label">Avatar</label>
                <input type="file" name="a_avatar" class="form-control" id="input_img">
            </div>
            <div class="form-group">
                <label class="form-check-label" for="hot"> <input type="checkbox" class="form-check-inline" name="hot">
                    Nổi bật</label>
            </div>
            <button type="submit" class="btn btn-primary text-center">Lưu bài viết</button>
        </div>
    </div>
    
</form>

