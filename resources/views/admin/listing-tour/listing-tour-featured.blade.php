@extends('layouts.bar')

@section('title', 'Tour Listing Featured')

@section('content')
	
		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content tour-listing-content">
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
								<div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Featured
								</div>
							</div><!-- end breadcrumb -->
						</div><!-- End column -->
					</div><!-- end row -->

					<div class="box">
						<div class="row no-gutters">
							<div class="col-auto me-auto text-start pe-0">
								<div class="add-new">
									<a href="listing-tour-create">Add New<i class="fas fa-plus"></i></a>
								</div><!-- End add-new-->
							</div><!-- End column-->
							<div class="col text-end">
								<div class="tools-btns">
									<a href="#"><i class="fas fa-print" data-bs-toggle="tooltip" data-html="true" title="Print"></i></a>
									<a href="#"><i class="fas fa-file-pdf" data-bs-toggle="tooltip" data-html="true" title="Pdf"></i></a>
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
											<th>Country</th>
											<th>Duration</th>
											<th>Cost</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>


										<tr>
											<td><img src="{{ asset('vendors/admin/images/tour4.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
											<td>214</td>
											<td><a href="#">Business Tour</a></td>
											<td><a href="#">Paris</a></td>
											<td>4 Days</td>
											<td>300$</td>
											<td class="featured"><a href="#">Featured</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr>
											<td><img src="{{ asset('vendors/admin/images/tour4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
											</td>
											<td>214</td>
											<td><a href="#">Vacational Tour</a></td>
											<td><a href="#">USA</a></td>
											<td>1 Day</td>
											<td>100$</td>
											<td class="featured"><a href="#">Featured</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>

										<tr>
											<td><img src="{{ asset('vendors/admin/images/tour4.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
											<td>214</td>
											<td><a href="#">Business Tour</a></td>
											<td><a href="#">Paris</a></td>
											<td>4 Days</td>
											<td>300$</td>
											<td class="featured"><a href="#">Featured</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr>
											<td><img src="{{ asset('vendors/admin/images/tour4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
											</td>
											<td>214</td>
											<td><a href="#">Vacational Tour</a></td>
											<td><a href="#">USA</a></td>
											<td>1 Day</td>
											<td>100$</td>
											<td class="featured"><a href="#">Featured</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>

										<tr>
											<td><img src="{{ asset('vendors/admin/images/tour4.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
											<td>214</td>
											<td><a href="#">Business Tour</a></td>
											<td><a href="#">Paris</a></td>
											<td>4 Days</td>
											<td>300$</td>
											<td class="featured"><a href="#">Featured</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr>
											<td><img src="{{ asset('vendors/admin/images/tour4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
											</td>
											<td>214</td>
											<td><a href="#">Vacational Tour</a></td>
											<td><a href="#">USA</a></td>
											<td>1 Day</td>
											<td>100$</td>
											<td class="featured"><a href="#">Featured</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>

										<tr>
											<td><img src="{{ asset('vendors/admin/images/tour4.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
											<td>214</td>
											<td><a href="#">Business Tour</a></td>
											<td><a href="#">Paris</a></td>
											<td>4 Days</td>
											<td>300$</td>
											<td class="featured"><a href="#">Featured</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr>
											<td><img src="{{ asset('vendors/admin/images/tour4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
											</td>
											<td>214</td>
											<td><a href="#">Vacational Tour</a></td>
											<td><a href="#">USA</a></td>
											<td>1 Day</td>
											<td>100$</td>
											<td class="featured"><a href="#">Featured</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>

										<tr>
											<td><img src="{{ asset('vendors/admin/images/tour4.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
											<td>214</td>
											<td><a href="#">Business Tour</a></td>
											<td><a href="#">Paris</a></td>
											<td>4 Days</td>
											<td>300$</td>
											<td class="featured"><a href="#">Featured</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr>
											<td><img src="{{ asset('vendors/admin/images/tour4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
											</td>
											<td>214</td>
											<td><a href="#">Vacational Tour</a></td>
											<td><a href="#">USA</a></td>
											<td>1 Day</td>
											<td>100$</td>
											<td class="featured"><a href="#">Featured</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>

										<tr>
											<td><img src="i{{ asset('vendors/admin/mages/tour4.jpg"') }} alt="table-img" class="img-fluid rounded-circle"></td>
											<td>214</td>
											<td><a href="#">Business Tour</a></td>
											<td><a href="#">Paris</a></td>
											<td>4 Days</td>
											<td>300$</td>
											<td class="featured"><a href="#">Featured</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr>
											<td><img src="{{ asset('vendors/admin/images/tour4.jpg') }}" alt="table-img" class="img-fluid rounded-circle" width="40px">
											</td>
											<td>214</td>
											<td><a href="#">Vacational Tour</a></td>
											<td><a href="#">USA</a></td>
											<td>1 Day</td>
											<td>100$</td>
											<td class="featured"><a href="#">Featured</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>

									</tbody>
								</table>
							</div><!-- end column -->
						</div><!-- end row -->
					</div><!-- end box -->
				</div><!-- end in-content-wrapper -->
			</div><!-- end tour-listing-content -->
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
		$(document).ready(function () {
			$('#example').DataTable();
		});
	</script>

@endsection