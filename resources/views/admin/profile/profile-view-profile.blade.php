@extends('layouts.bar')

@section('title', 'View Profile')

@section('content')
	
		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content profile view-profile">

				<div class="row no-gutters">

					<div class="col">
						<div class="heading-messages">
							<h3>Profile</h3>
						</div>
					</div>
					<div class="col-md-4">
						<div class="breadcrumb">
							<div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Profile</a>
							</div>
							<div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>View Profile
							</div>
						</div><!-- end breadcrumb -->
					</div><!-- End column -->

				</div><!-- end row -->
				<div class="box">
					<div class="row">
						<div class="col">
							<div class="details-text">
								<h4>Profile Details</h4>
							</div><!-- end details-text -->
						</div><!-- end -->
					</div><!-- end row -->

					<div class="row">
						<div class="col-sm-8">

							<div class="profile-padding">
								<div class="row">
									<div class="col-sm-6 col-5">

										<div class="heading-part">
											<p for="Name">Name:</p>

											<p for="LastName">Last Name:</p>

											<p for="inputPassword4">Telephone:</p>

											<p for="inputEmail4">Email:</p>
										</div><!-- end heading-part -->
									</div><!-- end column -->

									<div class="col-sm-6 col-7">

										<div class="details-part">
											<p>John</p>

											<p>Doe</p>

											<p>9200222934</p>

											<p>johndoe@yahoo.com</p>
										</div><!-- end details-part -->

									</div><!-- end column -->
								</div><!-- end row -->

								<div class="personal-info">
									<h6 for="exampleFormControlTextarea1">Details</h6>
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos labore enim
										maiores beatae. Magni asperiores necessitatibus saepe eaque reprehenderit.
									</p>
								</div><!-- end personal-info -->
							</div><!-- end profile-padding -->

						</div><!-- End column -->
						<div class="col">
							<div class="upload-photo-wrapper">
								<div class="upload-heading">
									<h5>Photo</h5>
								</div><!-- end upload-heading -->

								<div action="/upload" class="dropzone needsclick dz-clickable" id="demo-upload">
									<div class="dz-message">
										<h1>
											<i class="fas fa-camera"></i>
										</h1>
									</div>
								</div><!-- end dropzone -->
							</div><!-- end upload-photo-wrapper -->

						</div><!-- End column -->
					</div><!-- end row -->
				</div><!-- end box -->
			</div><!-- end view-profile -->
		</section>
		<!-- ===========End Innerpage-wrapper============= -->

	</div><!-- end wrapper -->














	<!-- Optional JavaScript, Not optional it's need too -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{ asset('vendors/admin/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('vendors/admin/js/popper.min.js') }}"></script>
	<script src="{{ asset('vendors/admin/js/bootstrap-5.3.2.min.js') }}"></script>
	<script src="{{ asset('vendors/admin/vendors/datatables/datatables.min.js') }}"></script>
	<script src="{{ asset('vendors/admin/vendors/dropzone-5.5.0/dist/min/dropzone.min.js') }}"></script>
	<script src="{{ asset('vendors/admin/js/customscriptfile.js') }}"></script>

	<!-- Page Scripts Ends -->


@endsection