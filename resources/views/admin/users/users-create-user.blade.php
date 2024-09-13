@extends('layouts.bar')

@section('title', 'Create User')

@section('content')

    <!-- ===========Innerpage-wrapper============= -->
    <section>
        <div class="content add-details profile User">
            <div class="in-content-wrapper">
                <div class="row no-gutters">

                    <div class="col">
                        <div class="heading-messages">
                            <h3>Users</h3>
                        </div><!-- End heading-messages -->
                    </div><!-- End column -->
                    <div class="col-md-4">
                        <div class="breadcrumb">
                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Users</a>
                            </div>
                            <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Create User
                            </div>
                        </div><!-- end breadcrumb -->
                    </div><!-- End column -->

                </div><!-- end row -->

                <div class="box">

                    <div class="row">
                        <div class="col">
                            <div class="details-text">
                                <h4>Create User</h4>
                            </div><!-- end details-text -->
                        </div><!-- End column -->
                    </div><!-- end row -->
                    <div class="hotel-listing-form">
                        <form class="text-center" action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="to" class="">First Name:</label>
                                                <input type="text" class="form-control" name="first_name" required
                                                    id="to">
                                            </div><!-- end form-group -->
                                        </div><!-- End column -->
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="to1" class="">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" required
                                                    id="to1">
                                            </div><!-- end form-group -->
                                        </div><!-- End column -->
                                    </div><!-- end row -->

                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="to2" class="">User Name:</label>
                                                <input type="text" class="form-control" name="username" required
                                                    id="to2">
                                            </div><!-- end form-group -->
                                        </div><!-- End column -->
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="to3" class="">Email:</label>
                                                <input type="email" class="form-control" name="email" required
                                                    id="to3">
                                            </div><!-- end form-group -->
                                        </div><!-- End column -->
                                    </div><!-- end row -->
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="to4" class="">Password:</label>
                                                <input type="password" class="form-control" name="password" required
                                                    id="to4">
                                            </div><!-- end form-group -->
                                        </div><!-- End column -->
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="to5" class="">Repeat Pwd:</label>
                                                <input type="password" class="form-control" required id="to5">
                                            </div><!-- end form-group -->
                                        </div><!-- End column -->
                                    </div><!-- end row -->
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="to6" class="">Phone #:</label>
                                                <input type="text" class="form-control" name="phone" required
                                                    id="to6">
                                            </div><!-- end form-group -->
                                        </div><!-- End column -->
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="to7" class="">Date Of Birth:</label>
                                                <input type="date" class="form-control text-center" name="birth"
                                                    required id="to7">
                                            </div><!-- end form-group -->
                                        </div><!-- End column -->
                                    </div><!-- end row -->


                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <button type="submit" class="btn" type="submit">Create User</button>
                                        </li>
                                        <li class="list-inline-item">
                                            <button type="submit" class="btn">Cancel</button>
                                        </li>
                                    </ul>
                                </div><!-- End column -->
                                <div class="col">
                                    <div class="upload-photo-wrapper">
                                        <div class="upload-heading">
                                            <h5>Your Photo</h5>
                                        </div><!-- end upload-heading -->

                                        <div action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">
                                            <div class="dz-message">
                                                <p>
                                                    Drop files here or click to upload.
                                                </p>
                                            </div>
                                        </div><!-- end dropzone -->
                                    </div><!-- end upload-photo-wrapper -->

                                </div><!-- End column -->
                            </div><!-- end row -->

                        </form>
                    </div><!-- end hotel-listing-form -->
                </div><!-- end box -->
            </div><!-- end in-content-wrapper -->
        </div><!-- end add-details profile User -->
    </section>
    <!-- ===========End Innerpage-wrapper============= -->

    </div><!-- end wrapper -->














    <!-- Optional JavaScript, Not optional it's need too -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('vendors/admin/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/bootstrap-5.3.2.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/vendors/dropzone-5.5.0/dist/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/customscriptfile.js') }}"></script>

    <!-- Page Scripts Ends -->


@endsection
