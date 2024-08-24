@extends('layouts.bar')

@section('title', 'Privacy & Policy')

@section('content')
    
        <!-- ===========Innerpage-wrapper============= -->
        <section>
            <div class="content booking-content">
                <div class="in-content-wrapper">
                    <div class="row no-gutters">

                        <div class="col">
                            <div class="heading-messages">
                                <h3>Pages</h3>
                            </div><!-- End heading-messages -->
                        </div><!-- End column -->
                        <div class="col-md-4">
                            <div class="breadcrumb">
                                <div class="breadcrumb-item"><i class="fas fa-angle-right"></i><a href="#">Pages</a>
                                </div>
                                <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Privacy Policy
                                </div>
                            </div><!-- End Breadcrumb -->
                        </div><!-- End row -->
                    </div><!-- End row -->


                    <div class="box">
                        <div class="row">
                            <div class="col">
                                <div class="details-text border-bottom border-cc mx-4">
                                    <h4 class="border-bottom-0 mb-0 ps-0 ms-0">Terms Of Service</h4>
                                    <p class="mt-n3 small">Updated January 15, 2020</p>
                                </div>
                            </div>
                        </div><!-- end row -->
                        <div class="row p-4">
                            <div class="col">
                                <h5 class="mb-4">Please Read Our Privacy Policy Carefully <a href="#"
                                        class="btn btn-primary px-4 py-1 mt-3 mt-md-0 float-md-right"><i
                                            class="fa fa-print me-2"></i>
                                        Print</a></h5>

                                <p class="mb-3 lh col-sm-8 px-0">Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Tempore quam id mollitia accusantium consectetur perferendis, ducimus eligendi
                                    corrupti impedit accusamus ut dolore molestiae amet aliquam quaerat suscipit
                                    explicabo dolores laborum!</p>

                                <p class="lh col-sm-8 px-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Tempore quam id mollitia accusantium consectetur perferendis, ducimus eligendi
                                    corrupti impedit accusamus ut dolore molestiae amet aliquam quaerat suscipit
                                    explicabo dolores laborum!</p>

                                <h5 class="mt-4 mb-4">What personal data we collect and why we collect it</h5>

                                <h5 class="mb-3">Media</h5>

                                <p class="lh col-sm-8 px-0">If you upload images to the website, you should avoid
                                    uploading images with embedded location data (EXIF GPS) included. Visitors to the
                                    website can download and extract any location data from images on the website.</p>

                                <h5 class="mt-4 mb-3">Cookies</h5>

                                <p class="lh col-sm-8 px-0">If you leave a comment on our site you may opt-in to saving
                                    your name, email address and website in cookies. These are for your convenience so
                                    that you do not have to fill in your details again when you leave another comment.
                                    These cookies will last for one year.</p>

                                <p class="lh col-sm-8 px-0">If you leave a comment on our site you may opt-in to saving
                                    your name, email address and website in cookies. These are for your convenience so
                                    that you do not have to fill in your details again when you leave another comment.
                                    These cookies will last for one year.</p>

                                <h5 class="mt-4 mb-4">Embedded content from other websites.</h5>

                                <p class="lh col-sm-8 px-0">Articles on this site may include embedded content (e.g.
                                    videos, images, articles, etc.). Embedded content from other websites behaves in the
                                    exact same way as if the visitor has visited the other website.</p>

                                <p class="lh col-sm-8 px-0">These websites may collect data about you, use cookies,
                                    embed additional third-party
                                    tracking, and monitor your interaction with that embedded content, including
                                    tracking your interaction with the embedded content if you have an account and are
                                    logged in to that website.</p>
                            </div>
                        </div>
                    </div><!-- End Box -->
                </div><!-- End in-content-wrapper -->
            </div><!-- End booking-content -->
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