@extends('includes.main')
@section('main-container')
    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>About Us</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tour Search Areas -->
    <section id="tour_details_main" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tour_details_leftside_wrapper">
                        <div class="tour_details_boxed">
                            <div class="tour_details_boxed_inner">
                                {!! getwebdetails('about_us'); !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
