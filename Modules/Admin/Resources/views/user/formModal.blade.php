<div class="row">
    <div class="col-sm-8">
        <div class="form-group">
            <label for="name" class="form-label">Tên thành viên:</label>
            <input type="text" class="form-control" placeholder="Tên thành viên"
                value="{{ old('name', isset($user->name) ? $user->name : '') }}" name="name">
            @if ($errors->has('name'))
                <span class="font-weight-bold font-italic text-danger small">
                    {{ $errors->first('name') }}
                </span>
            @endif
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" placeholder="email"
                        value="{{ old('email', isset($user->email) ? $user->email : '') }}"
                        name="email">
                    @if ($errors->has('email'))
                        <span class="font-weight-bold font-italic text-danger small">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" placeholder="Password"
                        value="{{ old('password', isset($user->password) ? $user->password : '') }}"
                        name="password">
                    @if ($errors->has('email'))
                        <span class="font-weight-bold font-italic text-danger small">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" class="form-control" placeholder="Meta title"
                        value="{{ old('phone', isset($user->phone) ? $user->phone : '') }}"
                        name="phone">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" placeholder="Address"
                        value="{{ old('address', isset($user->address) ? $user->address : '') }}"
                        name="address">
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            @if (isset($product))
                <img id="output_img" src=" {{ pare_url_file($product->pro_avatar) }}"
                    class="img-fluid" alt="">
            @else
                <img id="output_img" src="{{ asset('img/noimg.jpg') }}" class="img-fluid" alt="">
            @endif
        </div>

        <div class="form-group">
            <input type="file" name="avatar" class="form-control" id="input_img">
        </div>
    </div>
</div>