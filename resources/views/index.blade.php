@extends('includes.main')
@section('main-container')
    <!-- Modal -->
    <div class="modal fade" id="currentlocation" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1"aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> -->
                    <div class="container">
                        <div class="row text-center">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <h2 class="mb-2">Pick a City</h2>
                            <h3 class="mb-3">To find awesome offers around you</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <div class="input-group">
                                    <input class="form-control border-end-0 border" type="search" placeholder="Search Spa at Your Location" aria-label="form-control-lg example"
                                        id="example-search-input">
                                    <!-- <span class="input-group-append"> -->
                                    <button
                                        class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5"
                                        type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <!-- </span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <p style="text-align: center;">Popular City</p>

                    <ul class="sc-bNQFlB URchM">
                        <li class="sc-hizQCF dSgOQo">
                            <div class="sc-eNPDpu fVBwIY">
                                <div class="sc-cgHJcJ hPcraY"><img
                                        src="//in.bmscdn.com/m6/images/common-modules/regions/mumbai.png" alt="MUMBAI"
                                        class="sc-fQkuQJ ciyWra"></div><span class="sc-dRCTWM JQbba">Mumbai</span>
                            </div>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="sc-hizQCF dSgOQo">
                            <div class="sc-eNPDpu fVBwIY">
                                <div class="sc-cgHJcJ hPcraY"><img
                                        src="//in.bmscdn.com/m6/images/common-modules/regions/ncr.png" alt="NCR"
                                        class="sc-fQkuQJ ciyWra"></div><span class="sc-dRCTWM JQbba">Delhi-NCR</span>
                            </div>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="sc-hizQCF dSgOQo">
                            <div class="sc-eNPDpu fVBwIY">
                                <div class="sc-cgHJcJ hPcraY"><img
                                        src="//in.bmscdn.com/m6/images/common-modules/regions/bang.png" alt="BANG"
                                        class="sc-fQkuQJ ciyWra"></div><span class="sc-dRCTWM JQbba">Bengaluru</span>
                            </div>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="sc-hizQCF dSgOQo">
                            <div class="sc-eNPDpu fVBwIY">
                                <div class="sc-cgHJcJ hPcraY"><img
                                        src="//in.bmscdn.com/m6/images/common-modules/regions/hyd.png" alt="HYD"
                                        class="sc-fQkuQJ ciyWra"></div><span class="sc-dRCTWM JQbba">Hyderabad</span>
                            </div>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="sc-hizQCF dSgOQo">
                            <div class="sc-eNPDpu fVBwIY">
                                <div class="sc-cgHJcJ hPcraY"><img
                                        src="//in.bmscdn.com/m6/images/common-modules/regions/ahd.png" alt="AHD"
                                        class="sc-fQkuQJ ciyWra"></div><span class="sc-dRCTWM JQbba">Ahmedabad</span>
                            </div>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="sc-hizQCF dSgOQo">
                            <div class="sc-eNPDpu fVBwIY">
                                <div class="sc-cgHJcJ hPcraY"><img
                                        src="//in.bmscdn.com/m6/images/common-modules/regions/chd.png" alt="CHD"
                                        class="sc-fQkuQJ ciyWra"></div><span class="sc-dRCTWM JQbba">Chandigarh</span>
                            </div>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="sc-hizQCF dSgOQo">
                            <div class="sc-eNPDpu fVBwIY">
                                <div class="sc-cgHJcJ hPcraY"><img
                                        src="//in.bmscdn.com/m6/images/common-modules/regions/chen.png" alt="CHEN"
                                        class="sc-fQkuQJ ciyWra"></div><span class="sc-dRCTWM JQbba">Chennai</span>
                            </div>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="sc-hizQCF dSgOQo">
                            <div class="sc-eNPDpu fVBwIY">
                                <div class="sc-cgHJcJ hPcraY"><img
                                        src="//in.bmscdn.com/m6/images/common-modules/regions/pune.png" alt="PUNE"
                                        class="sc-fQkuQJ ciyWra"></div><span class="sc-dRCTWM JQbba">Pune</span>
                            </div>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="sc-hizQCF dSgOQo">
                            <div class="sc-eNPDpu fVBwIY">
                                <div class="sc-cgHJcJ hPcraY"><img
                                        src="//in.bmscdn.com/m6/images/common-modules/regions/kolk.png" alt="KOLK"
                                        class="sc-fQkuQJ ciyWra"></div><span class="sc-dRCTWM JQbba">Kolkata</span>
                            </div>
                        </li>&nbsp;&nbsp;&nbsp;&nbsp;
                        <li class="sc-hizQCF dSgOQo">
                            <div class="sc-eNPDpu fVBwIY">
                                <div class="sc-cgHJcJ hPcraY"><img
                                        src="//in.bmscdn.com/m6/images/common-modules/regions/koch.png" alt="KOCH"
                                        class="sc-fQkuQJ ciyWra"></div><span class="sc-dRCTWM JQbba">Kochi</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Understood</button>
                                </div> -->
            </div>
        </div>
    </div>

    {{-- new banner --}}
    <!-- Banner Area -->
    <section id="home_two_banner">
        <div class="container setsearchbar">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_one_text">
                        <h1 class="seth1webhead">{{ getwebdetails('website_heading') }}</h1>
                        <p class="websubdetails">{{ getwebdetails('website_sub_heading') }}</p><br>
                        <div class="input-group" style="width: 50%;
                            margin-inline: auto;">

                            {{-- <input type="text" class="form-control inputbor border-0" id="search-box"
                                aria-describedby="basic-addon2" autocomplete="off" placeholder="Search spa "> --}}
                            {{-- <span class="input-group-addon inputsize  border-0"> <i class="fas fa-search fa-lg"
                                    style="margin-top: 15px;"></i></span>
                            <div id="suggesstion-box"></div> --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12 text-center">
                    <div class="text-center mt-3">
                        <h5 class="head2city">Top Cities</h5>
                    </div>
                    <button type="button" class="btn btn-default btnsavebtn1"> <a
                            href="https://pocketfriendly.in/state/delhi">Delhi</a></button>
                    <button type="button" class="btn btn-default btnsavebtn1"> <a
                            href="https://pocketfriendly.in/state/mumbai">Mumbai</a></button>
                    <button type="button" class="btn btn-default btnsavebtn1"> <a
                            href="https://pocketfriendly.in/state/pune">Pune</a></button>
                    <button type="button" class="btn btn-default btnsavebtn1"> <a
                            href="https://pocketfriendly.in/state/ahemedabad">Ahemedabad</a></button>
                    <button type="button" class="btn btn-default btnsavebtn1"> <a
                            href="https://pocketfriendly.in/state/chandigarh">Chandigarh</a></button>
                    <button type="button" class="btn btn-default btnsavebtn1"> <a
                            href="https://pocketfriendly.in/state/jaipur">Jaipur</a></button>
                    <button type="button" class="btn btn-default btnsavebtn1"> <a
                            href="https://pocketfriendly.in/state/gurugram">Gurugram</a></button>
                    <button type="button" class="btn btn-default btnsavebtn1"> <a
                            href="https://pocketfriendly.in/state/noida">Noida</a></button>
                    <button type="button" class="btn btn-default btnsavebtn1"> <a
                            href="https://pocketfriendly.in/state/chennai">Chennai</a></button>
                    <button type="button" class="btn btn-default btnsavebtn1"> <a
                            href="https://pocketfriendly.in/state/kolkata">Kolkata</a></button>
                    <button type="button" class="btn btn-default btnsavebtn1"> <a
                            href="https://pocketfriendly.in/state/goa">Goa</a></button>
                </div> --}}
            </div>
        </div>

        <div class="home_two_banner_slider_wrapper owl-carousel owl-theme">
            @if (!empty($banner[2]->banners))
                @foreach ($banner[2]->banners as $value)
                    <div class="banner_two_slider_item fadeInUp" data-wow-duration="2s"
                        style="background-image: url('{{image_url().$value->banner_image }}');">
                    </div>
                @endforeach
            @endif

        </div>

    </section>


    <section class="setmassagesec">
        <div class="container" id="common_banner2">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <!-- <h2>Book Your Masssge Anytime AnyWhere</h2> -->
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
                        <h2>Explore our hot massages</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="theme_nav_tab">
                        <nav class="theme_nav_tab_item">
                            <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                                <button class="nav-link active" id="nav-hotels-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-hotels" type="button" role="tab"
                                    aria-controls="nav-hotels" aria-selected="true">Hotels</button>
                                <button class="nav-link" id="nav-Spa -tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-Spa " type="button" role="tab" aria-controls="nav-Spa "
                                    aria-selected="false">Spa </button>
                                <button class="nav-link" id="nav-space-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-space" type="button" role="tab" aria-controls="nav-space"
                                    aria-selected="false">Space</button>
                                <button class="nav-link" id="nav-events-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-events" type="button" role="tab"
                                    aria-controls="nav-events" aria-selected="false">Events</button>
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

    {{-- new slider --}}
    <section class="section_padding_top" style=" display: inline-flex;background: white;width:100%;">
        <div class="withOptions" style="width:100%;">
            @if (!empty($banner[0]->banners))
            @foreach ($banner[0]->banners as $value)
            <div>
                <img src="{{ image_url().$value->banner_image }}" style="width:100%;">
            </div>
            @endforeach
            @endif
        </div>
    </section>


    <!-- Top destinations -->
    {{-- <section id="top_destinations" class="section_padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>Top Massage</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="destinations_content_box img_animation">
                        <img src="assets/img/destination/big-img.png" alt="img">
                        <div class="destinations_content_inner">
                            <h2>Up to</h2>
                            <div class="destinations_big_offer">
                                <h1>50</h1>
                                <h6><span>%</span> <span>Off</span></h6>
                            </div>
                            <h2>Offer packages</h2>
                            <a href="top-destinations.html" class="btn btn_theme btn_md">Book now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="destinations_content_box img_animation">
                                <a href="top-destinations.html">
                                    <img src="assets/img/destination/destination1.png" alt="img">
                                </a>
                                <div class="destinations_content_inner">
                                    <h3><a href="top-destinations.html">China</a></h3>
                                </div>
                            </div>
                            <div class="destinations_content_box img_animation">
                                <a href="top-destinations.html">
                                    <img src="assets/img/destination/destination2.png" alt="img">
                                </a>
                                <div class="destinations_content_inner">
                                    <h3><a href="top-destinations.html">Darjeeling</a></h3>
                                </div>
                            </div>
                            <div class="destinations_content_box img_animation">
                                <a href="top-destinations.html">
                                    <img src="assets/img/destination/destination3.png" alt="img">
                                </a>
                                <div class="destinations_content_inner">
                                    <h3><a href="top-destinations.html">Malaysia</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="destinations_content_box img_animation">
                                <a href="top-destinations.html">
                                    <img src="assets/img/destination/destination4.png" alt="img">
                                </a>
                                <div class="destinations_content_inner">
                                    <h3><a href="top-destinations.html">Gangtok</a></h3>
                                </div>
                            </div>
                            <div class="destinations_content_box img_animation">
                                <a href="top-destinations.html">
                                    <img src="assets/img/destination/destination5.png" alt="img">
                                </a>
                                <div class="destinations_content_inner">
                                    <h3><a href="top-destinations.html">Thailand</a></h3>
                                </div>
                            </div>
                            <div class="destinations_content_box img_animation">
                                <a href="top-destinations.html">
                                    <img src="assets/img/destination/destination6.png" alt="img">
                                </a>
                                <div class="destinations_content_inner">
                                    <h3><a href="top-destinations.html">Australia</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="destinations_content_box img_animation">
                                <a href="top-destinations.html">
                                    <img src="assets/img/destination/destination7.png" alt="img">
                                </a>
                                <div class="destinations_content_inner">
                                    <h3><a href="top-destinations.html">London</a></h3>
                                </div>
                            </div>
                            <div class="destinations_content_box img_animation">
                                <a href="top-destinations.html">
                                    <img src="assets/img/destination/destination8.png" alt="img">
                                </a>
                                <div class="destinations_content_inner">
                                    <h3><a href="top-destinations.html">USA</a></h3>
                                </div>
                            </div>
                            <div class="destinations_content_box">
                                <a href="top-destinations.html" class="btn btn_theme btn_md w-100">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

     <!-- imagination Area -->
     <section id="go_beyond_area" class="section_padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="heading_left_area">
                        <h2>Go for <span>Supreme packages</span></h2>
                        <h5>Discover your ideal experience with us</h5>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="imagination_boxed">
                        <a href="top-destinations.html">
                            <img src="assets/img/imagination/imagination1.png" alt="img">
                        </a>
                        <h3><a href="top-destinations.html">7% Discount for  <span>pre booking</span></a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="imagination_boxed">
                        <a href="top-destinations.html">
                            <img src="assets/img/imagination/imagination2.png" alt="img">
                        </a>
                        <h3><a href="#!">Spa around<span>the world</span></a></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="imagination_boxed">
                        <a href="top-destinations.html">
                            <img src="assets/img/imagination/imagination3.png" alt="img">
                        </a>
                        <h3><a href="top-destinations.html">Luxury spa<span>top deals</span></a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_padding_top" style=" display: inline-flex;background: white;width:100%;">
        <div class="withOptions" style="width:100%;">
            @if (!empty($banner[1]->banners))
            @foreach ($banner[1]->banners as $value)
            <div>
                <img src="{{ image_url().$value->banner_image }}" style="width:100%;">
            </div>
            @endforeach
            @endif
        </div>
    </section>

   


    <!-- Offer Area -->
    <section id="offer_area" class="section_padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="offer_area_box d-none-phone img_animation">
                        <img src="assets/img/offer/offer1.png" alt="img">
                        <div class="offer_area_content">
                            <h2>Special Offers</h2>
                            <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum. Stet clita kasd dolor sit amet. Lorem ipsum
                                dolor sit amet.</p>
                            <a href="#!" class="btn btn_theme btn_md">Offer deals</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="offer_area_box img_animation">
                        <img src="assets/img/offer/offer2.png" alt="img">
                        <div class="offer_area_content">
                            <h2>News letter</h2>
                            <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.</p>
                            <a href="#!" class="btn btn_theme btn_md">Subscribe now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="offer_area_box img_animation">
                        <img src="assets/img/offer/offer3.png" alt="img">
                        <div class="offer_area_content">
                            <h2>Spa tips</h2>
                            <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et.</p>
                            <a href="#!" class="btn btn_theme btn_md">Get tips</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Promotional Spa  Area -->
    <section id="promotional_Spa " class="section_padding_top" style="padding-bottom:50px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>What our client say about us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @if (!empty($customerdetail))
                @foreach ( $customerdetail->happy_customers as $value)
                <div class="col-lg-4 col-md-6">
                    <div class="all_review_box">
                        <div class="all_review_date_area">
                            <div class="all_review_date">
                                <h5>08 Dec, 2021</h5>
                            </div>
                            <div class="all_review_star">
                                <h5>Excellent</h5>
                                <div class="review_star_all">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="all_review_text">
                            <img src="https://pocketfriendly.alphacs.in/media/profile_picture/pngegg.png" alt="img">
                            <h4>{{ $value->customer_name }}</h4>
                            <p>" {{ $value->feedback }} "</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif

            </div>
        </div>
    </section>

@endsection
