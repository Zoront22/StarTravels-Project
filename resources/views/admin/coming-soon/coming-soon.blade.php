<!doctype html>
<html lang="en">

<head>
    <title>Coming Soon</title>
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

    <link rel="stylesheet" href="{{ asset('vendors/admin/css/custom.css') }}">

    <!-- Custom Stylesheet End-->


    <link rel="icon" href="{{ asset('vendors/admin/images/favicon.png') }}" type="image/x-icon">
</head>

<body>
    <!--====== LOADER =====-->
    <div class="loader"></div>
    <a href="{{ url('admin/index/index') }}" class="btn btn-primary ms-5 mt-5 sh-above position-absolute">Go Back</a>
    <section class="coming-soon10 text-center bg-image flex-centering">

        <div class="coming-soon-meta sh-above">
            <div class="container-fluid p-0">
                <div class="middle">
                    <h2>We are</h2>
                    <h1 class="display-3">Coming Soon</h1>
                    <p id="demo" class="display-3"></p>
                    <h6>Subscribe to Get notified about the launch</h6>
                    <div class="subscribe">
                        <form action="">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Email Address"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">Subscribe</span>
                                </div>
                            </div>
                        </form>
                    </div>
                    <ul class="social list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>

                </div><!-- end middle -->
                <footer class="copyrights text-center sh-above">
                    <p>Copyright 2019 <span>Star Travels</span></p>
                </footer>
            </div><!-- end container-fluid -->
        </div><!-- end coming-soon-meta -->
    </section>














    <!-- Optional JavaScript, Not optional it's need too -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('vendors/admin/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/bootstrap-5.3.2.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/customscriptfile.js') }}"></script>
    <!-- Page Scripts Ends -->


    <script>
        var countDownDate = new Date("December 31,2030 00:00:00").getTime();

        var countDownFunction = setInterval(function () {
            var now = new Date().getTime();

            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));

            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

            if (distance < 0) {
                clearInterval(countDownFunction);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);

    </script>

</body>

</html>