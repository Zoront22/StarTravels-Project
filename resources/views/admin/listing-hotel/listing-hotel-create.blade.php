@extends('layouts.bar')

@section('title', 'Hotel Listing Create')

@section('content')

    <!-- ===========Innerpage-wrapper============= -->
    <section>
        <div class="content add-details">
            <div class="in-content-wrapper">
                <div class="row no-gutters">

                    <div class="col">
                        <div class="heading-messages">
                            <h3>Hotel Listing</h3>
                        </div><!-- End heading-messages -->
                    </div><!-- End column -->
                    <div class="col-md-4">
                        <div class="breadcrumb">
                            <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Listing</a>
                            </div>
                            <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Create
                            </div>
                        </div><!-- end breadcrumb-->
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
                    <div class="hotel-listing-form">
                        <form class="text-center" method="POST" action="{{ route('listing-hotel.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect07" class="">Room Number:</label>
                                        <input type="text" class="form-control" name="room" required
                                            id="inputGroupSelect07">
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect00">Room
                                                    Type:</label>
                                            </div>
                                            <select class="form-select" name="type" id="inputGroupSelect00">
                                                <option selected>Choose...</option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
                                                <option value="Quad">Quad</option>
                                                <option value="King">King</option>
                                                <option value="Appartments">Appartments</option>
                                                <option value="Villa">Villa</option>
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
                                                <label class="input-group-text" for="inputGroupSelect01">AC/Non
                                                    Ac:</label>
                                            </div>
                                            <select class="form-select" name="ac" id="inputGroupSelect01">
                                                <option selected>Choose...</option>
                                                <option value="AC">AC</option>
                                                <option value="Non AC" selected>Non Ac</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect02">Meal:</label>
                                            </div>
                                            <select class="form-select" name="meal" id="inputGroupSelect02">
                                                <option selected>Choose...</option>
                                                <option value="Free Breakfast">Free Breakfast</option>
                                                <option value="Free Dinner">Free Dinner</option>
                                                <option value="Free Breakfast & dinner">Free Breakfast & dinner</option>
                                                <option value="Free Welcome Drink">Free Welcome Drink</option>
                                                <option value="No Food">No Food</option>
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
                                                <label class="input-group-text" for="inputGroupSelect03">Cancellation
                                                    Charges:</label>
                                            </div>
                                            <select class="form-select" name="cancellation_charges" id="inputGroupSelect03">
                                                <option selected>Choose...</option>
                                                <option value="Free Cancellation" selected>Free Cancellation</option>
                                                <option value="15% before 24 hours">15% before 24 hours</option>
                                                <option value="Not Allowed">Not Allowed</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect04">Bed
                                                    Capacity:</label>
                                            </div>
                                            <select class="form-select" name="capacity" id="inputGroupSelect04">
                                                <option selected>Choose...</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect05" class="">Telephone # :</label>
                                        <input type="text" class="form-control" name="phone" required
                                            id="inputGroupSelect05">
                                    </div><!-- end form-group -->
                                </div><!-- end column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="inputGroupSelect06" class="">Rent Per Night:</label>
                                            <input type="text" class="form-control" name="rent" required
                                                id="inputGroupSelect06">
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
                                <textarea class="form-control textarea text-start p-3" name="details" id="exampleFormControlTextarea1"
                                    rows="5" placeholder="Room Details"></textarea>
                            </div><!-- end form-group -->
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <button type="submit" class="btn">Submit</button>
                                </li>
                                <li class="list-inline-item">
                                    <button class="btn">Cancel</button>
                                </li>
                            </ul>

                        </form>
                    </div><!-- end hotel-listing-form -->
                </div><!-- end box -->
            </div><!-- end in-content-wrapper -->
        </div><!-- end add-details -->
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
