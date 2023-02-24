@extends('includes.main')
@section('main-container')
<!-- Common Banner Area -->
<section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Supreme</h2>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><span><i class="fas fa-circle"></i></span>Supreme</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Explore our hot deals -->
<section id="explore_area" class="section_padding_top">
    <div class="container">
        <!-- Section Heading -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section_heading_center">
                    <h2>Supreme</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="theme_nav_tab">
                    <nav class="theme_nav_tab_item">
                        <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                            <button class="nav-link active" id="nav-hotels-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-hotels" type="button" role="tab" aria-controls="nav-hotels"
                                aria-selected="true">View All</button>
                            <button class="nav-link" id="nav-Spa -tab" data-bs-toggle="tab"
                                data-bs-target="#nav-Spa " type="button" role="tab" aria-controls="nav-Spa "
                                aria-selected="false">What's New</button>
                            <button class="nav-link" id="nav-space-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-space" type="button" role="tab" aria-controls="nav-space"
                                aria-selected="false">Price(Low to High)</button>
                            <button class="nav-link" id="nav-events-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-events" type="button" role="tab" aria-controls="nav-events"
                                aria-selected="false">Price(High to Low)</button>
                            <button class="nav-link" id="nav-events-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-events" type="button" role="tab" aria-controls="nav-events"
                                aria-selected="false">Female to Male</button>
                            <button class="nav-link" id="nav-events-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-events" type="button" role="tab" aria-controls="nav-events"
                                aria-selected="false">Male to Male</button>
                            <button class="nav-link" id="nav-events-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-events" type="button" role="tab" aria-controls="nav-events"
                                aria-selected="false">Female to Female</button>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-hotels" role="tabpanel"
                        aria-labelledby="nav-hotels-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/tab-img/hotel1.png" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/tab-img/hotel2.png" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
                                        <div class="discount_tab">
                                            <span>50%</span>
                                        </div>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Spa paradise international</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/tab-img/hotel3.png" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Spa kualalampur</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/tab-img/hotel4.png" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Mariana island</p>
                                        <div class="discount_tab">
                                            <span>50%</span>
                                        </div>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Spa deluxe</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/tab-img/hotel5.png" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Kathmundu, Nepal</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Spa rajavumi</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/tab-img/hotel6.png" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Beach view</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Thailand grand suit</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/tab-img/hotel7.png" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Long island</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Zefi resort and spa</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/tab-img/hotel8.png" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Philippine</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Manila international resort</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-Spa " role="tabpanel" aria-labelledby="nav-Spa -tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/tab-img/hotel1.png" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/tab-img/hotel3.png" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Spa kualalampur</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/tab-img/hotel8.png" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Philippine</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Manila international resort</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-space" role="tabpanel" aria-labelledby="nav-space-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/tab-img/hotel1.png" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/tab-img/hotel4.png" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Spa kualalampur</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/tab-img/hotel1.png" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="theme_common_box_two img_hover">
                                    <div class="theme_two_box_img">
                                        <a href="hotel-details.html">
                                            <img src="assets/img/tab-img/hotel8.png" alt="img">
                                        </a>
                                        <p><i class="fas fa-map-marker-alt"></i>Philippine</p>
                                    </div>
                                    <div class="theme_two_box_content">
                                        <h4><a href="hotel-details.html">Manila international resort</a></h4>
                                        <p><span class="review_rating">4.8/5 Excellent</span> <span
                                                class="review_count">(1214
                                                reviewes)</span></p>
                                        <h3>$99.00 <span>Price starts from</span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
