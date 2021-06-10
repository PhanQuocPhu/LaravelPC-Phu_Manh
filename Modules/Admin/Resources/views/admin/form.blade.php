<form method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="name" class="form-label">Tên thành viên:</label>
                <input type="text" class="form-control" placeholder="Tên thành viên"
                    value="{{ old('name', isset($admin->name) ? $admin->name : '') }}" name="name" id="u_name">
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
                            value="{{ old('email', isset($admin->email) ? $admin->email : '') }}" name="email"
                            id="u_email">
                        @if ($errors->has('email'))
                            <span class="font-weight-bold font-italic text-danger small">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6" {{isset($admin->password) ? 'hidden' : ''}}>
                    <div class="form-group">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" placeholder="Password"
                            value="{{ old('password', isset($admin->password) ? $admin->password : '') }}"
                            name="password" id="u_password" >
                        @if ($errors->has('password'))
                            <span class="font-weight-bold font-italic text-danger small">   
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone" class="form-label">Phone:</label>
                        <input type="number" class="form-control" placeholder="Phone"
                            value="{{ old('phone', isset($admin->phone) ? $admin->phone : '') }}" name="phone"
                            id="u_phone">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Address"
                            value="{{ old('address', isset($admin->address) ? $admin->address : '') }}" name="address"
                            id="address">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                @if (isset($admin->avatar))
                    <img id="output_img" src=" {{ pare_url_file($admin->avatar) }}" class="img-fluid" alt="">
                @else
                    <img id="output_img" src="{{ asset('img/noimg.jpg') }}" class="img-fluid" alt="">
                @endif
            </div>

            <div class="form-group">
                <input type="file" name="avatar" class="form-control" id="input_img">
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Lưu Thông Tin</button>
</form>
