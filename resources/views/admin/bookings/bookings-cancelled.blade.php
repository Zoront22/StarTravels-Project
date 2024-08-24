@extends('layouts.bar')

@section('title', 'Bookings Cancelled')

@section('content')
	
		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content booking-content">
				<div class="in-content-wrapper">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Bookings</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						<div class="col-md-4">
							<div class="breadcrumb">
								<div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Bookings</a>
								</div>
								<div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Cancelled
								</div>
							</div><!-- End Breadcrumb -->
						</div><!-- End column -->
					</div><!-- End row -->
					<div class="box">

						<div class="row no-gutters">
							<div class="col-12 table-responsive">
								<table id="example" class="table display table-hover table-responsive-xl bookings-table">
									<thead>
										<tr>
											<th></th>
											<th>Name</th>
											<th>Mobile</th>
											<th>Email</th>
											<th>Arrive</th>
											<th>Depart</th>
											<th>Booking Type</th>
											<th>Status</th>
											<th>Payment</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td><img src="{{ asset('vendors/admin/images/commenter-3.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
											<td>Mary Jane</td>
											<td><a href="#">967835542</a></td>
											<td><a href="#">Jane@gmail.com</a></td>
											<td>8/06/2019</td>
											<td>12/06/2019</td>
											<td>Cruise</td>
											<td class="cancelled"><a href="#">Cancelled</a></td>
											<td class="unpaid"><a href="#">Unpaid</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr>
											<td><img src="{{ asset('vendors/admin/images/commenter-3.jpg" alt="table-img') }}" class="img-fluid rounded-circle"></td>
											<td>Mary Jane</td>
											<td><a href="#">967835542</a></td>
											<td><a href="#">Jane@gmail.com</a></td>
											<td>8/06/2019</td>
											<td>12/06/2019</td>
											<td>Cruise</td>
											<td class="cancelled"><a href="#">Cancelled</a></td>
											<td class="unpaid"><a href="#">Unpaid</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr>
											<td><img src="{{ asset('vendors/admin/images/commenter-3.jpg" alt="table-img') }}" class="img-fluid rounded-circle"></td>
											<td>Mary Jane</td>
											<td><a href="#">967835542</a></td>
											<td><a href="#">Jane@gmail.com</a></td>
											<td>8/06/2019</td>
											<td>12/06/2019</td>
											<td>Cruise</td>
											<td class="cancelled"><a href="#">Cancelled</a></td>
											<td class="unpaid"><a href="#">Unpaid</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr>
											<td><img src="{{ asset('vendors/admin/images/commenter-3.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
											<td>Mary Jane</td>
											<td><a href="#">967835542</a></td>
											<td><a href="#">Jane@gmail.com</a></td>
											<td>8/06/2019</td>
											<td>12/06/2019</td>
											<td>Cruise</td>
											<td class="cancelled"><a href="#">Cancelled</a></td>
											<td class="unpaid"><a href="#">Unpaid</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr>
											<td><img src="{{ asset('vendors/admin/images/commenter-3.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
											<td>Mary Jane</td>
											<td><a href="#">967835542</a></td>
											<td><a href="#">Jane@gmail.com</a></td>
											<td>8/06/2019</td>
											<td>12/06/2019</td>
											<td>Cruise</td>
											<td class="cancelled"><a href="#">Cancelled</a></td>
											<td class="unpaid"><a href="#">Unpaid</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr>
											<td><img src="{{ asset('vendors/admin/images/commenter-3.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
											<td>Mary Jane</td>
											<td><a href="#">967835542</a></td>
											<td><a href="#">Jane@gmail.com</a></td>
											<td>8/06/2019</td>
											<td>12/06/2019</td>
											<td>Cruise</td>
											<td class="cancelled"><a href="#">Cancelled</a></td>
											<td class="unpaid"><a href="#">Unpaid</a></td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>

									</tbody>
								</table>
							</div><!-- End column-->
						</div><!-- End row -->
					</div><!-- End box -->
				</div><!-- End in-content-wrapper -->
			</div><!-- End booking-content -->
		</section>
		<!-- ===========End Innerpage-wrapper============= -->

	</div><!-- end wrapper -->

	<!--Scripts-->

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
