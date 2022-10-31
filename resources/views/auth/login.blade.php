<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Login</title>
    <!-- FAVICON -->
    @include('frontend._partials.style')
    
</head>

<body class="inner-pages p-bl">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        @include('frontend._partials.header')

        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>Login</h1>
                    <h2><a href="index.html">Home </a> &nbsp;/&nbsp; login</h2>
                </div>
            </div>
        </section>
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION LOGIN -->
        <div id="login">
            <div class="login">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="access_social">
                        <a href="{{ url('redirect/facebook') }}" class="social_bt facebook">Login with Facebook</a>
                        <a href="{{ url('redirect/google') }}" class="social_bt google">Login with Google</a>
                    </div>
                    <div class="divider"><span>Or</span></div>
                    <div class="form-group">
                        <label>Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <i class="icon_mail_alt"></i>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <i class="icon_lock_alt"></i>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                    </div>
                    <div class="fl-wrap filter-tags clearfix add_bottom_30">
                        <div class="checkboxes float-left">
                            <div class="filter-tags-wrap">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember check-b" {{ old('remember') ? 'checked' : '' }}>
                                <label for="check-b">Remember me</label>
                            </div>
                        </div>
                        <div class="float-right mt-1">
                            @if (Route::has('password.request'))
                            <a  id="forgot" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        </div>
                    </div>
                    <button class="btn_1 rounded full-width">Login</button>
                    <div class="text-center add_top_10">Don't have an account ? <strong><a href="{{route('register')}}">Sign up!</a></strong></div>
                </form>
            </div>
        </div>
        <!-- END SECTION LOGIN -->

        <!-- START FOOTER -->
        <footer class="first-footer">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="netabout">
                                <a href="index.html" class="logo">
                                    <img src="images/logo-footer.svg" alt="netcom">
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto soluta laboriosam, perspiciatis, aspernatur officiis esse.</p>
                            </div>
                            <div class="contactus">
                                <ul>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="in-p">95 South Park Avenue, USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="in-p">+456 875 369 208</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="in-p ti">support@listifind.com</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget quick-link clearfix">
                                <h3 class="widget-title">Quick Links</h3>
                                <div class="quick-links">
                                    <ul class="one-half mr-5">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="listing-details.html">Listing Details</a></li>
                                        <li><a href="dashboard.html">Dashboard</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li class="no-pb"><a href="blog-list.html">Blog List</a></li>
                                    </ul>
                                    <ul class="one-half">
                                        <li><a href="blog-grid.html">Blog</a></li>
                                        <li><a href="pricing-table.html">Pricing</a></li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="faq.html">Our Faq</a></li>
                                        <li class="no-pb"><a href="listings-full-grid.html">Listings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <h3>Instagram</h3>
                                <ul class="photo">
                                    <li class="hover-effect">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-1.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                    <li class="hover-effect">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-2.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                    <li class="hover-effect">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-3.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                    <li class="hover-effect">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-4.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                    <li class="hover-effect">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-5.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                    <li class="hover-effect">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-6.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                    <li class="hover-effect">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-7.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                    <li class="hover-effect">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-8.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                    <li class="hover-effect">
                                        <figure>
                                            <a href="#"><img src="images/instagram/inst-9.jpg" alt=""></a>
                                        </figure>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="newsletters">
                                <h3>Newsletters</h3>
                                <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.</p>
                            </div>
                            <form class="bloq-email mailchimp form-inline" method="post">
                                <label for="subscribeEmail" class="error"></label>
                                <div class="email">
                                    <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                                    <input type="submit" value="Subscribe">
                                    <p class="subscription-success"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer">
                <div class="container">
                    <p>Code-Theme. ©2021 All rights reserved. </p>
                    <ul class="netsocials">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Listi<strong>Find</strong></span></h3>
                    <div class="soc-log fl-wrap">
                        <p>Login</p>
                        <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                        <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                    </div>
                    <div class="log-separator fl-wrap"><span>Or</span></div>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform">
                                        <label>Username or Email Address * </label>
                                        <input name="email" type="text" onClick="this.select()" value="">
                                        <label>Password * </label>
                                        <input name="password" type="password" onClick="this.select()" value="">
                                        <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <input id="check-a" type="checkbox" name="check">
                                            <label for="check-a">Remember me</label>
                                        </div>
                                    </form>
                                    <div class="lost_password">
                                        <a href="#">Lost Your Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                            <label>First Name * </label>
                                            <input name="name" type="text" onClick="this.select()" value="">
                                            <label>Second Name *</label>
                                            <input name="name2" type="text" onClick="this.select()" value="">
                                            <label>Email Address *</label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password *</label>
                                            <input name="password" type="password" onClick="this.select()" value="">
                                            <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->

    @include('frontend._partials.js')
        

    </div>
    <!-- Wrapper / End -->
</body>

</html>

