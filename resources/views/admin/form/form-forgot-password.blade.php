@extends('layouts.forms')

@section('title', 'Forgot Password')

@section('content')
    
    <!--====== LOADER =====-->
    <div class="loader"></div>
    <a href="{{ url('admin/index/index') }}" class="btn btn-primary ms-5 mt-5 sh-above position-absolute">Go Back</a>
    <section class="forget-form common-form bg-image flex-centering">
        <div class="container-fluid">
            <div class="meta">
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-3 ms-sm-auto pe-sm-0">
                        <div class="white-box left-side sh-above">
                            <img src="{{ asset('vendors/admin/images/logo.png') }}" alt="logo-img" class="img-fluid ">
                            <h2 class="">Welcome to Star Travels</h2>
                            <ul class="social list-unstyled ">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-5 col-lg-4 me-sm-auto ps-sm-0">
                        <div class="white-box sh-above flex-centering">
                            <form>
                                <h4>Forgot Password</h4>
                                <p>Enter your email below to reset your password</p>
                                <div class="form-group mt">
                                    <input type="email" class="form-control " id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Email" required>
                                </div>
                                <ul class="list-unstyled  list-inline info">
                                    <li><button type="submit" class="btn d-block">Reset Password</button></li>
                                    <li class="list-inline-item">
                                        <a href="form-registration" class="new-acc">No account? Sign up for
                                            one!</a>
                                    </li>
                                    <li>
                                        <a href="form-login" class="new-acc">Already have an account? Login
                                            here</a>
                                    </li>

                                </ul>
                            </form>
                        </div><!-- end white-box -->
                    </div>
                </div>
            </div>

@endsection