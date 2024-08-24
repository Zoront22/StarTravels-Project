@extends('layouts.bar')

@section('title', 'Flight Listing Edit')

@section('content')

    <!-- ===========Innerpage-wrapper============= -->
    <section>
        <div class="content flight-add-details">
            <div class="in-content-wrapper">
                <div class="row no-gutters">
                    <div class="col">
                        <div class="heading-messages">
                            <h3>Flight Listing</h3>
                        </div><!-- End heading-messages -->
                    </div><!-- End column -->
                    <div class="col-md-4">
                        <div class="breadcrumb">
                            <div class="breadcrumb-item">
                                <i class="fas fa-angle-right"></i><a href="#">Listing</a>
                            </div>
                            <div class="breadcrumb-item active">
                                <i class="fas fa-angle-right"></i>Modify
                            </div>
                        </div><!-- end breadcrumb -->
                    </div><!-- End column -->
                </div><!-- end row -->

                <div class="box">
                    <div class="row">
                        <div class="col">
                            <div class="details-text">
                                <h4>Modify Details</h4>
                            </div><!-- end details-text -->
                        </div><!-- End column -->
                    </div><!-- end row -->
                    <div class="flight-listing-form">
                        <form class="text-center" method="POST" action="{{ route('listing-flight.update', $unit->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect00" class="">Title:</label>
                                        <input type="text" class="form-control" name="name" required
                                            value="{{ $unit->name }}" id="inputGroupSelect00" />
                                    </div><!-- end form-group -->
                                </div><!-- End column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Country:</label>
                                            </div>
                                            <select class="form-select" name="country" id="inputGroupSelect01">
                                                <option selected value="{{ $unit->country }}">{{ $unit->country }}</option>
                                                <option value="United States">United States</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Paris">Paris</option>
                                                <option value="Dubai">Dubai</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- End column -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect02" class="">City:</label>
                                        <input type="text" class="form-control" name="city" required
                                            value="{{ $unit->city }}" id="inputGroupSelect02">
                                    </div><!-- end form-group -->
                                </div><!-- End column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect03">Airline:</label>
                                            </div>
                                            <select class="form-select" name="airline" id="inputGroupSelect03">
                                                <option selected value="{{ $unit->airline }}">{{ $unit->airline }}</option>
                                                <option value="American Airlines">American Airlines</option>
                                                <option value="Air Canada">Air Canada</option>
                                                <option value="Alaska Airlines">Alaska Airlines</option>
                                                <option value="JetBlue Airways">JetBlue Airways</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- End column -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect04">From:</label>
                                            </div>
                                            <select class="form-select" name="since" id="inputGroupSelect04">
                                                <option selected value="{{ $unit->since }}">{{ $unit->since }}</option>
                                                <option value="USA">USA</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Canada">Canada</option>
                                                <option value="UAE">UAE</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- End column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect05">To:</label>
                                            </div>
                                            <select class="form-select" name="toward" id="inputGroupSelect05">
                                                <option selected value="{{ $unit->toward }}">{{ $unit->toward }}</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Australia">Australia</option>
                                                <option value="India">India</option>
                                                <option value="Pakistan">Pakistan</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- End column -->
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect06">Flight
                                                    Duration:</label>
                                            </div>
                                            <select class="form-select" name="duration" id="inputGroupSelect06">
                                                <option selected value="{{ $unit->duration }}">{{ $unit->duration }}
                                                </option>
                                                <option value="2 Hours">2 Hours</option>
                                                <option value="4 Hours">4 Hours</option>
                                                <option value="5 Hours">5 Hours</option>
                                                <option value="6 Hours">6 Hours</option>
                                                <option value="8 Hours">8 Hours</option>
                                                <option value="12 Hours">12 Hours</option>
                                                <option value="14 Hours">14 Hours</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- End column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect07">Stops:</label>
                                            </div>
                                            <select class="form-select" name="stops" id="inputGroupSelect07">
                                                <option selected value="{{ $unit->stops }}">{{ $unit->stops }}</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- End column -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect08" class="">Departure Date:</label>
                                        <input type="date" class="form-control" name="departure_date" required
                                            value="{{ $unit->departure_date }}" id="inputGroupSelect08" />
                                    </div><!-- end form-group -->
                                </div><!-- End column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="inputGroupSelect09" class="">Return Date:</label>
                                        <input type="date" class="form-control" name="return_day" required
                                            value="{{ $unit->return_day }}" id="inputGroupSelect09" />
                                    </div><!-- end form-group -->
                                </div><!-- End column -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect10">Ticket
                                                    Class:</label>
                                            </div>
                                            <select class="form-select" name="class" id="inputGroupSelect10">
                                                <option selected value="{{ $unit->class }}">{{ $unit->class }}</option>
                                                <option value="Economy Class">Economy Class</option>
                                                <option value="Business Class">Business Class</option>
                                                <option value="First Class">First Class</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- End column -->
                                <div class="col-md">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect11">Price:</label>
                                            </div>
                                            <select class="form-select" name="price" id="inputGroupSelect11">
                                                <option selected value="{{ $unit->price }}">{{ $unit->price }}</option>
                                                <option value="100">100 $</option>
                                                <option value="200">200 $</option>
                                                <option value="300">300 $</option>
                                                <option value="350">350 $</option>
                                                <option value="400">400 $</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- End column -->
                            </div><!-- end row -->
                            <div class="row">
                                <div class="col-md p-0">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect12">Aircraft:</label>
                                            </div>
                                            <select class="form-select" name="aircraft" id="inputGroupSelect12">
                                                <option selected value="{{ $unit->aircraft }}">{{ $unit->aircraft }}
                                                </option>
                                                <option value="Boeing 777-300ER">Boeing 777-300ER</option>
                                                <option value="Airbus A380-800">Airbus A380-800</option>
                                                <option value="Boeing 737-800">Boeing 737-800</option>
                                            </select>
                                        </div>
                                    </div><!-- end form-group -->
                                </div><!-- End column -->
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
                                <textarea class="form-control textarea text-start p-3" name="features" id="exampleFormControlTextarea1"
                                    rows="5" placeholder="Features">{{ $unit->features }}</textarea>
                            </div><!-- end form-group -->

                            <div class="form-group">
                                <textarea class="form-control textarea text-start p-3" name="details" id="exampleFormControlTextarea1"
                                    rows="5" placeholder="Details">{{ $unit->details }}</textarea>
                            </div><!-- end form-group -->
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <button class="btn" type="submit">Update</button>
                                </li>
                                <li class="list-inline-item">
                                    <button class="btn">Cancel</button>
                                </li>
                            </ul>
                        </form>
                    </div><!-- end flight-listing-form -->
                </div><!-- end box -->
            </div><!-- end in-content-wrapper -->
        </div><!-- end flight-add-details -->
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
