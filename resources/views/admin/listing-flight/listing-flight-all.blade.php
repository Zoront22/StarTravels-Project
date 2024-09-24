@extends('layouts.bar')

@section('title', 'Flight Listing')

@section('content')

    <!-- ===========Innerpage-wrapper============= -->
    <section>
        <div class="content flight-listing-content">
            <div class="in-content-wrapper">
                <div class="row no-gutters">

                    <div class="col">
                        <div class="heading-messages">
                            <h3>Flight Listing</h3>
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
                                <a href="{{ route('listing-flight.create') }}">Add New<i class="fas fa-plus"></i></a>
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
                                        <th>Title</th>
                                        <th>Airline</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Departure Date</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data as $unit)
                                        <tr>
                                            <td><img src="{{ asset('vendors/admin/images/plane3.jpg') }}" alt="table-img"
                                                    class="img-fluid rounded-circle" width="40px">
                                            </td>
                                            <td>{{ $unit->id }}</td>
                                            <td><a href="#">{{ $unit->name }}</a></td>
                                            <td><a href="#">{{ $unit->airline }}</a></td>
                                            <td>{{ $unit->since }}</td>
                                            <td>{{ $unit->toward }}</td>
                                            <td>{{ $unit->departure_date }}</td>
                                            <td>${{ $unit->price }}</td>
                                            <td
                                                class="
                                                @if ($unit->status === 'draft') draft
                                                @elseif ($unit->status === 'active') active
                                                @elseif ($unit->status === 'expired') expired
                                                @elseif ($unit->status === 'featured') featured @endif">
                                                <a href="javascript:void(0);"
                                                    onclick="updateStatus('{{ $unit->id }}', getNextStatus('{{ $unit->status }}'))">
                                                    {{ ucfirst($unit->status) }}
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('listing-flight.edit', $unit->id) }}"><i
                                                        class="fas fa-edit"></i></a>

                                                <!--Method DELETE-->
                                                <a href="{{ route('listing-flight.destroy', $unit->id) }}" type="submit"
                                                    onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this drive?')) document.getElementById('delete-form-{{ $unit->id }}').submit();"><i
                                                        class="fas fa-trash-alt"></i></a>
                                                <form id="delete-form-{{ $unit->id }}"
                                                    action="{{ route('listing-flight.destroy', $unit->id) }}"
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
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane2.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                                                                           </td>
                                                                                                                           <td>120</td>
                                                                                                                           <td><a href="#">Business Tour</a></td>
                                                                                                                           <td><a href="#">Air Canada</a></td>
                                                                                                                           <td>UAE</td>
                                                                                                                           <td>England</td>
                                                                                                                           <td>5/5/2019</td>
                                                                                                                           <td>350$</td>
                                                                                                                           <td class="expired"><a href="#">Expired</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane1.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                                                                           <td>212</td>
                                                                                                                           <td><a href="#">Vacational Tour</a></td>
                                                                                                                           <td><a href="#">Alaska Airlines</a></td>
                                                                                                                           <td>Dubai</td>
                                                                                                                           <td>Canada</td>
                                                                                                                           <td>4/3/2019</td>
                                                                                                                           <td>200$</td>
                                                                                                                           <td class="draft"><a href="#">Draft</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane4.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                                                                           <td>214</td>
                                                                                                                           <td><a href="#">Business Tour</a></td>
                                                                                                                           <td><a href="#">JetBlue Airways</a></td>
                                                                                                                           <td>USA</td>
                                                                                                                           <td>Canada</td>
                                                                                                                           <td>7/2/2019</td>
                                                                                                                           <td>300$</td>
                                                                                                                           <td class="featured"><a href="#">Featured</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                                                                           </td>
                                                                                                                           <td>214</td>
                                                                                                                           <td><a href="#">Vacational Tour</a></td>
                                                                                                                           <td><a href="#">American Airlines</a></td>
                                                                                                                           <td>Canada</td>
                                                                                                                           <td>USA</td>
                                                                                                                           <td>9/4/2019</td>
                                                                                                                           <td>100$</td>
                                                                                                                           <td class="featured"><a href="#">Featured</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane3.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                                                                           </td>
                                                                                                                           <td>110</td>
                                                                                                                           <td><a href="#">Visit</a></td>
                                                                                                                           <td><a href="#">American Airlines</a></td>
                                                                                                                           <td>USA</td>
                                                                                                                           <td>Paksitan</td>
                                                                                                                           <td>6/6/2019</td>
                                                                                                                           <td>100$</td>
                                                                                                                           <td class="active"><a href="#">Active</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane2.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                                                                           </td>
                                                                                                                           <td>120</td>
                                                                                                                           <td><a href="#">Business Tour</a></td>
                                                                                                                           <td><a href="#">Air Canada</a></td>
                                                                                                                           <td>UAE</td>
                                                                                                                           <td>England</td>
                                                                                                                           <td>5/5/2019</td>
                                                                                                                           <td>350$</td>
                                                                                                                           <td class="expired"><a href="#">Expired</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane1.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                                                                           <td>212</td>
                                                                                                                           <td><a href="#">Vacational Tour</a></td>
                                                                                                                           <td><a href="#">Alaska Airlines</a></td>
                                                                                                                           <td>Dubai</td>
                                                                                                                           <td>Canada</td>
                                                                                                                           <td>4/3/2019</td>
                                                                                                                           <td>200$</td>
                                                                                                                           <td class="draft"><a href="#">Draft</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane4.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                                                                           <td>214</td>
                                                                                                                           <td><a href="#">Business Tour</a></td>
                                                                                                                           <td><a href="#">JetBlue Airways</a></td>
                                                                                                                           <td>USA</td>
                                                                                                                           <td>Canada</td>
                                                                                                                           <td>7/2/2019</td>
                                                                                                                           <td>300$</td>
                                                                                                                           <td class="featured"><a href="#">Featured</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                                                                           </td>
                                                                                                                           <td>214</td>
                                                                                                                           <td><a href="#">Vacational Tour</a></td>
                                                                                                                           <td><a href="#">American Airlines</a></td>
                                                                                                                           <td>Canada</td>
                                                                                                                           <td>USA</td>
                                                                                                                           <td>9/4/2019</td>
                                                                                                                           <td>100$</td>
                                                                                                                           <td class="featured"><a href="#">Featured</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane3.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                                                                           </td>
                                                                                                                           <td>110</td>
                                                                                                                           <td><a href="#">Visit</a></td>
                                                                                                                           <td><a href="#">American Airlines</a></td>
                                                                                                                           <td>USA</td>
                                                                                                                           <td>Paksitan</td>
                                                                                                                           <td>6/6/2019</td>
                                                                                                                           <td>100$</td>
                                                                                                                           <td class="active"><a href="#">Active</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane2.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                                                                           </td>
                                                                                                                           <td>120</td>
                                                                                                                           <td><a href="#">Business Tour</a></td>
                                                                                                                           <td><a href="#">Air Canada</a></td>
                                                                                                                           <td>UAE</td>
                                                                                                                           <td>England</td>
                                                                                                                           <td>5/5/2019</td>
                                                                                                                           <td>350$</td>
                                                                                                                           <td class="expired"><a href="#">Expired</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane1.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                                                                           <td>212</td>
                                                                                                                           <td><a href="#">Vacational Tour</a></td>
                                                                                                                           <td><a href="#">Alaska Airlines</a></td>
                                                                                                                           <td>Dubai</td>
                                                                                                                           <td>Canada</td>
                                                                                                                           <td>4/3/2019</td>
                                                                                                                           <td>200$</td>
                                                                                                                           <td class="draft"><a href="#">Draft</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane4.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                                                                           <td>214</td>
                                                                                                                           <td><a href="#">Business Tour</a></td>
                                                                                                                           <td><a href="#">JetBlue Airways</a></td>
                                                                                                                           <td>USA</td>
                                                                                                                           <td>Canada</td>
                                                                                                                           <td>7/2/2019</td>
                                                                                                                           <td>300$</td>
                                                                                                                           <td class="featured"><a href="#">Featured</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                                                                           </td>
                                                                                                                           <td>214</td>
                                                                                                                           <td><a href="#">Vacational Tour</a></td>
                                                                                                                           <td><a href="#">American Airlines</a></td>
                                                                                                                           <td>Canada</td>
                                                                                                                           <td>USA</td>
                                                                                                                           <td>9/4/2019</td>
                                                                                                                           <td>100$</td>
                                                                                                                           <td class="featured"><a href="#">Featured</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane3.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                                                                           </td>
                                                                                                                           <td>110</td>
                                                                                                                           <td><a href="#">Visit</a></td>
                                                                                                                           <td><a href="#">American Airlines</a></td>
                                                                                                                           <td>USA</td>
                                                                                                                           <td>Paksitan</td>
                                                                                                                           <td>6/6/2019</td>
                                                                                                                           <td>100$</td>
                                                                                                                           <td class="active"><a href="#">Active</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane2.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                                                                           </td>
                                                                                                                           <td>120</td>
                                                                                                                           <td><a href="#">Business Tour</a></td>
                                                                                                                           <td><a href="#">Air Canada</a></td>
                                                                                                                           <td>UAE</td>
                                                                                                                           <td>England</td>
                                                                                                                           <td>5/5/2019</td>
                                                                                                                           <td>350$</td>
                                                                                                                           <td class="expired"><a href="#">Expired</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane1.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                                                                           <td>212</td>
                                                                                                                           <td><a href="#">Vacational Tour</a></td>
                                                                                                                           <td><a href="#">Alaska Airlines</a></td>
                                                                                                                           <td>Dubai</td>
                                                                                                                           <td>Canada</td>
                                                                                                                           <td>4/3/2019</td>
                                                                                                                           <td>200$</td>
                                                                                                                           <td class="draft"><a href="#">Draft</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane4.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                                                                           <td>214</td>
                                                                                                                           <td><a href="#">Business Tour</a></td>
                                                                                                                           <td><a href="#">JetBlue Airways</a></td>
                                                                                                                           <td>USA</td>
                                                                                                                           <td>Canada</td>
                                                                                                                           <td>7/2/2019</td>
                                                                                                                           <td>300$</td>
                                                                                                                           <td class="featured"><a href="#">Featured</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                                                                           </td>
                                                                                                                           <td>214</td>
                                                                                                                           <td><a href="#">Vacational Tour</a></td>
                                                                                                                           <td><a href="#">American Airlines</a></td>
                                                                                                                           <td>Canada</td>
                                                                                                                           <td>USA</td>
                                                                                                                           <td>9/4/2019</td>
                                                                                                                           <td>100$</td>
                                                                                                                           <td class="featured"><a href="#">Featured</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane3.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                                                                           </td>
                                                                                                                           <td>110</td>
                                                                                                                           <td><a href="#">Visit</a></td>
                                                                                                                           <td><a href="#">American Airlines</a></td>
                                                                                                                           <td>USA</td>
                                                                                                                           <td>Paksitan</td>
                                                                                                                           <td>6/6/2019</td>
                                                                                                                           <td>100$</td>
                                                                                                                           <td class="active"><a href="#">Active</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane2.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                                                                           </td>
                                                                                                                           <td>120</td>
                                                                                                                           <td><a href="#">Business Tour</a></td>
                                                                                                                           <td><a href="#">Air Canada</a></td>
                                                                                                                           <td>UAE</td>
                                                                                                                           <td>England</td>
                                                                                                                           <td>5/5/2019</td>
                                                                                                                           <td>350$</td>
                                                                                                                           <td class="expired"><a href="#">Expired</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane1.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                                                                           <td>212</td>
                                                                                                                           <td><a href="#">Vacational Tour</a></td>
                                                                                                                           <td><a href="#">Alaska Airlines</a></td>
                                                                                                                           <td>Dubai</td>
                                                                                                                           <td>Canada</td>
                                                                                                                           <td>4/3/2019</td>
                                                                                                                           <td>200$</td>
                                                                                                                           <td class="draft"><a href="#">Draft</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane4.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
                                                                                                                           <td>214</td>
                                                                                                                           <td><a href="#">Business Tour</a></td>
                                                                                                                           <td><a href="#">JetBlue Airways</a></td>
                                                                                                                           <td>USA</td>
                                                                                                                           <td>Canada</td>
                                                                                                                           <td>7/2/2019</td>
                                                                                                                           <td>300$</td>
                                                                                                                           <td class="featured"><a href="#">Featured</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                          <tr>
                                                                                                                           <td><img src="{{ asset('vendors/admin/images/plane4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
                                                                                                                           </td>
                                                                                                                           <td>214</td>
                                                                                                                           <td><a href="#">Vacational Tour</a></td>
                                                                                                                           <td><a href="#">American Airlines</a></td>
                                                                                                                           <td>Canada</td>
                                                                                                                           <td>USA</td>
                                                                                                                           <td>9/4/2019</td>
                                                                                                                           <td>100$</td>
                                                                                                                           <td class="featured"><a href="#">Featured</a></td>
                                                                                                                           <td>
                                                                                                                            <a href="#"><i class="fas fa-edit"></i></a>
                                                                                                                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                                                                                                                           </td>
                                                                                                                          </tr>
                                                                                                                                                    -->

                                </tbody>
                            </table>
                        </div><!-- End column -->
                    </div><!-- end row -->
                </div><!-- end box -->
            </div><!-- end in-content-wrapper -->
        </div><!-- end flight-listing-content -->
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

    <script>
        function getNextStatus(currentStatus) {
            switch (currentStatus) {
                case 'active':
                    return 'draft';
                case 'draft':
                    return 'expired';
                case 'expired':
                    return 'featured';
                case 'featured':
                    return 'active';
                default:
                    return 'active';
            }
        }

        function updateStatus(unitId, newStatus) {
            $.ajax({
                url: '{{ route('listing-flight.updateStatus') }}', // Controller Route
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}', // Send Token
                    id: unitId,
                    status: newStatus
                },
                success: function(response) {
                    // alert('Estado actualizado con éxito');
                    location.reload(); // Reload page
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                    alert('Error al actualizar el estado');
                }
            });
        }
    </script>

@endsection
