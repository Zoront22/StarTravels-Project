@extends('layouts.forms')

@section('title', 'Registration')

@section('content')


    <!--====== LOADER =====-->
    <div class="loader"></div>
    <a href="{{ url('admin/index/index') }}" class="btn btn-primary ms-5 mt-5 sh-above position-absolute">Go Back</a>
    <section class="reg-form common-form bg-image flex-centering">
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
                            <form action="{{ route('register.post') }}" method="POST">
                                @csrf
                                <h4>Sign Up</h4>
                                <p class="new-acc">Already have an account? <a href="{{ url('admin/login') }}">Login!</a>
                                </p>
                                <div class="row mt-4">
                                    <div class="col">
                                        <input type="text" class="form-control " name="name" placeholder="Your Name"
                                            required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="email" class="form-control " name="email" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control " name="phone" placeholder="Phone No:"
                                            required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <input type="password" class="form-control " name="password"
                                            id="exampleInputPassword1" placeholder="Password" required>
                                    </div>
                                </div>
                                <ul class="list-unstyled  list-inline info">
                                    <li><button type="submit" class="btn d-block">Create</button></li>

                                    <li class="list-inline-item">
                                        <a href="form-forgot-password" class="new-acc">Forgot Password?</a>
                                    </li>
                                </ul>
                            </form>
                        </div><!-- end white-box -->
                    </div>
                </div>
            </div>

        @endsection
