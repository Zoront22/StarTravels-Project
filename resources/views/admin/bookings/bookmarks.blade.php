@extends('layouts.bar')

@section('title', 'Booksmarks')

@section('content')
	

		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content listing-content bookmarks">
				<div class="in-content-wrapper">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Bookmarks</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						<div class="col-md-4">
							<div class="breadcrumb">
								<div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Bookmarks</a>
								</div>
							</div><!-- End breadcrumb -->
						</div><!-- End column -->
					</div><!-- End row -->

					<div class="box">

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
											<th>Bookmarks</th>
											<th>Phone</th>
											<th>Rent</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

										<tr>
											<td><img src="{{ asset('vendors/admin/images/commenter-1.jpg') }}" alt="table-img" class="img-fluid rounded-circle"
													width="40px"></td>
											<td>209</td>
											<td><a href="#">Single</a></td>
											<td><a href="#">AC</a></td>
											<td>Free Dinner</td>
											<td>1</td>
											<td><a href="#">Bookmarked</a></td>
											<td>12312335</td>
											<td>30$</td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr>
											<td><img src="{{ asset('vendors/admin/images/commenter-2.jpg') }}" alt="table-img" class="img-fluid rounded-circle"
													width="40px"></td>
											<td>209</td>
											<td><a href="#">Double</a></td>
											<td><a href="#">AC</a></td>
											<td>Free Lunch</td>
											<td>4</td>
											<td><a href="#">Bookmarked</a></td>
											<td>12312335</td>
											<td>45$</td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr>
											<td><img src="{{ asset('vendors/admin/images/commenter-3.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
											<td>212</td>
											<td><a href="#">Double</a></td>
											<td><a href="#">Non-AC</a></td>
											<td>Free Lunch</td>
											<td>4</td>
											<td><a href="#">Bookmarked</a></td>
											<td>12312335</td>
											<td>25$</td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr>
											<td><img src="{{ asset('vendors/admin/images/commenter-3.jpg') }}" alt="table-img" class="img-fluid rounded-circle"></td>
											<td>214</td>
											<td><a href="#">Single</a></td>
											<td><a href="#">AC</a></td>
											<td>Free Dinner</td>
											<td>1</td>
											<td><a href="#">Bookmarked</a></td>
											<td>12312335</td>
											<td>50$</td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>
										<tr>
											<td><img src="{{ asset('vendors/admin/images/commenter-1.jpg') }}" alt="table-img" class="img-fluid rounded-circle"
													width="40px"></td>
											<td>214</td>
											<td><a href="#">Double</a></td>
											<td><a href="#">Non-AC</a></td>
											<td>Free Lunch</td>
											<td>2</td>
											<td><a href="#">Bookmarked</a></td>
											<td>12312335</td>
											<td>40$</td>
											<td>
												<a href="#"><i class="fas fa-edit"></i></a>
												<a href="#"><i class="fas fa-trash-alt"></i></a>
											</td>
										</tr>

									</tbody>
								</table>
							</div><!-- End column -->
						</div><!-- End row -->
					</div><!-- End box -->
				</div><!-- End in-content-wrapper -->
			</div><!-- End listing-content bookmarks -->
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