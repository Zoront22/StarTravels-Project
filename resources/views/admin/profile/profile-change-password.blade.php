@extends('layouts.bar')

@section('title', 'Profile Change Password')

@section('content')
	
		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content add-details change-password">
				<div class="in-content-wrapper">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Profile</h3>
							</div> <!-- End heading-messages -->
						</div> <!-- End column -->
						<div class="col-md-4">
							<div class="breadcrumb">
								<div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Profile</a>
								</div>
								<div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Edit Profile
								</div>
							</div><!-- End breadcrumb-->
						</div><!-- End column -->

					</div><!-- End row -->

					<div class="box">

						<div class="row">
							<div class="col">
								<div class="details-text">
									<h4>Change Password</h4>
								</div><!-- End details-text -->
							</div><!-- End column -->
						</div><!-- End row -->
						<div class="hotel-listing-form">
							<form class="text-center">
								<div class="row">
									<div class="col">
										<div class="row">
											<div class="col-md">
												<div class="form-group">
													<label for="to" class="">Old Password:</label>
													<input type="password" class="form-control" required id="to">
												</div><!-- end form-group -->
											</div><!-- End column -->
										</div><!-- End row -->
										<div class="row">
											<div class="col-md">
												<div class="form-group">
													<label for="to1" class="">New Password:</label>
													<input type="password" class="form-control" required id="to1">
												</div><!-- end form-group -->
											</div><!-- end column -->
										</div><!-- end row -->
										<div class="row">
											<div class="col-md">
												<div class="form-group">
													<label for="to2" class="">Repeat Password:</label>
													<input type="password" class="form-control" required id="to2">
												</div><!-- end form-group -->
											</div><!-- End column -->
										</div><!-- End row -->

										<ul class="list-inline">
											<li class="list-inline-item">
												<button type="submit" class="btn">Update</button>
											</li>
											<li class="list-inline-item">
												<button type="submit" class="btn">Cancel</button>
											</li>
										</ul>
									</div><!-- End column -->
								</div><!-- End row -->

							</form>
						</div><!-- End hotel-listing-form -->
					</div><!-- End Box -->
				</div><!-- End in-content-wrapper -->
			</div><!-- End change-password -->
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

	@endsection