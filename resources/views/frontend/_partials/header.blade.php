 <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Header -->
            <div id="header">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="index.html"><img src="{{asset('frontend/assets/images/logo.svg')}}')}}" alt=""></a>
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
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li><a href="{{route('home')}}">Home</a>
                                </li>
                                <li><a href="{{route('listings')}}">All Listings</a>
                                </li>
                                <li><a href="{{route('privacy')}}">Privacy Policy</a>
                                </li>
                                <li><a href="{{route('faq')}}">Faq</a>
                                </li>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('contact')}}">Contact Us</a></li>
                                <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                                <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a></li>
                                <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="add-listing.html" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    <div class="right-side d-none d-none d-lg-none">
                        <!-- Header Widget -->
                        <div class="header-widget">
                            <a href="add-listing.html" class="button border">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
                        </div>
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->

                    <!-- Right Side Content / End -->
                    <div class="header-user-menu user-menu add d-none">
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

                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <!-- Header Widget -->
                      
                        @guest
                            @if (Route::has('login'))
                            <div class="header-widget sign-in">
                                <a  href="{{ route('login') }}">Sign In</a>
                            </div>
                            @endif
                           
                        @else
                        <div class="header-widget sign-in">
                            <a href="{{ route('home') }}">Account</a>
                        </div>
                        @endguest
                       
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->

                    <!-- lang-wrap-->
                    {{-- <div class="header-user-menu user-menu add d-none d-lg-none d-xl-flex">
                        <div class="lang-wrap">
                            <div class="show-lang"><span><i class="fas fa-globe-americas"></i><strong>ENG</strong></span><i class="fa fa-caret-down arrlan"></i></div>
                            <ul class="lang-tooltip lang-action no-list-style">
                                <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                                <li><a href="#" data-lantext="Fr">Francais</a></li>
                                <li><a href="#" data-lantext="Es">Espanol</a></li>
                                <li><a href="#" data-lantext="De">Deutsch</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <!-- lang-wrap end-->

                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->