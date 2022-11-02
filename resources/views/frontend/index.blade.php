<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>ListiFind - HTML5 Template</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Asap:400,400i%7CMontserrat:600,700,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    @include('frontend._partials.style')
</head>

<body class="hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
    @include('frontend._partials.header')
       

        <!-- STAR HEADER IMAGE -->
        <section class="header-image d-flex align-items-center parallax-search8 overlay" id="slider">
            <div class="container">
                <div class="row d-flex align-items-center bg8">
                    <div class="col-lg-6 pr-5 ilust" data-aos="fade-right">
                        <div class="left wow fadeInLeft">
                            <img src="{{asset('frontend/assets/images/bg/slider1.png')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                       <h2 class="pl-3">Explore Your City</h2>
                       <p class="pl-3">The best places are waiting for you.</p>
                        <!-- Search Form -->
                        <div class="trip-search">
                            <form class="form">
                                <!-- Form Lookin for -->
                                <div class="form-group looking">
                                    <div class="first-select wide">
                                        <div class="main-search-input-item">
                                            <input type="text" placeholder="What are you looking for?" value="" />
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Form Lookin for -->
                                <!-- Form Location -->
                                <div class="form-group location">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-map-marker"></i>Location</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected ">New York</li>
                                            <li data-value="2" class="option">Los Angeles</li>
                                            <li data-value="3" class="option">Chicago</li>
                                            <li data-value="3" class="option">Philadelphia</li>
                                            <li data-value="3" class="option">San Francisco</li>
                                            <li data-value="3" class="option">Miami</li>
                                            <li data-value="3" class="option">Houston</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Location -->
                                <!-- Form Categories -->
                                <div class="form-group categories">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-list" aria-hidden="true"></i>All Categories</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected ">Hotels</li>
                                            <li data-value="2" class="option">Restaurants</li>
                                            <li data-value="3" class="option">Events</li>
                                            <li data-value="3" class="option">Fitness</li>
                                            <li data-value="3" class="option">Cinema</li>
                                            <li data-value="3" class="option">Shops</li>
                                            <li data-value="3" class="option">Car Dealer</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Categories -->
                                <!-- Form Button -->
                                <div class="form-group button">
                                    <button type="submit" class="btn">Search</button>
                                </div>
                                <!--/ End Form Button -->
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                </div>
            </div>
        </section>
        <!-- END HEADER IMAGE -->

        <!-- START SECTION POPULAR LISTINGS -->
        <section class="popular portfolio freelancers">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Popular </span>Listings</h2>
                    <p>What are you interested.</p>
                </div>
                <div class="portfolio col-xl-12">
                    <div class="slick-lancers">
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="listing-details.html" class="homes-img hover-effect">
                                                <div class="homes-tag button alt featured f1">Fetured</div>
                                                <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                                    <p>163</p>
                                                </div>
                                                <div class="homes-price">
                                                    <ul class="starts text-left mb-0">
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="ml-1">( 6 Reviews )</li>
                                                    </ul>
                                                </div>
                                                <img src="{{asset('frontend/assets/images/popular-listings/1.jpg')}}" alt="home-1" class="img-responsive">
                                                <div class="overlay"></div>
                                            </a>
                                        </div>
                                        <div class="fr-grid-thumb">
                                            <a href="candidate-profile.html">
                                                <div class="overall-rate"><i class="fas fa-check"></i></div>
                                                <img src="{{asset('frontend/assets/images/freelancers/free-1.jpg')}}" class="img-fluid mx-auto" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <a href="listing-details.html"><h3>Luxury Restaurant</h3></a>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <span>New York City. U.S.A</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <span>Call Us (+329) 336-7654</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <span>Posted 2 Days ago</span>
                                            </li>
                                        </ul>
                                        <div class="footer mt-3 img-2">
                                            <a href="listing-details.html">
                                                <img src="{{asset('frontend/assets/images/icons/2.png')}}" width="20" class="mr-2" alt=""> Restaurant
                                            </a>
                                            <span>
                                <i class="fas fa-lock-open"></i> Open Now
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="listing-details.html" class="homes-img hover-effect">
                                                <div class="homes-tag button alt featured f2">Popular</div>
                                                <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                                    <p>202</p>
                                                </div>
                                                <div class="homes-price">
                                                    <ul class="starts text-left mb-0">
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star-half"></i>
                                                        </li>
                                                        <li class="ml-1">( 3 Reviews )</li>
                                                    </ul>
                                                </div>
                                                <img src="{{asset('frontend/assets/images/popular-listings/2.jpg')}}" alt="home-1" class="img-responsive">
                                                <div class="overlay"></div>
                                            </a>
                                        </div>
                                        <div class="fr-grid-thumb">
                                            <a href="candidate-profile.html">
                                                <div class="overall-rate"><i class="fas fa-check"></i></div>
                                                <img src="{{asset('frontend/assets/images/freelancers/free-2.jpg')}}" class="img-fluid mx-auto" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <a href="listing-details.html"><h3>Gym in Miami</h3></a>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <span>Miami City. U.S.A</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <span>Call Us (+329) 336-7654</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <span>Posted 6 Days ago</span>
                                            </li>
                                        </ul>
                                        <div class="footer mt-3 img-3">
                                            <a href="listing-details.html">
                                                <img src="{{asset('frontend/assets/images/icons/3.png')}}" width="20" class="mr-2" alt=""> Fitness
                                            </a>
                                            <span>
                                <i class="fas fa-lock"></i> Closed Now
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people landscapes no-pb pbp-3">
                                <div class="project-single no-mb mbp-3">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="listing-details.html" class="homes-img hover-effect">
                                                <div class="homes-tag button alt featured f3">New</div>
                                                <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                                    <p>412</p>
                                                </div>
                                                <div class="homes-price">
                                                    <ul class="starts text-left mb-0">
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="ml-1">( 9 Reviews )</li>
                                                    </ul>
                                                </div>
                                                <img src="{{asset('frontend/assets/images/popular-listings/3.jpg')}}" alt="home-1" class="img-responsive">
                                                <div class="overlay"></div>
                                            </a>
                                        </div>
                                        <div class="fr-grid-thumb">
                                            <a href="candidate-profile.html">
                                                <div class="overall-rate"><i class="fas fa-check"></i></div>
                                                <img src="{{asset('frontend/assets/images/freelancers/free-3.jpg')}}" class="img-fluid mx-auto" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <a href="listing-details.html"><h3>Cafe in Boston</h3></a>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <span>Boston City. U.S.A</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <span>Call Us (+329) 336-7654</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <span>Posted 4 Days ago</span>
                                            </li>
                                        </ul>
                                        <div class="footer mt-3 img-4">
                                            <a href="listing-details.html">
                                                <img src="{{asset('frontend/assets/images/icons/4.png')}}" width="20" class="mr-2" alt=""> Cafe
                                            </a>
                                            <span>
                                <i class="fas fa-lock-open"></i> Open Now
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="listing-details.html" class="homes-img hover-effect">
                                                <div class="homes-tag button alt featured f1">Fetured</div>
                                                <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                                    <p>163</p>
                                                </div>
                                                <div class="homes-price">
                                                    <ul class="starts text-left mb-0">
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="ml-1">( 6 Reviews )</li>
                                                    </ul>
                                                </div>
                                                <img src="{{asset('frontend/assets/images/popular-listings/4.jpg')}}" alt="home-1" class="img-responsive">
                                                <div class="overlay"></div>
                                            </a>
                                        </div>
                                        <div class="fr-grid-thumb">
                                            <a href="candidate-profile.html">
                                                <div class="overall-rate"><i class="fas fa-check"></i></div>
                                                <img src="{{asset('frontend/assets/images/freelancers/free-4.jpg')}}" class="img-fluid mx-auto" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <a href="listing-details.html"><h3>Rent a Car in Texas</h3></a>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <span>Houston City. U.S.A</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <span>Call Us (+329) 336-7654</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <span>Posted 7 Days ago</span>
                                            </li>
                                        </ul>
                                        <div class="footer mt-3 img-7">
                                            <a href="listing-details.html">
                                                <img src="{{asset('frontend/assets/images/icons/7.png')}}" width="20" class="mr-2" alt=""> Rent a Car
                                            </a>
                                            <span>
                                <i class="fas fa-lock-open"></i> Open Now
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="listing-details.html" class="homes-img hover-effect">
                                                <div class="homes-tag button alt featured f2">Popular</div>
                                                <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                                    <p>202</p>
                                                </div>
                                                <div class="homes-price">
                                                    <ul class="starts text-left mb-0">
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star-half"></i>
                                                        </li>
                                                        <li class="ml-1">( 3 Reviews )</li>
                                                    </ul>
                                                </div>
                                                <img src="{{asset('frontend/assets/images/popular-listings/5.jpg')}}" alt="home-1" class="img-responsive">
                                                <div class="overlay"></div>
                                            </a>
                                        </div>
                                        <div class="fr-grid-thumb">
                                            <a href="candidate-profile.html">
                                                <div class="overall-rate"><i class="fas fa-check"></i></div>
                                                <img src="{{asset('frontend/assets/images/freelancers/free-5.jpg')}}" class="img-fluid mx-auto" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <a href="listing-details.html"><h3>Hotel in Punta Cana</h3></a>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <span>Dominican Republic</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <span>Call Us (+329) 336-7654</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <span>Posted 11 Days ago</span>
                                            </li>
                                        </ul>
                                        <div class="footer mt-3 img-1">
                                            <a href="listing-details.html">
                                                <img src="{{asset('frontend/assets/images/icons/1.png')}}" width="20" class="mr-2" alt=""> Hotel
                                            </a>
                                            <span>
                                <i class="fas fa-lock"></i> Closed Now
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people landscapes no-pb pbp-3">
                                <div class="project-single no-mb mbp-3">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="listing-details.html" class="homes-img hover-effect">
                                                <div class="homes-tag button alt featured f3">New</div>
                                                <div class="homes-tag button sale rent"><i class="fa fa-heart-o"></i>
                                                    <p>412</p>
                                                </div>
                                                <div class="homes-price">
                                                    <ul class="starts text-left mb-0">
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="mb-0"><i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="ml-1">( 9 Reviews )</li>
                                                    </ul>
                                                </div>
                                                <img src="{{asset('frontend/assets/images/popular-listings/7.jpg')}}" alt="home-1" class="img-responsive">
                                                <div class="overlay"></div>
                                            </a>
                                        </div>
                                        <div class="fr-grid-thumb">
                                            <a href="candidate-profile.html">
                                                <div class="overall-rate"><i class="fas fa-check"></i></div>
                                                <img src="{{asset('frontend/assets/images/freelancers/free-6.jpg')}}" class="img-fluid mx-auto" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <a href="listing-details.html"><h3>Store in Los Angeles</h3></a>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-map-marker"></i>
                                                <span>Los Angeles. U.S.A</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <span>Call Us (+329) 336-7654</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <span>Posted 5 Days ago</span>
                                            </li>
                                        </ul>
                                        <div class="footer mt-3 img-8">
                                            <a href="listing-details.html">
                                                <img src="{{asset('frontend/assets/images/icons/8.png')}}" width="17" class="mr-2" alt=""> Shopping
                                            </a>
                                            <span>
                                <i class="fas fa-lock-open"></i> Open Now
                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION POPULAR LISTINGS -->

        <!-- START SECTION HOW IT WORKS -->
        <section class="how-it-works">
            <div class="container">
                <div class="sec-title">
                    <h2><span>How </span>It Works</h2>
                    <p>Easy To Do It.</p>
                </div>
                <div class="row service-1">
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                        <div class="serv-flex">
                            <div class="art-1 img-13">
                                <img src="{{asset('frontend/assets/images/map.png')}}" alt="">
                                <h3>Find Good Places</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="{{asset('frontend/assets/images/contact.png')}}" alt="">
                                <h3>Contact The Owner</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up">
                        <div class="serv-flex arrow">
                            <div class="art-1 img-15">
                                <img src="{{asset('frontend/assets/images/user.png')}}" alt="">
                                <h3>Make a Reservation</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- END SECTION HOW IT WORKS -->

        <!-- START SECTION INFO-HELP -->
        <section class="info-help">
            <div class="container">
                <div class="row info-head">
                    <div class="col-lg-6 col-md-8 col-xs-8" data-aos="fade-right">
                        <div class="info-text">
                            <h3>Special Offers Every Day.</h3>
                            <p>We Help you find the best places and offer near you. Bring to the table win-win survival strategies to ensure proactive domination going forward.</p>
                            <div class="inf-btn pro">
                                <a href="contact-us.html" class="btn btn-pro btn-secondary btn-lg">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-3"></div>
                </div>
            </div>
        </section>
        <!-- END SECTION INFO-HELP -->

        <!-- START SECTION TESTIMONIALS -->
        <section class="testimonials">
            <div class="container">
                <div class="sec-title">
                    <h2><span>People </span>Says</h2>
                    <p>Here is what people say about ListiFind.</p>
                </div>
                <div class="owl-carousel style1">
                    <div class="test-1" data-aos="fade-up">
                        <p class="mb-3">Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                        <img src="{{asset('frontend/assets/images/testimonials/ts-1.jpg')}}" alt="">
                        <h3 class="mt-3">Lisa Smith</h3>
                        <h6>New York</h6>
                        <ul class="starts text-center">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="test-1" data-aos="fade-up">
                        <p class="mb-3">Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                        <img src="{{asset('frontend/assets/images/testimonials/ts-2.jpg')}}" alt="">
                        <h3 class="mt-3">Jhon Morris</h3>
                        <h6>Los Angeles</h6>
                        <ul class="starts text-center">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="test-1" data-aos="fade-up">
                        <p class="mb-3">Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                        <img src="{{asset('frontend/assets/images/testimonials/ts-3.jpg')}}" alt="">
                        <h3 class="mt-3">Mary Deshaw</h3>
                        <h6>Chicago</h6>
                        <ul class="starts text-center">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="test-1" data-aos="fade-up">
                        <p class="mb-3">Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                        <img src="{{asset('frontend/assets/images/testimonials/ts-4.jpg')}}" alt="">
                        <h3 class="mt-3">Gary Steven</h3>
                        <h6>Philadelphia</h6>
                        <ul class="starts text-center">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="test-1" data-aos="fade-up">
                        <p class="mb-3">Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                        <img src="{{asset('frontend/assets/images/testimonials/ts-5.jpg')}}" alt="">
                        <h3 class="mt-3">Cristy Mayer</h3>
                        <h6>San Francisco</h6>
                        <ul class="starts text-center">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="test-1" data-aos="fade-up">
                        <p class="mb-3">Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                        <img src="{{asset('frontend/assets/images/testimonials/ts-6.jpg')}}" alt="">
                        <h3 class="mt-3">Ichiro Tasaka</h3>
                        <h6>Houston</h6>
                        <ul class="starts text-center">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION TESTIMONIALS -->

        <!-- START SECTION BLOG -->
        <section class="blog-section">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Tips &amp; </span>Articles</h2>
                    <p>The lastes news about the world.</p>
                </div>
                <div class="news-wrap">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item" data-aos="fade-up">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="{{asset('frontend/assets/images/blog/b-1.jpg')}}" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html"><h3>Explore The World</h3></a>
                                    <div class="dates">
                                        <span class="date">April 11, 2018 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Karl Smith</p>
                                            <img src="{{asset('frontend/assets/images/testimonials/ts-6.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item" data-aos="fade-up">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="{{asset('frontend/assets/images/blog/b-2.jpg')}}" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html"><h3>Find Good Places</h3></a>
                                    <div class="dates">
                                        <span class="date">May 20, 2018 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Lis Jhonson</p>
                                            <img src="{{asset('frontend/assets/images/testimonials/ts-5.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item no-mb" data-aos="fade-up">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="{{asset('frontend/assets/images/blog/b-3.jpg')}}" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html"><h3>All Places In Town</h3></a>
                                    <div class="dates">
                                        <span class="date">Jun 30, 2018 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i> <span>306</span></li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span></li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span></li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Ted Willians</p>
                                            <img src="{{asset('frontend/assets/images/testimonials/ts-4.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-all">
                <a href="blog-grid.html" class="btn btn-outline-light mt-2">View Blog</a>
            </div>
        </section>
        <!-- END SECTION BLOG -->

        <!-- STAR SECTION PARTNERS -->
        <div class="partners">
            <div class="container">
               <div class="sec-title">
                    <h2><span>Our </span>Partners</h2>
                    <p>The Companies That Represent Us.</p>
                </div>
                <div class="owl-carousel style2">
                    <div class="owl-item" data-aos="fade-up"><img src="{{asset('frontend/assets/images/partners/1.png')}}" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="{{asset('frontend/assets/images/partners/2.png')}}" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="{{asset('frontend/assets/images/partners/3.png')}}" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="{{asset('frontend/assets/images/partners/4.png')}}" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="{{asset('frontend/assets/images/partners/5.png')}}" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="{{asset('frontend/assets/images/partners/6.png')}}" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="{{asset('frontend/assets/images/partners/7.png')}}" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="{{asset('frontend/assets/images/partners/8.png')}}" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="{{asset('frontend/assets/images/partners/9.png')}}" alt=""></div>
                    <div class="owl-item" data-aos="fade-up"><img src="{{asset('frontend/assets/images/partners/10.png')}}" alt=""></div>
                </div>
            </div>
        </div>
        <!-- END SECTION PARTNERS -->

    @include('frontend._partials.footer')
      

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

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>



            
        </div>
        <!-- END PRELOADER -->

    @include('frontend._partials.js')
      
       
    </div>
    <!-- Wrapper / End -->
</body>

</html>
