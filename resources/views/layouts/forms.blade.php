<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
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
            background: url('{{ asset('vendors/admin/images/loader-red.gif') }}') center no-repeat #fff;
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
    <section>
        @yield('content')
    </section>


    <footer class="sh-above">
        <p>Designed By <span>Star Travels</span></p>
    </footer>
    </div><!-- end container-fluid -->
    </section><!-- end login-form -->









    <!-- Optional JavaScript, Not optional it's need too -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('vendors/admin/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/bootstrap-5.3.2.min.js') }}"></script>
    <script src="{{ asset('vendors/admin/js/customscriptfile.js') }}"></script>
    <!-- Page Scripts Ends -->



</body>

</html>
