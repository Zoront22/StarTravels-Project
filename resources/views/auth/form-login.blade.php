<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
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
	<link rel="stylesheet" href="css/loader.css">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="css/bootstrap-5.3.2.min.css">

    <!-- Framework Stylesheets End-->



    <!-- Font Awsome Stylesheet -->
    <link rel="stylesheet" href="vendors/fontawesome5.7.2/css/all.min.css">


    <!-- Custom Stylesheet Start-->


    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" href="css/custom.css">

    <!-- Custom Stylesheet End-->




    <link rel="icon" href="images/favicon.png" type="image/x-icon">
</head>

<body>
    <!--====== LOADER =====-->
    <div class="loader"></div>
    <a href="index.html" class="btn btn-primary ms-5 mt-5 sh-above position-absolute">Go Back</a>
    <section class="login-form common-form bg-image flex-centering">
        <div class="container-fluid">
            <div class="meta">
                <div class="row">
                    <div class="col-sm-5 col-md-4 col-lg-3 ms-sm-auto pe-sm-0">
                        <div class="white-box left-side sh-above">
                            <div class="img">
                                <img src="images/logo.png" alt="logo-img" class="img-fluid ">
                            </div>
                            <h2 class="">Welcome to Star Travels</h2>
                            <ul class="social list-unstyled  flex-centering">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-5 col-lg-4 me-sm-auto ps-sm-0">
                        <div class="white-box sh-above flex-centering">
                            <form>
                                <h4>Login</h4>
                                <p class="new-acc">Don't have an account? <a href="form-registration.html">Create
                                        one!</a></p>
                                <div class="form-group mt">
                                    <input type="email" class="form-control " id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control " id="exampleInputPassword1"
                                        aria-describedby="passwordHelp" placeholder="Enter Password" required>
                                </div>
                                <div class="custom-control custom-checkbox ">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                </div>
                                <ul class="list-unstyled  info">
                                    <li>
                                        <p><a href="form-forgot-password.html" class="new-acc">Forgot Password?</a></p>
                                    </li>
                                    <li><button type="submit" class="btn d-block">Login</button></li>
                                </ul>
                            </form>
                        </div><!-- end white-box -->
                    </div>
                </div>
            </div>
            <footer class="sh-above">
                <p>Designed By <span>Star Travels</span></p>
            </footer>
        </div><!-- end container-fluid -->
    </section><!-- end login-form -->














    <!-- Optional JavaScript, Not optional it's need too -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-5.3.2.min.js"></script>
    <script src="js/customscriptfile.js"></script>
    <!-- Page Scripts Ends -->



</body>

</html>