@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <!-- breadcrumbs area start -->
            <div class="breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container-inner">
                                <ul>
                                    <li class="home">
                                        <a href="index.html">Home</a>
                                        <span><i class="fa fa-angle-right"></i></span>
                                    </li>
                                    <li class="category3"><span>Login</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumbs area end -->
            <div id="logreg-forms">
                <form class="form-signin" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
                    {{-- Social Login --}}
                    <div class="social-login">
                        <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i>
                                Sign in with Facebook</span> </button>
                        <a class="btn google-btn social-btn" href="{{ route('get.auth.login', ['google']) }}"><span><i
                                    class="fab fa-google-plus-g"></i> Sign in with Google+</span> </a>
                    </div>

                    <p style="text-align:center"> OR </p>

                    {{-- Usual Login --}}
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required=""
                        autofocus="">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"
                        required="">

                    <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign
                        in</button>
                    <a href="#" id="forgot_pswd">Forgot password?</a>
                    <hr>
                    <!-- <p>Don't have an account!</p>  -->
                    <a class="btn btn-primary btn-block" href="{{ route('get.register') }}" id="btn-signup"><i class="fas fa-user-plus"></i>
                        Sign up New Account</a>
                </form>

                {{-- Reset password --}}
                <form action="/reset/password/" class="form-reset">
                    <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required=""
                        autofocus="">
                    <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                    <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
                </form>


                <br>

            </div>

        </div>
    </div>
@endsection
