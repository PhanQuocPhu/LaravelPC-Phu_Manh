@extends('user.layout')
@section('style')
    <style>
        .account-settings .user-profile {
            margin: 0 0 1rem 0;
            padding-bottom: 1rem;
            text-align: center;
        }

        .account-settings .user-profile .user-avatar {
            margin: 0 0 1rem 0;
        }

        .account-settings .user-profile .user-avatar img {
            width: 90px;
            height: 90px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
        }

        .account-settings .user-profile h5.user-name {
            margin: 0 0 0.5rem 0;
        }

        .account-settings .user-profile h6.user-email {
            margin: 0;
            font-size: 0.8rem;
            font-weight: 400;
            color: #9fa8b9;
        }

        .account-settings .about {
            margin: 2rem 0 0 0;
            text-align: center;
        }

        .account-settings .about h5 {
            margin: 0 0 15px 0;
            color: #007ae1;
        }

        .account-settings .about p {
            font-size: 0.825rem;
        }

        .form-control {
            border: 1px solid #cfd1d8;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            font-size: .825rem;
            background: #ffffff;
            color: #2e323c;
        }

        .card {
            background: #ffffff;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            border: 0;
            margin-bottom: 1rem;
        }

    </style>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Đổi mật khẩu</h6>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label for="password">Mật khẩu cũ
                                            {{-- <a href="javascript::void(0)" id="eye">
                                                <i class="fa fa-eye"></i>
                                            </a> --}}
                                        </label>
                                        <input type="password" class="form-control" id="password" name="password" value="">
                                        @if ($errors->has('password'))
                                            <span class="text-danger">
                                                {{ $errors->first('password') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="newpassword">Mật khẩu mới
                                            {{-- <a href="javascript::void(0)" id="eye">
                                                <i class="fa fa-eye"></i>
                                            </a> --}}
                                        </label>
                                        <input type="password" class="form-control" id="newpassword" name="newpassword"
                                            value="">
                                        @if ($errors->has('newpassword'))
                                            <span class="text-danger">
                                                {{ $errors->first('newpassword') }}
                                            </span>
                                        @endif

                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="newpassword">Nhập lại mật khẩu mới
                                            {{-- <a href="javascript::void(0)" id="eye">
                                                <i class="fa fa-eye"></i>
                                            </a> --}}
                                        </label>
                                        <input type="password" class="form-control" id="newpassword_confirm"
                                            name="newpassword_confirm" value="">
                                        @if ($errors->has('newpassword_confirm'))
                                            <span class="text-danger">
                                                {{ $errors->first('newpassword_confirm') }}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <a href="{{ route('user.info') }}" class="btn btn-secondary">
                                            Cancel
                                        </a>
                                        <button type="submit" id="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $("#eye").click(function() {
                let $this = $(this);
                if ($this.hasClass('active')) {
                    $this.parrents('.form-group').find('input').attr('type', 'password');
                    $this.removeClass('active');
                } else {
                    $this.parrents('.form-group').find('input').attr('type', 'text');
                    $this.addClass('active');
                }
            });
        });

    </script>
@endsection
