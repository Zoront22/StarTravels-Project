@extends('layouts.bar')

@section('title', 'Inbox Messages')

@section('content')
	
		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content">
				<div class="content-messages">
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
								<div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Inbox
								</div>
							</div><!-- end breadcrumb -->
						</div><!-- End column -->

					</div><!-- end row -->

					<div class="box">
						<ul class="nav nav-pills justify-content-center">
							<li class="nav-item">
								<a class="nav-link" href="messages-compose">Compose</a>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="#">Inbox</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="messages-sent">Sent</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="messages-important">Important</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="messages-starred">starred</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="messages-drafts">Drafts</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="messages-trash">Trash</a>
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
						<div class="table-responsive">
							<table class="table table-hover mx-auto">
								<tr class="unread">
									<td>
										<div class="todo-check">
											<input type="checkbox" value="None" id="todo-check1">
											<label for="todo-check1"></label>
										</div>
									</td>
									<td><i class="fas fa-star"></i>
									</td>
									<td><i class="fas fa-gem active1"></i></td>
									<td>Ryan Corey</td>
									<td><a href="#">Kevin Welcome on LinkedIn.</a>
									</td>
									<td><i class="fa fa-paperclip"></i>
									</td>
									<td>10:27 AM</td>
								</tr>
								<tr class="unread">
									<td>
										<div class="todo-check pull-left">
											<input type="checkbox" value="None" id="todo-check2">
											<label for="todo-check2"></label>
										</div>
									</td>
									<td><i class="far fa-star active2"></i>
									</td>
									<td><i class="fas fa-gem"></i></td>
									<td>Haley</td>
									<td><a href="#">Welcome To University Of Alaska Kevin</a></td>
									<td><i class="fa fa-paperclip"></i>
									</td>
									<td>Nov 19</td>
								</tr>
								<tr class="unread">
									<td>
										<div class="todo-check pull-left">
											<input type="checkbox" value="None" id="todo-check2">
											<label for="todo-check2"></label>
										</div>
									</td>
									<td><i class="fas fa-star"></i>
									</td>
									<td><i class="fas fa-gem"></i></td>
									<td>John Doe</td>
									<td><a href="#">Fwd: Important Data Regarding To your Website</a></td>
									<td><i class="fa fa-paperclip"></i>
									</td>
									<td>Nov 17</td>
								</tr>
								<tr class="unread">
									<td>
										<div class="todo-check pull-left">
											<input type="checkbox" value="None" id="todo-check2">
											<label for="todo-check2"></label>
										</div>
									</td>
									<td><i class="far fa-star active2"></i>
									</td>
									<td><i class="fas fa-gem"></i></td>
									<td>Smith Roy</td>
									<td><a href="#">Hello Kevin! Apply now for MS</a></td>
									<td>
									</td>
									<td>Nov 17</td>
								</tr>
								<tr class="unread">
									<td>
										<div class="todo-check pull-left">
											<input type="checkbox" value="None" id="todo-check2">
											<label for="todo-check2"></label>
										</div>
									</td>
									<td><i class="far fa-star active2"></i>
									</td>
									<td><i class="fas fa-gem active1"></i></td>
									<td>Harry Parker</td>
									<td><a href="#">Transaction Alert For Your ABC Bank</a></td>
									<td><i class="fa fa-paperclip"></i>
									</td>
									<td>Nov 16</td>
								</tr>
								<tr class="unread">
									<td>
										<div class="todo-check pull-left">
											<input type="checkbox" value="None" id="todo-check2">
											<label for="todo-check2"></label>
										</div>
									</td>
									<td><i class="fas fa-star"></i>
									</td>
									<td><i class="fas fa-gem active1"></i></td>
									<td>Finn Boland</td>
									<td><a href="#">Good Luck For Your Next Journey to Website Development</a></td>
									<td><i class="fa fa-paperclip"></i>
									</td>
									<td>Nov 16</td>
								</tr>
								<tr class="unread">
									<td>
										<div class="todo-check pull-left">
											<input type="checkbox" value="None" id="todo-check2">
											<label for="todo-check2"></label>
										</div>
									</td>
									<td><i class="fas fa-star"></i>
									</td>
									<td><i class="fas fa-gem active1"></i></td>
									<td>Gollon Marry</td>
									<td><a href="#">Please Sign up for your new account to use all the services</a></td>
									<td>
									</td>
									<td>Nov 14</td>
								</tr>
								<tr class="unread">
									<td>
										<div class="todo-check pull-left">
											<input type="checkbox" value="None" id="todo-check2">
											<label for="todo-check2"></label>
										</div>
									</td>
									<td><i class="fas fa-star"></i>
									</td>
									<td><i class="fas fa-gem"></i></td>
									<td>Amar</td>
									<td><a href="#">Ceo of XYZ Company Usage</a></td>
									<td><i class="fa fa-paperclip"></i>
									</td>
									<td>Nov 14</td>
								</tr>
								<tr class="unread">
									<td>
										<div class="todo-check pull-left">
											<input type="checkbox" value="None" id="todo-check2">
											<label for="todo-check2"></label>
										</div>
									</td>
									<td><i class="far fa-star active2"></i>
									</td>
									<td><i class="fas fa-gem active1"></i></td>
									<td>Mary Jane</td>
									<td><a href="#">Help us make your website Security better by giving feedback</a></td>
									<td>
									</td>
									<td>Nov 13</td>
								</tr>
								<tr class="unread">
									<td>
										<div class="todo-check pull-left">
											<input type="checkbox" value="None" id="todo-check2">
											<label for="todo-check2"></label>
										</div>
									</td>
									<td><i class="fas fa-star"></i>
									</td>
									<td><i class="fas fa-gem active1"></i></td>
									<td>Sara Hector</td>
									<td><a href="#">Welcome To Our Cyber Security </a></td>
									<td>
									</td>
									<td>Nov 13</td>
								</tr>
								<tr class="unread">
									<td>
										<div class="todo-check pull-left">
											<input type="checkbox" value="None" id="todo-check2">
											<label for="todo-check2"></label>
										</div>
									</td>
									<td><i class="fas fa-star"></i>
									</td>
									<td><i class="fas fa-gem"></i></td>
									<td>Mary Finner</td>
									<td><a href="#">Now your account is available for professional services</a></td>
									<td><i class="fa fa-paperclip"></i>
									</td>
									<td>Nov 13</td>
								</tr>
							</table>
						</div>
						<div class="page-navigation d-flex justify-content-end">
							<a href="#"><i class="fas fa-angle-left"></i></a>
							<a href="#"><i class="fas fa-angle-right"></i></a>
						</div><!-- end page-navigation -->
					</div><!-- end box -->
				</div><!-- end content-messages -->
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