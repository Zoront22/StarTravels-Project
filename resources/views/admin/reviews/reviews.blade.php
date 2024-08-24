@extends('layouts.bar')

@section('title', 'Reviews')

@section('content')
	
		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content">
				<div class="in-content-wrapper">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Reviews</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						<div class="col-md-4">
							<div class="breadcrumb">
								<div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Reviews</a>
								</div>
							</div><!-- end breadcrumb -->
						</div><!-- end column -->

					</div><!-- end row -->

					<div class="box">

						<div class="row">
							<div class="col">
								<div class="details-text">
									<h4>Reviews</h4>
								</div>
							</div>
						</div><!-- end row -->
						<div class="reviews-body">
							<ul>
								<li>
									<div class="media">
										<img src="{{ asset('vendors/admin/images/commenter-1.jpg') }}" class="me-1 me-sm-3 rounded-circle" alt="img-review">
										<div class="media-body">
											<h5>John Doe <small>By Mr. Gabril</small></h5>
											<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
												class="fas fa-star"></i><i class="fas fa-star"></i>
											<span class="text-sm-end mb-3 float-sm-right">December 19, 2018</span>
											<p>
												Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque aliquid
												explicabo debitis ratione omnis, sapiente amet. Laboriosam ratione optio
												exercitationem?
											</p>
										</div><!-- end media-body -->
									</div><!-- end media -->
								</li>
								<li>
									<div class="media">
										<img src="{{ asset('vendors/admin/images/commenter-2.jpg') }}" class="me-1 me-sm-3 rounded-circle" alt="...">
										<div class="media-body">
											<h5>Mary Luise <small>By Ms. Sara hann</small></h5>
											<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
												class="fas fa-star"></i><i class="fas null fa-star"></i>
											<span class="text-sm-end mb-3 float-sm-right">January 18, 2019</span>
											<p>
												Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
												ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
												viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
												Donec lacinia congue felis in faucibus.
											</p>

											<div class="media">
												<a href="#">
													<img src="{{ asset('vendors/admin/images/commenter-3.jpg') }}" class="me-1 me-sm-3 rounded-circle" alt="...">
												</a>
												<div class="media-body">
													<h5>Author <small>By R.Hujo Kelvin</small></h5>
													<p class="text-sm-end mb-3">January 17, 2019</p>
													<p>
														Thank you for your Support.
													</p>
												</div><!-- end media-body -->
											</div><!-- end media -->
										</div><!-- end media-body -->
									</div><!-- end media -->
								</li>
								<li>
									<div class="media">
										<img src="{{ asset('vendors/admin/images/commenter-1.jpg') }}" class="me-1 me-sm-3 rounded-circle" alt="img-review">
										<div class="media-body">
											<h5>John Doe <small>By Mr. Gabril</small></h5>
											<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
												class="fas fa-star"></i><i class="fas fa-star"></i>
											<span class="text-sm-end mb-3 float-sm-right">January 16, 2019</span>
											<p>
												Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque aliquid
												explicabo debitis ratione omnis, sapiente amet. Laboriosam ratione optio
												exercitationem?
											</p>
										</div><!-- end media-body -->
									</div><!-- end media -->
								</li>
								<li>
									<div class="media">
										<img src="{{ asset('vendors/admin/images/commenter-2.jpg') }}" class="me-1 me-sm-3 rounded-circle" alt="...">
										<div class="media-body">
											<h5>Mary Luise <small>By Ms. Sara hann</small></h5>
											<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
												class="fas fa-star"></i><i class="fas null fa-star"></i>
											<span class="text-sm-end mb-3 float-sm-right">January 12, 2019</span>
											<p>
												Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
												ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
												viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
												Donec lacinia congue felis in faucibus.
											</p>

											<div class="media">
												<a href="#">
													<img src="{{ asset('vendors/admin/images/commenter-3.jpg') }}" class="me-1 me-sm-3 rounded-circle" alt="...">
												</a>
												<div class="media-body">
													<h5>Author <small>By R.Hujo Kelvin</small></h5>
													<p class="text-sm-end mb-3">January 13, 2019</p>
													<p>
														Thank you for your Support.
													</p>
												</div><!-- end media-body -->
											</div><!-- end media -->
										</div><!-- end media-body -->
									</div><!-- end media -->
								</li>
							</ul>
						</div><!-- end reviews-body -->
					</div><!-- end box -->
				</div><!-- end in-content-wrapper -->
			</div><!-- end content -->
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