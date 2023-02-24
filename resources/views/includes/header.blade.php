<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ getwebdetails('meta_description');}}">
    <meta name="keywords" content="{{ getwebdetails('meta_keywords');}}   ">
    <!-- Title -->
    <title>{{ getwebdetails('meta_title');}}</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" />
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.all.min.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />
    <!-- navber css -->
    <link rel="stylesheet" href="{{ asset('assets/css/navber.css') }}" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}" />
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/pf_logo.png') }}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <style>
        .basic,
    .withOptions {
      margin: 0 0px;
    }

    .basic div,
    .withOptions div {
      width: 100%;
      height: 250px;
    }
    .setpadding{
        padding-bottom: 20px;
    }
    </style>

    <style>
        .input-group-addon:first-child {
            border-right: 0;
        }

        .input-group-addon {
            padding: 6px 12px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1;
            color: #555;
            text-align: center;
            background-color: #eee;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .inputsize {
            background: #fff;
            border: 0px;
        }
        .URchM {
            width: 100%;
            margin: 0px;
            display: flex;
            flex-wrap: wrap;
            position: relative;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding: 8px 8px 0px;
        }
    </style>
</head>

<body>
    <!-- preloader Area -->
    {{-- <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-spinner">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- modal -->


    <!-- Header Area -->
    <header class="main_header_arae">
        <!-- Top Bar -->
        <div class="topbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <ul class="topbar-list">
                            <li><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#currentlocation"><span><i class="fas fa-map-marker-alt"></i> Use My Current Location</span></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6">
                            @if(empty(Session::get('token')))
                            <ul class="topbar-others-options">
                                <li><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#loginmodal">Login <i class="bi bi-box-arrow-in-right"></i></a></li>
                            </ul>
                            @else
                            <nav class="navbar navbar-expand-lg navbar-light" style="padding: 0px!important;">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding:0px!important;">
                                        <i class="bi bi-person-fill"></i> My account
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{url('myprofile')}}">Profile</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="{{ url('logout') }}">Logout</a></li>
                                    </ul>
                                    </li>
                                </ul>
                            </nav>
                            @endif
                            
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Bar -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="{{url('/')}}">
                                <img class="logoimage" src="{{ asset('assets/img/pf_logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light" style="background: black;">

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <div class="row" style="display:flex;">
                                <div class="col-md-4" style="align-self: center;">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Massages
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu setdropwidth">
                                                <li class="nav-item">
                                                    {{-- <a href="#" class="nav-link">Thai Massage</a> --}}
                                                    <div class="row">
                                                        @if (!empty(gettherapies()))
                                                        @foreach (gettherapies() as $value )
                                                       
                                                        <div class="col-md-4 setpaddingbotton"><a href="{{ url('spa/'.Str::slug($value->title))}}" class="nav-link">{{$value->title}}</a></div>

                                                        @endforeach
                                                        @endif
                                                        {{-- <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Aromatherapy</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Ayurvedic Therapy</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Balinese Massage</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Bamboo Massage</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Body Polishing</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Candle oil Massage</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Classic Massage</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Couple Friendly</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Couple International Massage</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Couple Special Jacuzzi Massage</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Couples Massage</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">De Tanning</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">De Stress Therapy</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Deep Tissue Massage</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Dry Message</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Foot Reflexology</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Full Body Message</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Hammam</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Head Message</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Hot Stone Message</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Jacuzzi Message</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Nuru Therapy</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Scrub</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Shirodhara</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Signature Message</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Swedish Message</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Thai Massage</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Traditional Thai Message</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Trimmer</a></div>
                                                        <div class="col-md-4 setpaddingbotton"><a href="#" class="nav-link">Turkish Message</a></div> --}}
                                                    </div>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Deals
                                                <i class="fas fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                @if (!empty($getspacategory))
                                                @foreach ($getspacategory as $value )
                                                <li class="nav-item">
                                                    <a href="{{url('/standard_spa')}}" class="nav-link">{{$value->title}}</a>
                                                </li>
                                                @endforeach
                                                @endif
                                                <li class="nav-item">
                                                    <a href="{{url('/standard_spa')}}"
                                                        class="nav-link">Premium SPA's</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{url('/standard_spa')}}"
                                                        class="nav-link">Supreme SPA's</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{url('/blogs')}}" class="nav-link">
                                                Blogs
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{url('/supreme')}}" class="nav-link">
                                                Supreme
                                            </a>
                                        </li>

                                    </ul>

                                </div>
                                <div class="col-md-4">
                                    <div class="others-options d-flex align-items-center">
                                        <a class="navbar-brand" href="{{url('/')}}"
                                            style="text-align: center;margin-left: 25px;">
                                            <img src="{{ asset('assets/img/pf_logo.png')}}" alt="logo" style="width: 24%;">
                                        </a>
                                    </div>
                                </div>
                                {{-- <div class="col-md-1"> --}}
                                    
                                {{-- </div> --}}
                                <div class="col-md-4">
                                    
                                    <div class="others-options d-flex align-items-center" style="height: 100%;float: right;">
                                        <div class="search-container">
                                            <form action="/search" method="get">
                                              <input class="search expandright" id="searchright" type="search" name="q" placeholder="Search">
                                              <label class="button searchbutton" for="searchright"><span class="mglass">&#9906;</span></label>
                                            </form>
                                        </div>

                                        <div class="option-item">
                                            <a href="{{url('packages')}}" class="btn  btn_navber">Save Money</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="#" class="search-box"><i class="fas fa-search"></i></a>
                                </div>
                                <div class="option-item">
                                    <a href="contact.html" class="btn  btn_navber">Get free quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- search -->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="button"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>


  <!-- Login Modal -->
  <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="float:right;z-index:999;position: relative;"></button>
          <!--  Common Author Area -->
            <section id="{{--common_author_area--}}" class="{{--section_padding--}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="{{--common_author_boxed--}}">
                                <div class="common_author_heading">
                                    <h3>Login your account</h3>
                                    <h2>Logged in to stay in touch</h2>
                                </div>
                                <div class="common_author_form">
                                    <form method="POST" id="sendloginotp">
                                        @csrf()
                                        <div id="showotpmessage" style="color:rgb(28, 195, 28);"></div>

                                        <div class="form-group setpadding">
                                            <input type="text" class="form-control" name="phone_number" id="" placeholder="Enter Mobile Number" />
                                        </div>
                                        <div class="form-group setpadding" id="showotpfield" style="display:none;">
                                            <input type="text" class="form-control" name="otp" id="otp" placeholder="Enter OTP" />
                                        </div>
                                        <div class="common_form_submit changesendbtn" style="display:block;">
                                            <button class="btn btn_theme btn_md " >Send OTP</button>
                                        </div>
                                        <div class="common_form_submit changeverifybtn" style="display:none;">
                                            <button class="btn btn_theme btn_md " >Verify OTP</button>
                                        </div>
                                        <div class="have_acount_area">
                                            <p>Don't get any OTP ? <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#signupmodal">Resend OTP</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
      </div>
    </div>
  </div>

  <!-- Sign Up Modal -->
  <div class="modal fade" id="signupmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
       
        <div class="modal-body">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="float:right;z-index:999;position: relative;"></button>
            <section id="{{--common_author_area--}}" class="{{--section_padding--}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="{{--common_author_boxed--}}">
                                <div class="common_author_heading">
                                    <h3>Register account</h3>
                                    <h2>Register your account</h2>
                                </div>
                                <div class="common_author_form">
                                    <form action="#" id="main_author_form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter first name*" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter last name*" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                placeholder="your email address (Optional)" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Mobile number*" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User name*" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" />
                                        </div>
                                        <div class="common_form_submit">
                                            <button class="btn btn_theme btn_md">Register</button>
                                        </div>
                                        <div class="have_acount_area other_author_option">
                                            <div class="line_or">
                                                <span>or</span>
                                            </div>
                                            <ul>
                                                <li><a href="#!"><img src="{{ asset('assets/img/icon/google.p   ng') }}" alt="icon"></a></li>
                                                <li><a href="#!"><img src="{{ asset('assets/img/icon/facebook.png') }}" alt="icon"></a></li>
                                                <li><a href="#!"><img src="{{ asset('assets/img/icon/twitter.png') }}" alt="icon"></a></li>
                                            </ul>
                                            <p>Already have an account? <a href="login.html">Log in now</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
      </div>
    </div>
  </div>


