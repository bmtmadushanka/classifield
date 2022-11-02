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

<body class="inner-pages the-search agents hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
    @include('frontend._partials.header')
       <!-- START SECTION LISTINGs GRID -->
       <section class="listings-full-grid featured popular portfolio blog">
        <div class="container">
            <!-- Block heading Start-->
            <section class="headings-2 pt-0 pb-0">
                <div class="pro-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="listing-title-bar">
                            <div class="text-heading text-left">
                                <p><a href="index.html">Home </a> &nbsp;/&nbsp; <span>Listings</span></p>
                            </div>
                            <h3>Grid View</h3>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Search Form -->
            <div class="col-12 px-0 parallax-searchs">
                <div class="banner-search-wrap">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tabs_1">
                            <div class="rld-main-search">
                                <div class="row">
                                    <div class="rld-single-input">
                                        <input type="text" placeholder="What are you looking for?">
                                    </div>
                                    <div class="rld-single-select ml-22">
                                        <select class="select single-select">
                                            <option value="1">Location</option>
                                            <option value="2">Los Angeles</option>
                                            <option value="3">Chicago</option>
                                            <option value="3">Philadelphia</option>
                                            <option value="3">San Francisco</option>
                                            <option value="3">Miami</option>
                                            <option value="3">Houston</option>
                                        </select>
                                    </div>
                                    <div class="rld-single-select">
                                        <select class="select single-select mr-0">
                                            <option value="1">All Categories</option>
                                            <option value="2">Hotels</option>
                                            <option value="3">Restaurants</option>
                                            <option value="3">Events</option>
                                            <option value="3">Fitnes</option>
                                            <option value="3">Cinema</option>
                                            <option value="3">Shops</option>
                                            <option value="3">Car Dealers</option>
                                        </select>
                                    </div>
                                    <div class="dropdown-filter"><span>Advanced Search</span></div>
                                    <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                        <a class="btn btn-yellow" href="#">Search Now</a>
                                    </div>
                                    <div class="explore__form-checkbox-list full-filter">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                <!-- Price Fields -->
                                                <div class="main-search-field-2">
                                                    <!-- Area Range -->
                                                    <div class="range-slider">
                                                        <label>60 KM Radius around selected destination</label>
                                                        <div id="area-range" data-min="0" data-max="60" data-unit="KM"></div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <br>
                                                    <!-- Price Range -->
                                                    <div class="range-slider">
                                                        <label>Price Range</label>
                                                        <div id="price-range" data-min="0" data-max="600000" data-unit="$"></div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                <!-- Checkboxes -->
                                                <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                    <input id="check-2" type="checkbox" name="check">
                                                    <label for="check-2">Elevator in building</label>
                                                    <input id="check-3" type="checkbox" name="check">
                                                    <label for="check-3">Friendly workspace</label>
                                                    <input id="check-4" type="checkbox" name="check">
                                                    <label for="check-4">Instant Book</label>
                                                    <input id="check-5" type="checkbox" name="check">
                                                    <label for="check-5">Wireless Internet</label>
                                                    <input id="check-6" type="checkbox" name="check">
                                                    <label for="check-6">Free parking on premises</label>
                                                    <input id="check-7" type="checkbox" name="check">
                                                    <label for="check-7">Free parking on street</label>
                                                    <input id="check-8" type="checkbox" name="check">
                                                    <label for="check-8">Smoking allowed</label>
                                                </div>
                                                <!-- Checkboxes / End -->
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                <!-- Checkboxes -->
                                                <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                    <input id="check-9" type="checkbox" name="check">
                                                    <label for="check-9">WiFi</label>
                                                    <input id="check-10" type="checkbox" name="check">
                                                    <label for="check-10">TV Cable</label>
                                                    <input id="check-11" type="checkbox" name="check">
                                                    <label for="check-11">Dryer</label>
                                                    <input id="check-12" type="checkbox" name="check">
                                                    <label for="check-12">Microwave</label>
                                                    <input id="check-13" type="checkbox" name="check">
                                                    <label for="check-13">Washer</label>
                                                    <input id="check-14" type="checkbox" name="check">
                                                    <label for="check-14">Refrigerator</label>
                                                    <input id="check-15" type="checkbox" name="check">
                                                    <label for="check-15">Outdoor Shower</label>
                                                </div>
                                                <!-- Checkboxes / End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ End Search Form -->
            <section class="headings-2 pt-0 full">
                <div class="pro-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="listing-title-bar">
                            <div class="text-heading text-left">
                                <p class="font-weight-bold mb-0 mt-3">9 Search results</p>
                            </div>
                        </div>
                    </div>
                    <div class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center">
                        <div class="input-group border rounded input-group-lg w-auto mr-4">
                            <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3" for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                            <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby" data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3" id="inputGroupSelect01" name="sortby">
                                <option selected>Popularity</option>
                                <option value="1">Average rating</option>
                                <option value="2">Price(low to high)</option>
                                <option value="3">Price(high to low)</option>
                            </select>
                        </div>
                        <div class="sorting-options">
                            <a href="listings-full-list.html" class="change-view-btn lde"><i class="fa fa-th-list"></i></a>
                            <a href="listings-full-grid.html" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Block heading end -->
            <div class="row popular featured portfolio-items">
                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                    <div class="project-single" data-aos="fade-up">
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
                                    <img src="images/popular-listings/1.jpg" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-1.jpg" class="img-fluid mx-auto" alt="" />
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
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/2.png" width="20" class="mr-2" alt=""> Restaurant
                                </a>
                                <span>
                            <i class="fas fa-lock-open"></i> Open Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people rent">
                    <div class="project-single" data-aos="fade-up">
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
                                    <img src="images/popular-listings/2.jpg" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-2.jpg" class="img-fluid mx-auto" alt="" />
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
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/3.png" width="20" class="mr-2" alt=""> Fitness
                                </a>
                                <span>
                            <i class="fas fa-lock"></i> Closed Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                    <div class="project-single" data-aos="fade-up">
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
                                    <img src="images/popular-listings/3.jpg" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-3.jpg" class="img-fluid mx-auto" alt="" />
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
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/4.png" width="20" class="mr-2" alt=""> Cafe
                                </a>
                                <span>
                            <i class="fas fa-lock-open"></i> Open Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes rent">
                    <div class="project-single" data-aos="fade-up">
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
                                    <img src="images/popular-listings/4.jpg" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-4.jpg" class="img-fluid mx-auto" alt="" />
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
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/7.png" width="20" class="mr-2" alt=""> Rent a Car
                                </a>
                                <span>
                            <i class="fas fa-lock-open"></i> Open Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people sale">
                    <div class="project-single" data-aos="fade-up">
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
                                    <img src="images/popular-listings/5.jpg" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-5.jpg" class="img-fluid mx-auto" alt="" />
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
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/1.png" width="20" class="mr-2" alt=""> Hotel
                                </a>
                                <span>
                            <i class="fas fa-lock"></i> Closed Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 it2 col-xs-12 web rent">
                    <div class="project-single" data-aos="fade-up">
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
                                    <img src="images/popular-listings/7.jpg" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-6.jpg" class="img-fluid mx-auto" alt="" />
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
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/8.png" width="17" class="mr-2" alt=""> Shopping
                                </a>
                                <span>
                            <i class="fas fa-lock-open"></i> Open Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                    <div class="project-single" data-aos="fade-up">
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
                                    <img src="images/popular-listings/1.jpg" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-1.jpg" class="img-fluid mx-auto" alt="" />
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
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/2.png" width="20" class="mr-2" alt=""> Restaurant
                                </a>
                                <span>
                            <i class="fas fa-lock-open"></i> Open Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people rent">
                    <div class="project-single" data-aos="fade-up">
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
                                    <img src="images/popular-listings/2.jpg" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-2.jpg" class="img-fluid mx-auto" alt="" />
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
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/3.png" width="20" class="mr-2" alt=""> Fitness
                                </a>
                                <span>
                            <i class="fas fa-lock"></i> Closed Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                    <div class="project-single no-mb" data-aos="fade-up">
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
                                    <img src="images/popular-listings/3.jpg" alt="home-1" class="img-responsive">
                                    <div class="overlay"></div>
                                </a>
                            </div>
                            <div class="fr-grid-thumb">
                                <a href="candidate-profile.html">
                                    <div class="overall-rate"><i class="fas fa-check"></i></div>
                                    <img src="images/freelancers/free-3.jpg" class="img-fluid mx-auto" alt="" />
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
                            <div class="footer mt-3">
                                <a href="listing-details.html">
                                    <img src="images/icons/4.png" width="20" class="mr-2" alt=""> Cafe
                                </a>
                                <span>
                            <i class="fas fa-lock-open"></i> Open Now
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="..." class="pt-2">
                <ul class="pagination mt-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- END SECTION LISTINGs GRID -->
    @include('frontend._partials.footer')
    @include('frontend._partials.js') 
    </div>
        <!-- Wrapper / End -->
</body>
    
</html>
    