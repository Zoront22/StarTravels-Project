@extends('layouts.bar')

@section('title', 'Messages Compose')

@section('content')
	
		<!-- ===========Innerpage-wrapper============= -->
		<section>
			<div class="content">
				<div class="compose-messages">
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
								<div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Compose
								</div>
							</div><!-- end breadcrumb -->
						</div><!-- end column -->

					</div><!-- end row -->

					<div class="box">
						<div class="compose-messages-border">
							<ul class="nav nav-pills justify-content-center">
								<li class="nav-item">
									<a class="nav-link active" href="#">Compose</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="messages-inbox">Inbox</a>
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
							<ul class="list-unstyled header-btns">
								<li class="list-inline-item">
									<a href="#" class="btn">Send</a>
								</li>
								<li class="list-inline-item">
									<a href="#" class="btn">Discard</a>
								</li>
								<li class="list-inline-item">
									<a href="#" class="btn">Draft</a>
								</li>
							</ul>

							<form>
								<div class="compose-options">
									<a onclick="$(this).hide(); $('#cc').parent().removeClass('d-none'); $('#cc').focus();"
										href="javascript:;">Cc</a>
									<a onclick="$(this).hide(); $('#bcc').parent().removeClass('d-none'); $('#bcc').focus();"
										href="javascript:;">Bcc</a>
								</div>

								<div class="form-group">
									<label for="to" class="">To:</label>
									<input type="text" class="form-control mb-3">
									<div class="form-group d-none mb-3">
										<label for="cc" class="">Cc:</label>
										<input type="text" tabindex="2" id="cc" class="form-control">
									</div><!-- end form-group -->
									<div class="form-group d-none">
										<label for="bcc" class="">Bcc:</label>
										<input type="text" tabindex="2" id="bcc" class="form-control">
									</div><!-- end form-group -->
									<label for="to" class="">Subject:</label>
									<input type="text" class="form-control mb-3">
								</div><!-- end form-group -->


								<div class="ck-editor">
									<textarea name="content" id="editor" class="mb-3">
										<p>Type Something. Select and customize it to your will.</p>
									</textarea>
								</div><!-- end ck-editor -->

								<div class="custom-file">
									<input type="file" class="custom-file-input" id="validatedCustomFile" required>
									<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
								</div><!-- end custom-file -->
								<ul class="list-unstyled footer-btns">
									<li class="list-inline-item">
										<a href="#" class="btn">Send</a>
									</li>
									<li class="list-inline-item">
										<a href="#" class="btn">Discard</a>
									</li>
									<li class="list-inline-item">
										<a href="#" class="btn">Draft</a>
									</li>
								</ul>
							</form>
						</div><!-- end compose-messages-border -->
					</div><!-- end box -->
				</div><!-- end compose-messages -->
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
	<script src="{{ asset('vendors/admin/vendors/ckeditor5-build-classic/ckeditor.js') }}"></script>

	<!-- Page Scripts Ends -->

	<script>
		ClassicEditor
			.create(document.querySelector('#editor'))
			.catch(error => {
				console.error(error);
			});
	</script>

@endsection