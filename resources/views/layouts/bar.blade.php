<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('vendors/admin/images/favicon.png') }}" type="image/x-icon">



    <!-- Framework Stylesheets Start-->


    <style>
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('{{ asset('vendors/admin/images/loader-red.gif') }} ') center no-repeat #fff;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('vendors/admin/css/loader.css') }}">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('vendors/admin/css/bootstrap-5.3.2.min.css') }}">


    <!-- Data Tables Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/admin/vendors/datatables/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('vendors/admin/vendors/datatables/Responsive-2.2.2/css/responsive.bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/admin/css/custom.datatables.css') }}">


    <!-- Framework Stylesheets End-->



    <!-- Font Awsome Stylesheet -->
    <link rel="stylesheet" href="{{ asset('vendors/admin/vendors/fontawesome5.7.2/css/all.min.css') }}">

    <!-- Custom Stylesheet Start-->

    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/admin/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/admin/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/admin/css/custom.css') }}">

    <!-- Custom Stylesheet End-->




</head>

<body>


    <!--====== LOADER =====-->
    <div class="loader"></div>
    <!-- ===========wrapper============= -->
    <div class="wrapper">

        <!-- ===========Top-Bar============= -->
        <div class="top-bar">
            <nav class="navbar">
                <button class="navbar-toggler d-block sideMenuToggler" type="button">
                    <span class="fa fa-bars"></span>
                </button>

                <ul class="ms-auto list-unstyled nav-list list-inline d-flex my-auto">
                    <li class="nav-item list-inline-item">
                        <form class="form-inline my-2 my-lg-0 d-none d-xl-flex">
                            <input class="form-control me-sm-2" type="search" placeholder="Search"
                                aria-label="Search" />
                            <i class="fas fa-search"></i>
                        </form>
                    </li>
                    <li class="nav-item list-inline-item dropdown messages">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-envelope"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <span>Messages (5)</span>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="far fa-envelope"></i>Your Order is
                                Placed<span>Lorem ipsum
                                    dolor sit, amet consectetur adipisicing elit.
                                    Nisi, maxime?</span>
                            </a>
                            <a class="dropdown-item" href="#"><i class="far fa-envelope-open"></i>New Message
                                Received<span>Lorem
                                    ipsum dolor sit amet.</span></a>
                            <a class="dropdown-item bottom-margin" href="#"><i
                                    class="far fa-envelope-open"></i>Your
                                item is
                                Shipped<span>Lorem ipsum dolor sit amet consectetur adipisicing.</span></a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="btn mx-auto d-block">View All</a>
                        </div>
                    </li>
                    <li class="nav-item list-inline-item dropdown notifications">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <span>Notifications (258)</span>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="fas fa-cart-plus"></i>Your Order is
                                Placed<span>Lorem ipsum
                                    dolor sit, amet consectetur adipisicing elit.
                                    Nisi, maxime?</span>
                            </a>
                            <a class="dropdown-item" href="#"><i class="fas fa-sms"></i>New Message
                                Received<span>Lorem
                                    ipsum dolor
                                    sit amet.</span></a>
                            <a class="dropdown-item bottom-margin" href="#"><i
                                    class="fas fa-glass-martini"></i>Your
                                item is
                                Shipped<span>Lorem ipsum dolor sit amet consectetur adipisicing.</span></a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="btn mx-auto d-block">View All</a>
                        </div>
                    </li>
                    <li class="nav-item list-inline-item dropdown profile">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('vendors/admin/images/commenter-1.jpg') }}" alt=""
                                class="img-fluid rounded-circle" width="30px" />
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="profile-view-profile"><i class="fas fa-user-alt"></i>
                                <span>View Profile</span></a>
                            <a class="dropdown-item" href="profile-edit-profile"><i class="fas fa-cog"></i>
                                <span>Edit Profile</span></a>
                            <a class="dropdown-item" href="profile-change-password"><i class="fas fa-unlock"></i>
                                <span>Change Password</span></a>
                            <a class="dropdown-item" href="#"><i class="fas fa-unlock"></i>
                                <span>Lock Screen</span></a>
                            <a href="#" class="btn d-block text-start"><i
                                    class="fas fa-power-off"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div><!-- End top-bar -->

        <!-- =========== sidebar-left ============= -->
        <div class="sidebar-left">
            <div class="sidebar-topbar text-center">
                <i class="fa fa-plane"></i><span class="text">Star Travels</span>
            </div> <!-- End sidebar-topbar -->

            <div class="side-menu">
                <ul class="navbar-nav">
                    <li class="nav-item" id="dashboard-link">
                        <a class="items-list first {{ Request::is('admin/index/index') ? 'active' : '' }}"
                            href="{{ url('admin/') }}">
                            <span><i class="fa fa-home link-icon" data-bs-toggle="tooltip" data-html="true"
                                    title="Dashboard"></i></span>
                            <span class="items-list-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#users" class="items-list" data-bs-toggle="collapse" aria-expanded="false">
                            <span><i class="fas fa-user-tie" data-bs-toggle="tooltip" data-html="true"
                                    title="Users"></i></span>
                            <span class="items-list-text">Users</span>
                            <span><i class="fa fa-chevron-down arrow"></i></span>
                        </a>
                        <div class="collapse sub-menu" id="users">
                            <a class="items-list1 {{ Request::is('admin/users/create') ? 'active' : '' }}"
                                href="{{ route('users.create') }}">Create User</a>
                            <a class="items-list1 {{ Request::is('admin/users') ? 'active' : '' }}"
                                href="{{ route('users.index') }}">List</a>
                        </div><!-- End sub-menu -->
                    </li>
                    <li class="nav-item">
                        <a href="#Listing" class="items-list" data-bs-toggle="collapse" aria-expanded="false">
                            <span><i class="fas fa-list-alt" data-bs-toggle="tooltip" data-html="true"
                                    title="Listing"></i></span>
                            <span class="items-list-text">Listing</span>
                            <span><i class="fa fa-chevron-down arrow"></i></span>
                        </a>
                        <div class="collapse sub-menu" id="Listing">
                            <a href="#Hotel-Listing" class="items-list2" data-bs-toggle="collapse"
                                aria-expanded="false">
                                <span><i class="fas fa-hotel" data-bs-toggle="tooltip" data-html="true"
                                        title="Hotel"></i></span>
                                <span class="items-list-text">Hotel Listing</span>
                                <span><i class="fa fa-chevron-down arrow"></i></span>
                            </a>
                            <div class="collapse sub-sub-menu" id="Hotel-Listing">
                                <a class="items-list3 {{ Request::is('admin/listing-hotel/create') ? 'active' : '' }}"
                                    href="{{ route('listing-hotel.create') }}">Create</a>
                                <a class="items-list3 {{ Request::is('admin/listing-hotel') ? 'active' : '' }}"
                                    href="{{ route('listing-hotel.index') }}">All</a>
                                <a class="items-list3 {{ Request::is('admin/listing-hotel/listing-hotel-active') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-hotel/listing-hotel-active') }}">Active</a>
                                <a class="items-list3 {{ Request::is('admin/listing-hotel/listing-hotel-drafts') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-hotel/listing-hotel-drafts') }}">Drafts</a>
                                <a class="items-list3 {{ Request::is('admin/listing-hotel/listing-hotel-expired') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-hotel/listing-hotel-expired') }}">Expired</a>
                                <a class="items-list3 {{ Request::is('admin/listing-hotel/listing-hotel-featured') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-hotel/listing-hotel-featured') }}">Featured</a>
                            </div>
                        </div><!-- End sub-menu -->
                        <div class="collapse sub-menu" id="Listing">
                            <a href="#Tour-Listing" class="items-list2" data-bs-toggle="collapse"
                                aria-expanded="false">
                                <span><i class="fas fa-torii-gate" data-bs-toggle="tooltip" data-html="true"
                                        title="Tour"></i></span>
                                <span class="items-list-text">Tour Listing</span>
                                <span><i class="fa fa-chevron-down arrow"></i></span>
                            </a>
                            <div class="collapse sub-sub-menu" id="Tour-Listing">
                                <a class="items-list3 {{ Request::is('admin/listing-tour/create') ? 'active' : '' }}"
                                    href="{{ route('listing-tour.create') }}">Create</a>
                                <a class="items-list3 {{ Request::is('admin/listing-tour') ? 'active' : '' }}"
                                    href="{{ route('listing-tour.index') }}">All</a>
                                <a class="items-list3 {{ Request::is('admin/listing-tour/listing-tour-active') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-tour/listing-tour-active') }}">Active</a>
                                <a class="items-list3 {{ Request::is('admin/listing-tour/listing-tour-drafts') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-tour/listing-tour-drafts') }}">Drafts</a>
                                <a class="items-list3 {{ Request::is('admin/listing-tour/listing-tour-expired') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-tour/listing-tour-expired') }}">Expired</a>
                                <a class="items-list3 {{ Request::is('admin/listing-tour/listing-tour-featured') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-tour/listing-tour-featured') }}">Featured</a>
                            </div>
                        </div><!-- End sub-menu -->
                        <div class="collapse sub-menu" id="Listing">
                            <a href="#Cruise-Listing" class="items-list2" data-bs-toggle="collapse"
                                aria-expanded="false">
                                <span><i class="fas fa-anchor" data-bs-toggle="tooltip" data-html="true"
                                        title="Cruise"></i></span>
                                <span class="items-list-text">Cruise Listing</span>
                                <span><i class="fa fa-chevron-down arrow"></i></span>
                            </a>
                            <div class="collapse sub-sub-menu" id="Cruise-Listing">
                                <a class="items-list3 {{ Request::is('admin/listing-cruise/create') ? 'active' : '' }}"
                                    href="{{ route('listing-cruise.create') }}">Create</a>
                                <a class="items-list3 {{ Request::is('admin/listing-cruise') ? 'active' : '' }}"
                                    href="{{ route('listing-cruise.index') }}">All</a>
                                <a class="items-list3 {{ Request::is('admin/listing-cruise/listing-cruise-active') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-cruise/listing-cruise-active') }}">Active</a>
                                <a class="items-list3 {{ Request::is('admin/listing-cruise/listing-cruise-drafts') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-cruise/listing-cruise-drafts') }}">Drafts</a>
                                <a class="items-list3 {{ Request::is('admin/listing-cruise/listing-cruise-expired') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-cruise/listing-cruise-expired') }}">Expired</a>
                                <a class="items-list3 {{ Request::is('admin/listing-cruise/listing-cruise-featured') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-cruise/listing-cruise-featured') }}">Featured</a>
                            </div>
                        </div><!-- End sub-menu -->
                        <div class="collapse sub-menu" id="Listing">
                            <a href="#Car-Listing" class="items-list2" data-bs-toggle="collapse"
                                aria-expanded="false">
                                <span><i class="fas fa-car-alt" data-bs-toggle="tooltip" data-html="true"
                                        title="Car"></i></span>
                                <span class="items-list-text">Car Listing</span>
                                <span><i class="fa fa-chevron-down arrow"></i></span>
                            </a>
                            <div class="collapse sub-sub-menu" id="Car-Listing">
                                <a class="items-list3 {{ Request::is('admin/listing-car/create') ? 'active' : '' }}"
                                    href="{{ route('listing-car.create') }}">Create</a>
                                <a class="items-list3 {{ Request::is('admin/listing-car') ? 'active' : '' }}"
                                    href="{{ route('listing-car.index') }}">All</a>
                                <a class="items-list3 {{ Request::is('admin/listing-car/listing-car-active') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-car/listing-car-active') }}">Active</a>
                                <a class="items-list3 {{ Request::is('admin/listing-car/listing-car-drafts') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-car/listing-car-drafts') }}">Drafts</a>
                                <a class="items-list3 {{ Request::is('admin/listing-car/listing-car-expired') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-car/listing-car-expired') }}">Expired</a>
                                <a class="items-list3 {{ Request::is('admin/listing-car/listing-car-featured') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-car/listing-car-featured') }}">Featured</a>
                            </div>
                        </div><!-- End sub-menu -->
                        <div class="collapse sub-menu" id="Listing">
                            <a href="#Flight-Listing" class="items-list2" data-bs-toggle="collapse"
                                aria-expanded="false">
                                <span><i class="fas fa-plane" data-bs-toggle="tooltip" data-html="true"
                                        title="Flight"></i></span>
                                <span class="items-list-text">Flight Listing</span>
                                <span><i class="fa fa-chevron-down arrow"></i></span>
                            </a>
                            <div class="collapse sub-sub-menu" id="Flight-Listing">
                                <a class="items-list3 {{ Request::is('admin/listing-flight/create') ? 'active' : '' }}"
                                    href="{{ route('listing-flight.create') }}">Create</a>
                                <a class="items-list3 {{ Request::is('admin/listing-flight') ? 'active' : '' }}"
                                    href="{{ route('listing-flight.index') }}">All</a>
                                <a class="items-list3 {{ Request::is('admin/listing-flight/listing-flight-active') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-flight/listing-flight-active') }}">Active</a>
                                <a class="items-list3 {{ Request::is('admin/listing-flight/listing-flight-drafts') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-flight/listing-flight-drafts') }}">Drafts</a>
                                <a class="items-list3 {{ Request::is('admin/listing-flight/listing-flight-expired') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-flight/listing-flight-expired') }}">Expired</a>
                                <a class="items-list3 {{ Request::is('admin/listing-flight/listing-flight-featured') ? 'active' : '' }}"
                                    href="{{ url('admin/listing-flight/listing-flight-featured') }}">Featured</a>
                            </div>
                        </div><!-- End sub-menu -->
                    </li>
                    <li class="nav-item">
                        <a href="#booking" class="items-list" data-bs-toggle="collapse" aria-expanded="false">
                            <span><i class="fas fa-suitcase-rolling" data-bs-toggle="tooltip" data-html="true"
                                    title="Bookings"></i></span>
                            <span class="items-list-text">Booking</span>
                            <span><i class="fa fa-chevron-down arrow"></i></span>
                        </a>
                        <div class="collapse sub-menu" id="booking">
                            <a class="items-list1 {{ Request::is('admin/bookings/bookings') ? 'active' : '' }}"
                                href="{{ url('admin/bookings/bookings') }}">All</a>
                            <a class="items-list1 {{ Request::is('admin/bookings/bookings-approved') ? 'active' : '' }}"
                                href="{{ url('admin/bookings/bookings-approved') }}">Approved</a>
                            <a class="items-list1 {{ Request::is('admin/bookings/bookings-pending') ? 'active' : '' }}"
                                href="{{ url('admin/bookings/bookings-pending') }}">Pending</a>
                            <a class="items-list1 {{ Request::is('admin/bookings/bookings-cancelled') ? 'active' : '' }}"
                                href="{{ url('admin/bookings/bookings-cancelled') }}">Cancelled</a>
                        </div><!-- End sub-menu -->
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/reviews/reviews') }}"
                            class="items-list {{ Request::is('admin/reviews/reviews') ? 'active' : '' }}">
                            <span><i class="fas fa-sync-alt" data-bs-toggle="tooltip" data-html="true"
                                    title="Reviews"></i></span>
                            <span class="items-list-text">Reviews</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('admin/bookings/bookmarks') }}"
                            class="items-list {{ Request::is('admin/bookings/bookmarks') ? 'active' : '' }}">
                            <span><i class="far fa-bookmark" data-bs-toggle="tooltip" data-html="true"
                                    title="Bookmarks"></i></span>
                            <span class="items-list-text">Bookmarks</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#messages" class="items-list" data-bs-toggle="collapse" aria-expanded="false">
                            <span><i class="far fa-envelope" data-bs-toggle="tooltip" data-html="true"
                                    title="Messages"></i></span>
                            <span class="items-list-text">Messages</span>
                            <span><i class="fa fa-chevron-down arrow"></i></span>
                        </a>
                        <div class="collapse sub-menu" id="messages">
                            <a class="items-list1 {{ Request::is('admin/messages/message-inbox') ? 'active' : '' }}"
                                href="{{ url('admin/messages/message-inbox') }}">Inbox</a>
                            <a class="items-list1 {{ Request::is('admin/messages/messages-compose') ? 'active' : '' }}"
                                href="{{ url('admin/messages/messages-compose') }}">Compose</a>
                            <a class="items-list1 {{ Request::is('admin/messages/messages-details') ? 'active' : '' }}"
                                href="{{ url('admin/messages/messages-details') }}">Details</a>
                            <a class="items-list1 {{ Request::is('admin/messages/messages-starred') ? 'active' : '' }}"
                                href="{{ url('admin/messages/messages-starred') }}">Starred</a>
                            <a class="items-list1 {{ Request::is('admin/messages/messages-important') ? 'active' : '' }}"
                                href="{{ url('admin/messages/messages-important') }}">Important</a>
                            <a class="items-list1 {{ Request::is('admin/messages/messages-sent') ? 'active' : '' }}"
                                href="{{ url('admin/messages/messages-sent') }}">Sent</a>
                            <a class="items-list1 {{ Request::is('admin/messages/messages-drafts') ? 'active' : '' }}"
                                href="{{ url('admin/messages/messages-drafts') }}">Drafts</a>
                            <a class="items-list1 {{ Request::is('admin/messages/messages-trash') ? 'active' : '' }}"
                                href="{{ url('admin/messages/messages-trash') }}">Trash</a>
                        </div><!-- End sub-menu -->
                    </li>
                    <li class="nav-item">
                        <a href="#pages" class="items-list" data-bs-toggle="collapse" aria-expanded="false">
                            <span><i class="fas fa-pager" data-bs-toggle="tooltip" data-html="true"
                                    title="Pages"></i></span>
                            <span class="items-list-text">Pages</span>
                            <span><i class="fa fa-chevron-down arrow"></i></span>
                        </a>
                        <div class="collapse sub-menu" id="pages">
                            <a href="#forms" class="items-list2" data-bs-toggle="collapse" aria-expanded="false">
                                <span><i class="fas fa-hotel" data-bs-toggle="tooltip" data-html="true"
                                        title="Forms"></i></span>
                                <span class="items-list-text">Forms</span>
                                <span><i class="fa fa-chevron-down arrow"></i></span>
                            </a>
                            <div class="collapse sub-sub-menu" id="forms">
                                <a class="items-list3 {{ Request::is('admin/form/form-login') ? 'active' : '' }}"
                                    href="{{ url('admin/login') }}">Login</a>
                                <a class="items-list3 {{ Request::is('admin/form/form-registration') ? 'active' : '' }}"
                                    href="{{ url('admin/register') }}">Sign Up</a>
                                <a class="items-list3 {{ Request::is('admin/form/form-forgot-password') ? 'active' : '' }}"
                                    href="{{ url('admin/form/form-forgot-password') }}">Forgot Password</a>
                            </div>
                            <a class="items-list1 {{ Request::is('admin/invoices/invoices') ? 'active' : '' }}"
                                href="{{ url('admin/invoices/invoices') }}">Invoices</a>
                            <a class="items-list1 {{ Request::is('admin/faq/faq') ? 'active' : '' }}"
                                href="{{ url('admin/faq/faq') }}">FAQ</a>
                            <a class="items-list1 {{ Request::is('admin/privacy-policy/privacy-policy') ? 'active' : '' }}"
                                href="{{ url('admin/privacy-policy/privacy-policy') }}">Privacy Policy</a>
                            <a class="items-list1 {{ Request::is('admin/pricing-tables/pricing-tables') ? 'active' : '' }}"
                                href="{{ url('admin/pricing-tables/pricing-tables') }}">Pricing</a>
                            <a class="items-list1 {{ Request::is('admin/coming-soon/coming-soon') ? 'active' : '' }}"
                                href="{{ url('admin/coming-soon/coming-soon') }}">Coming Soon</a>
                            <a class="items-list1 {{ Request::is('admin/404/404') ? 'active' : '' }}"
                                href="{{ url('admin/404/404') }}">404</a>
                        </div><!-- End sub-menu -->
                    </li>

                    <li class="nav-item">
                        <a href="#profile" class="items-list" data-bs-toggle="collapse" aria-expanded="false">
                            <span><i class="fas fa-building" data-bs-toggle="tooltip" data-html="true"
                                    title="Profile"></i></span>
                            <span class="items-list-text">Profile</span>
                            <span><i class="fa fa-chevron-down arrow"></i></span>
                        </a>
                        <div class="collapse sub-menu" id="profile">
                            <a class="items-list1 {{ Request::is('admin/profile/profile-view-profile') ? 'active' : '' }}"
                                href="{{ url('admin/profile/profile-view-profile') }}">View Profile</a>
                            <a class="items-list1 {{ Request::is('admin/profile/profile-edit-profile') ? 'active' : '' }}"
                                href="{{ url('admin/profile/profile-edit-profile') }}">Edit Profile</a>
                            <a class="items-list1 {{ Request::is('admin/profile/profile-change-password') ? 'active' : '' }}"
                                href="{{ url('admin/profile/profile-change-password') }}">Change Password</a>
                        </div>
                    </li>
                </ul>
            </div><!-- End side-menu -->
            <div class="side-bar-bottom">
                <ul class="list-unstyled">
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-html="true" title="Edit Profile"><a
                            href="profile-edit-profile"><i class="fas fa-cog"></i></a></li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-html="true" title="Change Password">
                        <a href="profile-change-password"><i class="fas fa-key"></i>
                    </li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-html="true" title="Lockscreen"><a
                            href="#"><i class="fas fa-unlock"></i></a></li>
                    <li class="list-inline-item" data-bs-toggle="tooltip" data-html="true" title="Logout"><a
                            href="#"><i class="fas fa-power-off"></i></a></li>
                </ul>
            </div><!-- End side-bar-bottom -->
        </div><!-- End sidebar-left -->

        <!-- content -->
        <section>
            @yield('content')
        </section>
        <!-- end content -->



</body>

</html>
