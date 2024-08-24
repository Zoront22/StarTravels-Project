@extends('layouts.bar')

@section('title', 'Hotel Listing')

@section('content')

    <!-- ===========Innerpage-wrapper============= -->
    <section>
        <div class="content listing-content">
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
                            <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>All
                            </div>
                        </div><!-- end breadcrumb -->
                    </div><!-- End column -->
                </div><!-- end row -->

                <div class="box">
                    <div class="row no-gutters">
                        <div class="col-auto me-auto text-start pe-0">
                            <div class="add-new">
                                <a href="{{ route('listing-hotel.create') }}">Add New<i class="fas fa-plus"></i></a>
                            </div><!-- End add-new-->
                        </div><!-- End column-->
                        <div class="col text-end">
                            <div class="tools-btns">
                                <a href="#"><i class="fas fa-print" data-bs-toggle="tooltip" data-html="true"
                                        title="Print"></i></a>
                                <a href="#"><i class="fas fa-file-pdf" data-bs-toggle="tooltip" data-html="true"
                                        title="Pdf"></i></a>
                                <a href="#"><i class="fas fa-file-excel" data-bs-toggle="tooltip" data-html="true"
                                        title="Excel"></i></a>
                            </div><!-- End tool-btns-->
                        </div><!-- End text-end-->

                    </div><!-- end row -->
                    <div class="row no-gutters">
                        <div class="col-12 table-responsive">
                            <table id="example" class="table table-hover responsive listing">
                                <thead>
                                    <tr>
                                        <th>Img</th>
                                        <th>#</th>
                                        <th>Type</th>
                                        <th>AC/Non AC</th>
                                        <th>Meal</th>
                                        <th>Capacity</th>
                                        <th>Status</th>
                                        <th>Phone</th>
                                        <th>Rent</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data as $unit)
                                        <tr>
                                            <td><img src="{{ asset('vendors/admin/images/hotel3.jpg') }}" alt="table-img"
                                                    class="img-fluid rounded-circle" width="40px">
                                            </td>
                                            <td>{{ $unit->id }}</td>
                                            <td><a href="#">{{ $unit->type }}</a></td>
                                            <td><a href="#">{{ $unit->ac }}</a></td>
                                            <td>{{ $unit->meal }}</td>
                                            <td>{{ $unit->capacity }}</td>
                                            <td class="active"><a href="#">Active</a></td>
                                            <td>{{ $unit->phone }}</td>
                                            <td>${{ $unit->rent }}</td>
                                            <td>
                                                <a href="{{ route('listing-hotel.edit', $unit->id) }}"><i
                                                        class="fas fa-edit"></i></a>
                                                <!--Method DELETE-->
                                                <a href="{{ route('listing-hotel.destroy', $unit->id) }}" type="submit"
                                                    onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this drive?')) document.getElementById('delete-form-{{ $unit->id }}').submit();"><i
                                                        class="fas fa-trash-alt"></i></a>
                                                <form id="delete-form-{{ $unit->id }}"
                                                    action="{{ route('listing-hotel.destroy', $unit->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                                <!--End method DELETE-->
                                            </td>
                                        </tr>
                                    @endforeach

                                    <!--
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel2.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>209</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>4</td>
                                                                               <td class="expired"><a href="#">Expired</a></td>
                                                                               <td>12312335</td>
                                                                               <td>45$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel1.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                               <td>212</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">Non-AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>4</td>
                                                                               <td class="draft"><a href="#">Draft</a></td>
                                                                               <td>12312335</td>
                                                                               <td>25$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel4.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>1</td>
                                                                               <td class="featured"><a href="#">Featured</a></td>
                                                                               <td>12312335</td>
                                                                               <td>50$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">Non-AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>2</td>
                                                                               <td class="featured"><a href="#">Featured</a></td>
                                                                               <td>12312335</td>
                                                                               <td>40$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel3.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>2</td>
                                                                               <td class="active"><a href="#">Active</a></td>
                                                                               <td>12312335</td>
                                                                               <td>25$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel3.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>209</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>1</td>
                                                                               <td class="active"><a href="#">Active</a></td>
                                                                               <td>12312335</td>
                                                                               <td>30$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel2.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>209</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>4</td>
                                                                               <td class="expired"><a href="#">Expired</a></td>
                                                                               <td>12312335</td>
                                                                               <td>45$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel1.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                               <td>212</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">Non-AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>4</td>
                                                                               <td class="draft"><a href="#">Draft</a></td>
                                                                               <td>12312335</td>
                                                                               <td>25$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel4.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>1</td>
                                                                               <td class="featured"><a href="#">Featured</a></td>
                                                                               <td>12312335</td>
                                                                               <td>50$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">Non-AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>2</td>
                                                                               <td class="featured"><a href="#">Featured</a></td>
                                                                               <td>12312335</td>
                                                                               <td>40$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel3.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>2</td>
                                                                               <td class="active"><a href="#">Active</a></td>
                                                                               <td>12312335</td>
                                                                               <td>25$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel3.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>209</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>1</td>
                                                                               <td class="active"><a href="#">Active</a></td>
                                                                               <td>12312335</td>
                                                                               <td>30$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel2.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>209</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>4</td>
                                                                               <td class="expired"><a href="#">Expired</a></td>
                                                                               <td>12312335</td>
                                                                               <td>45$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel1.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                               <td>212</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">Non-AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>4</td>
                                                                               <td class="draft"><a href="#">Draft</a></td>
                                                                               <td>12312335</td>
                                                                               <td>25$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel4.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>1</td>
                                                                               <td class="featured"><a href="#">Featured</a></td>
                                                                               <td>12312335</td>
                                                                               <td>50$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">Non-AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>2</td>
                                                                               <td class="featured"><a href="#">Featured</a></td>
                                                                               <td>12312335</td>
                                                                               <td>40$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel3.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>2</td>
                                                                               <td class="active"><a href="#">Active</a></td>
                                                                               <td>12312335</td>
                                                                               <td>25$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel3.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>209</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>1</td>
                                                                               <td class="active"><a href="#">Active</a></td>
                                                                               <td>12312335</td>
                                                                               <td>30$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel2.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>209</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>4</td>
                                                                               <td class="expired"><a href="#">Expired</a></td>
                                                                               <td>12312335</td>
                                                                               <td>45$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel1.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                               <td>212</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">Non-AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>4</td>
                                                                               <td class="draft"><a href="#">Draft</a></td>
                                                                               <td>12312335</td>
                                                                               <td>25$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel4.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>1</td>
                                                                               <td class="featured"><a href="#">Featured</a></td>
                                                                               <td>12312335</td>
                                                                               <td>50$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">Non-AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>2</td>
                                                                               <td class="featured"><a href="#">Featured</a></td>
                                                                               <td>12312335</td>
                                                                               <td>40$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel3.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>2</td>
                                                                               <td class="active"><a href="#">Active</a></td>
                                                                               <td>12312335</td>
                                                                               <td>25$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel3.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>209</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>1</td>
                                                                               <td class="active"><a href="#">Active</a></td>
                                                                               <td>12312335</td>
                                                                               <td>30$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel2.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>209</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>4</td>
                                                                               <td class="expired"><a href="#">Expired</a></td>
                                                                               <td>12312335</td>
                                                                               <td>45$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel1.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                               <td>212</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">Non-AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>4</td>
                                                                               <td class="draft"><a href="#">Draft</a></td>
                                                                               <td>12312335</td>
                                                                               <td>25$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel4.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>1</td>
                                                                               <td class="featured"><a href="#">Featured</a></td>
                                                                               <td>12312335</td>
                                                                               <td>50$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">Non-AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>2</td>
                                                                               <td class="featured"><a href="#">Featured</a></td>
                                                                               <td>12312335</td>
                                                                               <td>40$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel3.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>2</td>
                                                                               <td class="active"><a href="#">Active</a></td>
                                                                               <td>12312335</td>
                                                                               <td>25$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel3.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>209</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>1</td>
                                                                               <td class="active"><a href="#">Active</a></td>
                                                                               <td>12312335</td>
                                                                               <td>30$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel2.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>209</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>4</td>
                                                                               <td class="expired"><a href="#">Expired</a></td>
                                                                               <td>12312335</td>
                                                                               <td>45$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel1.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                               <td>212</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">Non-AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>4</td>
                                                                               <td class="draft"><a href="#">Draft</a></td>
                                                                               <td>12312335</td>
                                                                               <td>25$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel4.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>1</td>
                                                                               <td class="featured"><a href="#">Featured</a></td>
                                                                               <td>12312335</td>
                                                                               <td>50$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Double</a></td>
                                                                               <td><a href="#">Non-AC</a></td>
                                                                               <td>Free Lunch</td>
                                                                               <td>2</td>
                                                                               <td class="featured"><a href="#">Featured</a></td>
                                                                               <td>12312335</td>
                                                                               <td>40$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                                              <tr>
                                                                               <td><img src="{{ asset('vendors/admin/images/hotel3.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                               </td>
                                                                               <td>214</td>
                                                                               <td><a href="#">Single</a></td>
                                                                               <td><a href="#">AC</a></td>
                                                                               <td>Free Dinner</td>
                                                                               <td>2</td>
                                                                               <td class="active"><a href="#">Active</a></td>
                                                                               <td>12312335</td>
                                                                               <td>25$</td>
                                                                               <td>
                                                                                <a href="#"><i class="fas fa-edit"></i></a>
                                                                                <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                               </td>
                                                                              </tr>
                                                    -->

                                </tbody>
                            </table>
                        </div><!-- end column -->
                    </div><!-- end row -->
                </div><!-- end box -->
            </div><!-- end in-content-wrapper -->
        </div><!-- end listing-content -->
    </section>
    <!-- ===========End Innerpage-wrapper============= -->

    </div><!-- end wrapper -->














    <!-- Optional JavaScript, Not optional it's need too -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('vendors/admin/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/bootstrap-5.3.2.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/vendors/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/customscriptfile.js') }}"></script>

    <!-- Page Scripts Ends -->


    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

@endsection
