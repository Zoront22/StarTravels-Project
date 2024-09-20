@extends('layouts.forms')

@section('title', 'Login')

@section('content')

    <!--====== LOADER =====-->
    <div class="loader"></div>
    <a href="{{ url('admin/index/index') }}" class="btn btn-primary ms-5 mt-5 sh-above position-absolute">Go Back</a>
    <section class="login-form common-form bg-image flex-centering">
        <div class="container-fluid">
            <div class="meta">
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-3 ms-sm-auto pe-sm-0">
                        <div class="white-box left-side sh-above">
                            <div class="img">
                                <img src="{{ asset('vendors/admin/images/logo.png') }}" alt="logo-img" class="img-fluid ">
                            </div>
                            <h2 class="">Welcome to Star Travels</h2>
                            <ul class="social list-unstyled  flex-centering">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-5 col-lg-4 me-sm-auto ps-sm-0">
                        <div class="white-box sh-above flex-centering">
                            <form method="POST" action="{{ route('login.auth') }}">
                                @csrf
                                <h4>Login</h4>
                                <p class="new-acc">Don't have an account? <a href="{{ url('admin/register') }}">Create
                                        one!</a></p>
                                <div class="form-group mt">
                                    <input type="email" class="form-control " name="email" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control " name="password" id="exampleInputPassword1"
                                        aria-describedby="passwordHelp" placeholder="Enter Password" required>
                                </div>
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                </div>
                                <ul class="list-unstyled  info">
                                    <li>
                                        <p><a href="form-forgot-password" class="new-acc">Forgot Password?</a></p>
                                    </li>
                                    <li><button type="submit" class="btn d-block">Login</button></li>
                                </ul>
                            </form>
                        </div><!-- end white-box -->
                    </div>
                </div>
            </div>
        @endsection
