@extends('layouts.bar')

@section('title', 'Messages Details')

@section('content')
	
		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content">
				<div class="content-messages message-details">
					<div class="row no-gutters">

						<div class="col">
							<div class="heading-messages">
								<h3>Messages</h3>
							</div><!-- End heading-messages -->
						</div><!-- End column -->
						<div class="col-md-4">
							<div class="breadcrumb">
								<div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Messages</a>
								</div>
								<div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Details
								</div>
							</div><!-- end breadcrumb -->
						</div><!-- end column -->

					</div><!-- end row -->
					<div class="box">
						<ul class="list-unstyled list-inline text-center">
							<li class="list-inline-item">
								<a href="#" class="btn">Reply</a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="btn">Reply All</a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="btn">Forward</a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="btn">Delete</a>
							</li>
							<li class="list-inline-item">
								<a href="#" class="btn">Mark as read</a>
							</li>
						</ul>
						<div class="row">
							<div class="col">
								<div class="inbox-header justify-content-center d-flex">
									<ul class="list-unstyled list-inline">
										<li class="list-inline-item">
											<a class="btn" data-bs-toggle="tooltip" data-html="true" title="Redo"><i
													class="fas fa-redo-alt"></i></a>
										</li>
										<li class="list-inline-item">
											<a class="btn" data-bs-toggle="tooltip" data-html="true" title="Archive"><i
													class="fas fa-archive"></i></a>
										</li>
										<li class="list-inline-item">
											<a class="btn" data-bs-toggle="tooltip" data-html="true" title="Trash"><i
													class="fas fa-trash-alt"></i></a>
										</li>
										<li class="list-inline-item">
											<a class="btn" data-bs-toggle="tooltip" data-html="true" title="Folders"><i
													class="fas fa-folder"></i></a>
										</li>
										<li class="list-inline-item">
											<a class="btn" data-bs-toggle="tooltip" data-html="true" title="Tag"><i
													class="fas fa-tags"></i></a>
										</li>
										<li class="list-inline-item dropdown p-0 m-0">
											<a class="btn dropdown-btn " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
												aria-haspopup="true" aria-expanded="false">
												<span>More</span>
												<i class="fas fa-angle-down"></i>
											</a>

											<div class="dropdown-menu" aria-labelledby="navbarDropdown">
												<a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i>Mark
													as
													Read </a>
												<a class="dropdown-item" href="#"><i class="fas fa-ban"></i>Spam <i class="fas"></i></a>
												<a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i>Delete</a>
											</div>
										</li>
									</ul>
								</div><!-- end inbox-header -->
							</div><!-- end column -->
						</div><!-- end row -->
						<div class="message-details-text">
							<div class="md-heading">
								<h4>Hi Dear, How are you?</h4>
							</div><!-- end md-heading -->
							<div class="message-details-body">
								<div class="row image-body">
									<div class="col-8">
										<div class="media">
											<img src="{{ asset('vendors/admin/images/commenter-1.jpg') }}" class="me-3 rounded-circle img-fluid" alt="message-img">
											<div class="media-body">
												<h5 class="mt-0">John Doe</h5>
												<p>From: johndoe@gmail.com</p>
											</div><!-- end media-body -->
										</div><!-- end media -->
									</div><!-- end column -->
									<div class="col text-end">
										<p>4:15AM 04 April 2014</p>
									</div><!-- end column -->
								</div><!-- end image-body -->
								<div class="text">
									<p>
										Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan
										augue
										egestas ac. Donec vitae leo at sem
										lobortis porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices
										faucibus rutrum. Phasellus sodales
										vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem lobortis
										porttitor eu consequat risus. Mauris sed
										congue orci. Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna,
										vel
										accumsan augue egestas ac. Donec
										vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci.
									</p>
									<p>
										Porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices faucibus
										rutrum. Phasellus sodales vulputate urna,
										vel accumsan augue egestas ac. Donec vitae leo at sem lobortis porttitor eu
										consequat risus. Mauris sed congue orci.
										Donec ultrices faucibus rutrum. Phasellus sodales vulputate urna, vel accumsan
										augue
										egestas ac. Donec vitae leo at sem
										lobortis porttitor eu consequat risus. Mauris sed congue orci.</p>

									<p>Sodales vulputate urna, vel accumsan augue egestas ac. Donec vitae leo at sem
										lobortis porttitor eu consequat risus.
										Mauris sed congue orci. Donec ultrices faucibus rutrum. Phasellus sodales
										vulputate
										urna, vel accumsan augue egestas ac.
										Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue
										orci.</p>
								</div><!-- end text -->
							</div><!-- end message-details-body -->
							<div class="message-details-footer">
								<i class="fa fa-paperclip"></i>
								<span>2 attachments —</span>
								<a href="#">Download all attachments</a> | <a href="#"> View all images</a>
								<ul class="list-unstyled attachment-image">
									<li><img src="{{ asset('vendors/admin/images/commenter-1.jpg') }}" alt="attatchment-image" class="rounded-circle img-fluid">
										<span>IMG_001.jpg 20KB</span>
										<ul class="list-unstyled list-inline">
											<li class="list-inline-item">
												<a href="#" class="first-link">View -</a>
											</li>
											<li class="list-inline-item">
												<a href="#"> Download</a>
											</li>
										</ul>
									</li>
									<li><img src="{{ asset('vendors/admin/images/commenter-1.jpg') }}" alt="attatchment-image" class="rounded-circle img-fluid">
										<span>IMG_001.jpg 20KB</span>
										<ul class="list-inline">
											<li class="list-inline-item">
												<a href="#" class="first-link">View -</a>
											</li>
											<li class="list-inline-item">
												<a href="#"> Download</a>
											</li>
										</ul>
									</li>
								</ul>
								<div class="row">
									<div class="col">
										<div class="btn-group1">
											<a href="#"><i class="fas fa-reply"></i>Reply</a>
											<a href="#"><i class="fas fa-arrow-right"></i>Forward</a>
											<a href="#"><i class="fas fa-print"></i></a>
											<a href="#"><i class="fas fa-trash-alt"></i></a>
										</div><!-- end btn-group1 -->
									</div><!-- end column -->
								</div><!-- end row -->
							</div><!-- end message-details-footer -->
						</div><!-- end message-details-text -->
					</div><!-- end box -->
					<div class="page-navigation d-flex justify-content-end">
						<a href="#"><i class="fas fa-angle-left"></i></a>
						<a href="#"><i class="fas fa-angle-right"></i></a>
					</div><!-- end page-navigation -->
				</div><!-- end message-details -->
			</div><!-- end content -->
		</section>
		<!-- ===========End Innerpage-wrapper============= -->

	</div><!-- end wrapper -->














	<!-- Optional JavaScript, Not optional it's need too -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{ asset('vendors/admin/js/jquery-3.3.1.min.js') }}"></script>
	<script src="{{ asset('vendors/admin/js/popper.min.js') }}"></script>
	<script src="{{ asset('vendors/admin/js/bootstrap-5.3.2.min.js') }}"></script>
	<script src="{{ asset('vendors/admin/js/customscriptfile.js') }}"></script>

	<!-- Page Scripts Ends -->

	@endsection