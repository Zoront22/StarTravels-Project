<!DOCTYPE html>
<html lang="en">

<head>
    <title>Error 404</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Framework Stylesheets Start-->


    	<style>
		.loader {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(../images/loader-red.gif) center no-repeat #fff;
}
	</style>
	<link rel="stylesheet" href="{{ asset('vendors/admin/css/loader.css') }}">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('vendors/admin/css/bootstrap-5.3.2.min.css') }}">


    <!-- Framework Stylesheets End-->



    <!-- Font Awsome Stylesheet -->
    <link rel="stylesheet" href="{{ asset('vendors/admin/vendors/fontawesome5.7.2/css/all.min.css') }}">


    <!-- Custom Stylesheet Start-->

    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/admin/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/admin/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/admin/css/custom.css') }}">

    <!-- Custom Stylesheet End-->


    <link rel="icon" href="{{ asset('vendors/admin/images/favicon.png') }}" type="image/x-icon">
</head>

<body>
    <!--====== LOADER =====-->
    <div class="loader"></div>
    <a href="{{ url('admin/index/index') }}" class="btn btn-primary ms-5 mt-5 sh-above position-absolute">Go Back</a>
    <section class="error-page3 text-center section-padding bg-image flex-centering">
        <div class="container-fluid sh-above">

            <div class="row">
                <div class="col">
                    <div class="error-meta">
                        <h1>Connection Error</h1>

                        <h1 class="error"><span>4</span>0<span>4</span></h1>
                        <h3>Page not Available</h3>
                        <ul class="list-unstyled list-inline btns-page">
                            <li><a href="#" class="btn">Go Back to Previous Page</a></li>
                        </ul>
                    </div><!-- end error-meta -->
                </div>
            </div>
            <footer class="copyrights text-center">
                <p>Copyright 2020 <span>Star Travels</span></p>
            </footer>

        </div><!-- end container-fluid -->
    </section>














    <!-- Optional JavaScript, Not optional it's need too -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('vendors/admin/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/bootstrap-5.3.2.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/customscriptfile.js') }}"></script>
    <!-- Page Scripts Ends -->




</body>

</html>