@extends('includes.main')
@section('main-container')
    <style>
        section {
            background-color: #f7f6fb;
            color: #808080;
        }

        .bg-maincolor {
            background-image: linear-gradient(to right, #8b3eea 0%, #c8a9ef 100%);
        }

        .bg-maincolor2 {
            background-image: linear-gradient(to right, #8b3eea 0%, #cb30ea 100%);
        }

        .bg-maincolor3 {
            background-image: linear-gradient(to right, #8b3eea 0%, #c8a9ef 100%);
        }

        .color-main {
            border-color: #5b83cd !important;
            color: #5b83cd !important;
        }

        .color-main2 {
            border-color: #c280bf !important;
            color: #c280bf !important;
        }

        .color-main3 {
            border-color: #2165a9 !important;
            color: #2165a9 !important;
        }

        .color-main4 {
            border-color: #3197d4 !important;
            color: #3197d4 !important;
        }

        .color-main5 {
            border-color: #208291 !important;
            color: #208291 !important;
        }

        .color-main6 {
            border-color: #32b9c2 !important;
            color: #32b9c2 !important;
        }

        .color-main7 {
            border-color: #8073b2 !important;
            color: #8073b2 !important;
        }

        .list-bordered {
            list-style: none;
            overflow: hidden;
            padding: 0;
        }

        .list-bordered li {
            border-bottom: 1px solid #e1e1e1;
            border-top: 1px solid #e1e1e1;
            padding-bottom: 15px;
            padding-top: 14px;
        }

        .list-bordered li+li {
            border-top: none;
        }

        .list-bordered.no-top-border>li:first-child {
            border-top: none;
        }

        .list-bordered.no-bottom-border>li:last-child {
            border-bottom: none;
        }

        .small-text {
            color: #4c4c4c;
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 0.2em;
            text-transform: uppercase;
        }

        h5.special-heading {
            font-size: 24px;
            font-weight: 200;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }

        @media (max-width: 575px) {
            h5.special-heading {
                font-size: 20px;
            }
        }

        .special-heading {
            font-size: 38px;
            font-weight: 900;
            line-height: 1;
            word-wrap: break-word;
        }

        .special-heading.text-lowercase {
            font-size: 62px;
            font-weight: 300;
            line-height: 1.1;
            margin-bottom: 0;
        }

        h5.special-heading {
            letter-spacing: 0.2em;
            margin: -3px 0 0;
        }

        .special-heading+h1 {
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: #5d5d5d;
            font-size: 3vw;
            margin: 20px 0;
        }

        @media (max-width: 575px) {
            .special-heading+h1 {
                font-size: 35px;
            }
        }

        .allbtnfoot { 
            border: 0;
            border-radius: 5px;
            box-sizing: border-box;
            height: 60px;
            padding: 2px;
            width: 180px;
            line-height: 3.2;
            color: #fff;
            font-size: 18px;
        }

        .btn-maincolor,
        .btn-maincolor:not(:disabled):not(.disabled):active {
            background-image: linear-gradient(to right, #8b3eea 0%, #c8a9ef 100%);
        }

        .btn-maincolor2,
        .btn-maincolor2:not(:disabled):not(.disabled):active {
            background-image: linear-gradient(to right, #8b3eea 0%, #cb30ea 100%);
        }

        .btn-maincolor3,
        .btn-maincolor3:not(:disabled):not(.disabled):active {
            background-image: linear-gradient(to right, #8b3eea 0%, #c8a9ef 100%);
        }

        .btn-outline-maincolor:hover span,
        .btn-outline-maincolor2:hover span,
        .btn-outline-maincolor3:hover span {
            background: transparent;
            color: #fff;
        }

        .btn-outline-maincolor span,
        .btn-outline-maincolor2 span,
        .btn-outline-maincolor3 span {
            background-color: #fff;
        }

        .btn-outline-maincolor,
        .btn-outline-maincolor:not(:disabled):not(.disabled):active {
            background-image: linear-gradient(to right, #8b3eea 0%, #c8a9ef 100%);
            color: #c280bf;
        }

        .btn-outline-maincolor2,
        .btn-outline-maincolor2:not(:disabled):not(.disabled):active {
            background-image: linear-gradient(to right, #8b3eea 0%, #c8a9ef 100%);
            color: #3197d4;
        }

        .btn-outline-maincolor3,
        .btn-outline-maincolor3:not(:disabled):not(.disabled):active {
            background-image: linear-gradient(to right, #8b3eea 0%, #c8a9ef 100%);
            color: #32b9c2;
        }

        .pricing-plan {
            box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            margin-top: 25px;
            padding: 40px 40px 10px;
            text-align: center;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        .pricing-plan .price-wrap {
            -webkit-align-items: center;
            align-items: center;
            -webkit-box-align: center;
            -webkit-box-pack: center;
            font-size: 20px;
            -webkit-justify-content: center;
            justify-content: center;
            line-height: 0.7;
            margin: 42px 0 3px;
        }

        .pricing-plan .price-wrap[class*="bg-"] {
            margin-bottom: 0;
            margin-top: 50px;
            padding: 30px 30px 10px;
        }

        .pricing-plan .price-wrap .plan-price {
            font-size: 40px;
            font-weight: 700;
            padding: 0 6px;
        }

        .pricing-plan [class*="bg-"] {
            margin-left: -41px;
            margin-right: -41px;
            padding: 10px 30px 27px;
        }

        .pricing-plan .plan-name[class*="bg-"] {
            margin-top: -40px;
            padding-top: 30px;
        }

        .pricing-plan .plan-name h3 {
            font-size: 24px;
            letter-spacing: 0.2em;
            line-height: 1;
            color: #ffffff;
        }

        @media (min-width: 1200px) {
            .pricing-plan {
                padding: 57px 60px 10px;
            }

            .pricing-plan [class*="bg-"] {
                margin-left: -61px;
                margin-right: -61px;
            }

            .pricing-plan .plan-name[class*="bg-"] {
                margin-top: -57px;
            }

            .pricing-plan.plan-featured [class*="bg-"] {
                margin-left: -60px;
                margin-right: -60px;
            }
        }

        .pricing-plan .plan-features {
            margin: 38px 0 0;
        }

        .pricing-plan .plan-button {
            position: relative;
            top: 38px;
        }

        .pricing-plan.plan-featured {
            border: 5px solid #2165a9;
            -webkit-transform: translateY(-10px);
            -ms-transform: translateY(-10px);
            transform: translateY(-10px);
        }

        .pricing-plan.plan-featured .plan-button {
            top: 48px;
        }

        .pricing-plan.rounded .plan-name {
            border-radius: 5px 5px 0 0;
        }

        .plan-desc {
            -webkit-box-pack: justify;
            display: -webkit-box;
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: space-between;
            justify-content: space-between;
            margin-top: 40px;
        }

        @media (max-width: 767px) {
            .plan-desc {
                -webkit-justify-content: space-around !important;
                justify-content: space-around !important;
            }
        }

        @media (max-width: 991px) {
            .plan-desc {
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
            }
        }

        @media (min-width: 991px) and (max-width: 1200px) {
            .plan-desc {
                margin: 40px -15px 0;
            }
        }

        .plan-desc h4 {
            font-weight: 200;
            letter-spacing: 5px;
            line-height: 1.3;
            margin: 0;
        }

        .plan-desc .price-icon {
            -webkit-transform: translateX(7%);
            -ms-transform: translateX(7%);
            transform: translateX(7%);
        }

        .plan-desc p {
            line-height: 0;
        }

        .plan-desc .plan-content {
            margin-top: 10px;
        }

        @media (max-width: 767px) {
            .plan-desc .plan-content {
                margin-top: 25px;
            }
        }

        .pricing-plan {
            box-shadow: 0 0px 10px 0px rgba(0, 0, 0, 0.1);
            background: #ffffff;
        }

        @media (min-width: 991px) {
            .pricing-plan.pricing-plan:hover {
                -webkit-transform: scale(1.1);
                -ms-transform: scale(1.1);
                transform: scale(1.1);
            }
        }
    </style>
    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Package</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Package</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <section class="choose-package section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2" id="price">
                    {{-- <h5 class="special-heading text-center">Choose</h5> --}}
                    {{-- <h2 class="text-center">Package</h2> --}}
                </div>
            </div>
            <div class="divider-45 d-none d-lg-block"></div>
            <div class="row c-gutter-60">
                

                @if (!empty($getspadetails))
                    @foreach ($getspadetails as $value)
                    <div class="col-lg-4 col-12">
                        <div class="pricing-plan hero-bg rounded">
                            <div class="plan-name text-uppercase bg-maincolor">
                                <h3>
                                    {{ $value->title }}
                                </h3>
                            </div>
                            {{-- <div class="tour_details_right_boxed"> --}}
                                <div class="valid_date_area">
                                    <div class="valid_date_area_one">
                                        <h5>Valid from</h5>
                                        <p>01 Feb 2022</p>
                                    </div>
                                    <div class="valid_date_area_one">
                                        <h5>Valid till</h5>
                                        <p>15 Feb 2022</p>
                                    </div>
                                </div>
                                <div class="tour_package_details_bar_list">
                                    <h5>Package details</h5>
                                    <ul>
                                        <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>
                                        <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian
                                            culture
                                        </li>
                                        <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>
                                        <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver
                                            allowances
                                        </li>
                                        <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>
                                    </ul>
                                </div>
                                {{-- <div class="tour_package_details_bar_price">
                                    <h5>Price</h5>
                                    <div class="tour_package_bar_price">
                                        <h6><del>$ 35,500</del></h6>
                                        <h3>$ 30,500 <sub>/Per serson</sub> </h3>
                                    </div>
                                </div> --}}
                                <div class="price-wrap d-flex">
                                    <h6><del>$ 35,500</del></h6>
                                    <span class="plan-sign small-text">Rs</span>
                                    <span class="plan-price color-main3">79</span>
                                    <span class="plan-decimals small-text">/mo</span>
                                </div>
                            {{-- </div> --}}
                            <div class="plan-button">
                                <a href="#" class="btn btn-maincolor allbtnfoot"><span>Purchase</span></a>
                            </div>
                        </div>
                        <div class="divider-45 d-block d-lg-none"></div>
                    </div>
                    @endforeach
                @endif


                {{-- <div class="col-lg-4 col-12">
                    <div class="pricing-plan hero-bg rounded">
                        <div class="plan-name text-uppercase bg-maincolor2">
                            <h3>
                                Premium Packages
                            </h3>
                        </div>
                        <div class="valid_date_area">
                            <div class="valid_date_area_one">
                                <h5>Valid from</h5>
                                <p>01 Feb 2022</p>
                            </div>
                            <div class="valid_date_area_one">
                                <h5>Valid till</h5>
                                <p>15 Feb 2022</p>
                            </div>
                        </div>
                        <div class="tour_package_details_bar_list">
                            <h5>Package details</h5>
                            <ul>
                                <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>
                                <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian
                                    culture
                                </li>
                                <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>
                                <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver
                                    allowances
                                </li>
                                <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>
                            </ul>
                        </div>
                        
                        <div class="price-wrap d-flex">
                            <h6><del>$ 35,500</del></h6>
                            <span class="plan-sign small-text">Rs</span>
                            <span class="plan-price color-main3">79</span>
                            <span class="plan-decimals small-text">/mo</span>
                        </div>
                       
                        <div class="plan-button">
                            <a href="#" class="btn btn-maincolor2 allbtnfoot"><span>Purchase</span></a>
                        </div>
                    </div>
                </div>
                <div class="divider-20 d-block d-md-none"></div>
                <div class="col-lg-4 col-12">
                    <div class="pricing-plan hero-bg rounded">
                        <div class="plan-name text-uppercase bg-maincolor3">
                            <h3>
                                Supreme Packages
                            </h3>
                        </div>
                        <div class="valid_date_area">
                            <div class="valid_date_area_one">
                                <h5>Valid from</h5>
                                <p>01 Feb 2022</p>
                            </div>
                            <div class="valid_date_area_one">
                                <h5>Valid till</h5>
                                <p>15 Feb 2022</p>
                            </div>
                        </div>
                        <div class="tour_package_details_bar_list">
                            <h5>Package details</h5>
                            <ul>
                                <li><i class="fas fa-circle"></i>Buffet breakfast as per the Itinerary</li>
                                <li><i class="fas fa-circle"></i>Visit eight villages showcasing Polynesian
                                    culture
                                </li>
                                <li><i class="fas fa-circle"></i>Complimentary Camel safari, Bonfire,</li>
                                <li><i class="fas fa-circle"></i>All toll tax, parking, fuel, and driver
                                    allowances
                                </li>
                                <li><i class="fas fa-circle"></i>Comfortable and hygienic vehicle</li>
                            </ul>
                        </div>
                        <div class="price-wrap d-flex">
                            <span class="plan-sign small-text">Rs</span>
                            <span class="plan-price color-main5">49</span>
                            <span class="plan-decimals small-text">/mo</span>
                        </div>
                        <div class="plan-button">
                            <a href="#" class="btn btn-maincolor3 allbtnfoot"><span>Purchase</span></a>
                        </div>
                    </div>

                </div> --}}
            </div>
        </div>
    </section>
@endsection
