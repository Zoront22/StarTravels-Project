@extends('layouts.bar')

@section('title', 'Tour Listing Create')

@section('content')

    <!-- ===========Innerpage-wrapper============= -->
    <section>
        <div class="content tour-add-details">
            <div class="in-content-wrapper">
                <div class="row no-gutters">

                    <div class="col">
                        <div class="heading-messages">
                            <h3>Tour Listing</h3>
                        </div><!-- End heading-messages -->
                    </div><!-- End column -->
                    <div class="col-md-4">
                        <div class="breadcrumb">
                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Listing</a>
                            </div>
                            <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Create
                            </div>
                        </div><!-- end breadcrumb -->
                    </div><!-- end column -->

                </div><!-- end row -->

                <div class="box">

                    <div class="row">
                        <div class="col">
                            <div class="details-text">
                                <h4>Add Details</h4>
                            </div><!-- end details-text -->
                        </div><!-- End column -->
                    </div><!-- end row -->
                    <div class="tour-listing-form">
                        <form class="text-center" method="POST" action="{{ route('listing-tour.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect00" class="">Title:</label>
                                        <input type="text" class="form-control" name="name" required
                                            id="inputGroupSelect00">
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Country:</label>
                                            </div>
                                            <select class="form-select" name="country" id="inputGroupSelect01">
                                                <option selected>Choose...</option>
                                                <option value="United States">United States</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Paris">Paris</option>
                                                <option value="Dubai">Dubai</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect03" class="">City:</label>
                                        <input type="text" class="form-control" name="city" required
                                            id="inputGroupSelect03">
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect04">Seats:</label>
                                            </div>
                                            <select class="form-select" name="seats" id="inputGroupSelect04">
                                                <option selected>Choose...</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect05">Duration:</label>
                                            </div>
                                            <select class="form-select" name="duration" id="inputGroupSelect05">
                                                <option selected>Choose...</option>
                                                <option value="1 day" selected>1 day</option>
                                                <option value="2 days">2 days</option>
                                                <option value="4 days">4 days</option>
                                                <option value="1 week">1 week</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect06">Cost:</label>
                                            </div>
                                            <select class="form-select" name="price" id="inputGroupSelect06">
                                                <option selected>Choose...</option>
                                                <option value="100">100$</option>
                                                <option value="200">200$</option>
                                                <option value="300">300$</option>
                                                <option value="350">350$</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                            </div><!-- end row -->

                            <div action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <div class="dz-message needsclick">
                                    <p>
                                        Drop files here or click to upload.
                                    </p>
                                    <span class="note needsclick">(This is just a demo dropzone. Selected files are
                                        <strong>not</strong> actually uploaded.)</span>
                                </div>

                            </div><!-- end dropzone -->


                            <div class="form-group">
                                <textarea class="form-control textarea text-start p-3" name="embed" id="exampleFormControlTextarea1"
                                    rows="5" placeholder="Embed Map"></textarea>
                            </div><!-- end form-group -->

                            <div class="form-group">
                                <textarea class="form-control textarea text-start p-3" name="details" id="exampleFormControlTextarea1"
                                    rows="5" placeholder="Tour Details"></textarea>
                            </div><!-- end form-group -->
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <button type="submit" class="btn">Submit</button>
                                </li>
                                <li class="list-inline-item">
                                    <button type="submit" class="btn">Cancel</button>
                                </li>
                            </ul>
                        </form>
                    </div><!-- end tour-listing-form -->
                </div>
            </div><!-- end in-content-wrapper -->
        </div><!-- end tour-add-details -->
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
