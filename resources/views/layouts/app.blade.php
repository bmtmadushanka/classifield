<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Find Houses - HTML5 Template</title>
    <!-- FAVICON -->
    @include('backend._partials.style')

</head>

<body class="inner-pages maxw1600 m0a dashboard-bd">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <div class="dash-content-wrap">
            <header id="header-container" class="db-top-header">
                <!-- Header -->
                <div id="header">
                    <div class="container-fluid">
                        <!-- Left Side Content -->
                        <div class="left-side">
                            <!-- Logo -->
                            <div id="logo">
                                <a href="{{route('index')}}"><img src="{{asset('frontend/assets/images/logo.svg')}}" alt=""></a>
                            </div>
                            <!-- Mobile Navigation -->
                            <div class="mmenu-trigger">
                                <button class="hamburger hamburger--collapse" type="button">
                                    <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                            <!-- Main Navigation -->
                            <div class="clearfix"></div>
                            <!-- Main Navigation / End -->
                        </div>
                        <!-- Left Side Content / End -->
                        <!-- Right Side Content / -->
                        <div class="header-user-menu user-menu">
                            <div class="header-user-name">
                                <span><img src="{{asset('frontend/assets/images/testimonials/ts-1.jpg')}}" alt=""></span>Hi, Mary!
                            </div>
                            <ul>
                                <li><a href="user-profile.html">Edit profile</a></li>
                                <li><a href="add-listing.html">Add Listing</a></li>
                                <li><a href="payment-method.html">Payments</a></li>
                                <li><a href="change-password.html">Change Password</a></li>
                                <li><a href="#">Log Out</a></li>
                            </ul>
                        </div>
                        <!-- Right Side Content / End -->
                    </div>
                </div>
                <!-- Header / End -->
            </header>
        </div>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- START SECTION DASHBOARD -->
        <section class="user-page section-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                        <div class="user-profile-box mb-0">
                            <div class="sidebar-header"><img src="{{asset('frontend/assets/images/logo-white.svg')}}" alt="header-logo2.png"> </div>
                            <div class="header clearfix">
                                <img src="{{asset('frontend/assets/images/testimonials/ts-1.jpg')}}" alt="avatar" class="img-fluid profile-img">
                            </div>
                            <div class="active-user">
                                <h2>Mary Smith</h2>
                            </div>
                            <div class="detail clearfix">
                                <ul class="mb-0">
                                    @role('Admin')
                                    <li>
                                        <a href="{{route('home')}}">
                                            <i class="fa fa-map-marker"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('user_profile_edit', Auth::user()->id)}}">
                                            <i class="fa fa-user"></i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('ads.index')}}">
                                            <i class="fa fa-list" aria-hidden="true"></i>My Listings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('ads.create')}}">
                                            <i class="fa fa-list" aria-hidden="true"></i>Add Listing
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('brands.index')}}">
                                            <i class="fa fa-list" aria-hidden="true"></i>Brand
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('users.index')}}">
                                            <i class="fa fa-list" aria-hidden="true"></i>Sellers
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="payment-method.html">
                                            <i class="fas fa-credit-card"></i>Payments
                                        </a>
                                    </li> --}}
                                    {{-- <li>
                                        <a href="invoice.html">
                                            <i class="fas fa-paste"></i>Invoices
                                        </a>
                                    </li> --}}
                                    @endrole
                                    @role('Seller')
                                    <li>
                                        <a class="active" href="{{route('home')}}">
                                            <i class="fa fa-map-marker"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('user_profile_edit', Auth::user()->id)}}">
                                            <i class="fa fa-user"></i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('ads.index')}}">
                                            <i class="fa fa-list" aria-hidden="true"></i>My Listings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('ads.create')}}">
                                            <i class="fa fa-list" aria-hidden="true"></i>Add Listing
                                        </a>
                                    </li>

                                    @endrole
                                    <li>
                                        <a href="change-password.html">
                                            <i class="fa fa-lock"></i>Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html">
                                            <i class="fas fa-sign-out-alt"></i>Log Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @yield('content')
                        <!-- START FOOTER -->
                </div>
            </div>
        </section>
        <!-- END SECTION DASHBOARD -->

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        @include('backend._partials.js')


    </div>
    <!-- Wrapper / End -->
</body>

</html>
