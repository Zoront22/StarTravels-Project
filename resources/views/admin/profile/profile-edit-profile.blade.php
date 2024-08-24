@extends('layouts.bar')

@section('title', 'Edith Profile')

@section('content')
	
		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content add-details profile">
				<div class="in-content-wrapper">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Profile</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						<div class="col-md-4">
							<div class="breadcrumb">
								<div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Profile</a>
								</div>
								<div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Edit Profile
								</div>
							</div><!-- end breadcrumb -->
						</div><!-- End column -->

					</div><!-- end row -->

					<div class="box">

						<div class="row">
							<div class="col">
								<div class="details-text">
									<h4>Edit Profile Details</h4>
								</div><!-- end details-text -->
							</div><!-- end column -->
						</div><!-- end row -->
						<div class="hotel-listing-form">
							<form class="text-center">
								<div class="row">
									<div class="col-sm-8">
										<div class="row">
											<div class="col-md">
												<div class="form-group">
													<label for="to" class="">Name:</label>
													<input type="text" class="form-control" required id="to">
												</div><!-- end form-group -->
											</div><!-- end column -->
											<div class="col-md">
												<div class="form-group">
													<label for="to1" class="">Last Name</label>
													<input type="text" class="form-control" required id="to1">
												</div><!-- end form-group -->
											</div><!-- end column -->
										</div><!-- end row -->

										<div class="row">
											<div class="col-md">
												<div class="form-group">
													<label for="to2" class="">Telephone # :</label>
													<input type="text" class="form-control" required id="to2">
												</div><!-- end form-group -->
											</div><!-- end column -->
											<div class="col-md">
												<div class="form-group">
													<label for="to3" class="">Email:</label>
													<input type="text" class="form-control" required id="to3">
												</div><!-- end form-group -->
											</div><!-- end column -->
										</div><!-- end row -->

										<div class="form-group">
											<textarea class="form-control textarea text-start p-3" id="exampleFormControlTextarea1" rows="5"
												placeholder="Room Details"></textarea>
										</div><!-- end form-group -->
										<ul class="list-inline">
											<li class="list-inline-item">
												<button type="submit" class="btn">Submit</button>
											</li>
											<li class="list-inline-item">
												<button type="submit" class="btn">Cancel</button>
											</li>
										</ul>
									</div><!-- end column -->
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

									</div><!-- end column -->
								</div><!-- end row -->

							</form>
						</div><!-- end hotel-listing-form -->
					</div><!-- end box -->
				</div><!-- end in-content-wrapper -->
			</div><!-- end profile -->
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