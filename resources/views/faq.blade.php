@extends('includes.main')
@section('main-container')
    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Frequently Asked Questions</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Frequently Asked Questions</li>
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
                                {!! getwebdetails('frequently_asked_questions'); !!}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
