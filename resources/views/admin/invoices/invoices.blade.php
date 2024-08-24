@extends('layouts.bar')

@section('title', 'Invoices')

@section('content')
    
        <!-- ===========Innerpage-wrapper============= -->
        <section>
            <div class="content invoices-content">
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
                                <div class="breadcrumb-item active"><i class="fas fa-angle-right"></i>Invoices
                                </div>
                            </div><!-- End Breadcrumb -->
                        </div><!-- End column -->
                    </div><!-- End row -->
                    <div class="box col-12">
                        <div class="details-text">
                            <h4>Invoice #GQ-87</h4>
                        </div>

                        <div class="row px-4 pt-sm-5 pt-4">
                            <div class="col">
                                <div class="sender s-r-details">
                                    <h5 class="border-bottom d-inline-block border-cc pb-2">From</h6>
                                        <ul class="list-inline list-unstyled mt-3">
                                            <li class=" h6 font-weight-bold">Burlo Fill</li>
                                            <li class="">Leno Street</li>
                                            <li class="">Texas</li>
                                            <li class="">United Stated DDGEA009</li>
                                            <li class=""></li>
                                        </ul>
                                </div>
                            </div>
                            <div class="col">
                                <div class="sender s-r-details text-end">
                                    <h5 class="border-bottom d-inline-block border-cc pb-2">To</h5>
                                    <ul class="list-inline list-unstyled mt-3">
                                        <li class=" h6 font-weight-bold">Mary Harley</li>
                                        <li class="">Alaska</li>
                                        <li class="">Texas</li>
                                        <li class="">United Stated DDGEA009</li>
                                        <li class=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row px-4 invoice-due">
                            <div class="col text-end mt-4">
                                <h6><span class="fw-normal">Invoice Date:</span> 25rd Jan 2019</h6>
                                <h6 class="mb-0"><span class="fw-normal">Due Date:</span> 29rd Jan 2019</h6>

                            </div>
                        </div>

                        <div class="row no-gutters">
                            <div class="col px-0">
                                <table class="table table-light text-start table-striped mx-auto invoice-details">
                                    <thead class="bg-dark">
                                        <tr>
                                            <td class="text-white">#</td>
                                            <td class="text-white">Description</td>
                                            <td class="text-white">Quantity</td>
                                            <td class="text-white">Unit Cost</td>
                                            <td class="text-white">Total</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Bon Atom</td>
                                            <td>3</td>
                                            <td>$ 20</td>
                                            <td>$ 60</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Bon Atom</td>
                                            <td>5</td>
                                            <td>$ 40</td>
                                            <td>$ 200</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Bon Atom</td>
                                            <td>2</td>
                                            <td>$ 30</td>
                                            <td>$ 60</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Bon Atom</td>
                                            <td>4</td>
                                            <td>$ 10</td>
                                            <td>$ 40</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="col-md-6 ms-md-auto">
                                    <table class="table table-light text-start table-striped mx-auto final-invoice">
                                        <thead>
                                            <tr>
                                                <td>Sub Total</td>
                                                <td>$ 90000.65</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tax (5%)</td>
                                                <td>4500.00</td>
                                            </tr>
                                            <tr>
                                                <td>Total</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>Payment Made</td>
                                                <td>$ 50000.65</td>
                                            </tr>
                                            <tr class="table-dark">
                                                <td>Balance Due</td>
                                                <td>40000.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="buttons text-sm-end text-center mb-5 me-sm-4">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#"
                                                class="btn btn-outline-primary border border-primary px-sm-4 px-2"><i
                                                    class="fa fa-print"></i> Print</a></li>
                                        <li class="list-inline-item"><a href="#"
                                                class="btn btn-outline-primary border border-primary px-sm-4 px-2"><i
                                                    class="fa fa-plane-departure"></i> Send Invoice</a></li>
                                    </ul>
                                </div>
                            </div><!-- End column-->
                        </div><!-- End row -->
                    </div><!-- End box -->
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
