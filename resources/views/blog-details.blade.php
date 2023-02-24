@extends('includes.main')
@section('main-container')

    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Blog Details</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>{{ $fetchblogdetails->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Area -->
    <section id="news_details_main_arae" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="news_detail_wrapper">
                        <div class="news_details_content_area">
                            <img src="{{ image_url().$fetchblogdetails->blog_image }}" alt="img">
                            <h2>{{ $fetchblogdetails->meta_title }}</h2>
                            <p>{{ $fetchblogdetails->meta_description }}</p>
                            <ul>
                                <li><i class="fas fa-circle"></i> Lorem ipsum dolor sit amet, cibo mundi ea duo, vim
                                    exerci phaedrum.</li>
                                <li><i class="fas fa-circle"></i> There are many variations of passages of Lorem Ipsum.
                                </li>
                                <li><i class="fas fa-circle"></i> Available but the majority have alteration in some
                                    injected or words.</li>
                                <li><i class="fas fa-circle"></i> There are many variations of passages of Lorem Ipsum
                                    which don't look even slightly
                                    believable.</li>
                            </ul>
                            <!-- <div class="row">
                                <div class="col-lg-6">
                                    <div class="news_details_left_img">
                                        <img src="{{ asset('assets/img/news/news_details_left.png')}}" alt="img">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="news_details_left_img">
                                        <img src="{{ asset('assets/img/news/news_details_right.png')}}" alt="img">
                                    </div>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci phaedrum. There are many
                                variations of passages of Lorem Ipsum available, but the majority have alteration in
                                some injected or words which don't look even slightly believable.</p> -->
                        </div>
                        
                        
                       
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="news_details_rightbar">
                        <div class="news_details_right_item">
                            <h3>Recent news</h3>
                            <div class="recent_news_item">
                                <div class="recent_news_img">
                                    <img src="{{ asset('assets/img/news/recent-1.png') }}" alt="img">
                                </div>
                                <div class="recent_news_text">
                                    <h5><a href="news-details.html">Ea exercitation qui nostrud sint labore irure in
                                            exercitation</a></h5>
                                    <p><a href="news.html">26 Oct 2021</a> <i class="fas fa-circle"></i> 8 min read</p>
                                </div>
                            </div>
                            <div class="recent_news_item">
                                <div class="recent_news_img">
                                    <img src="{{ asset('assets/img/news/recent-2.png') }}" alt="img">
                                </div>
                                <div class="recent_news_text">
                                    <h5><a href="news-details.html">Amet cupidatat aliqua dolor del proident veniam
                                            proident</a></h5>
                                    <p><a href="news.html">26 Oct 2021</a> <i class="fas fa-circle"></i> 8 min read</p>
                                </div>
                            </div>
                            <div class="recent_news_item">
                                <div class="recent_news_img">
                                    <img src="{{ asset('assets/img/news/recent-3.png') }}" alt="img">
                                </div>
                                <div class="recent_news_text">
                                    <h5><a href="news-details.html">Consequat enim aute sint sint ad et culpa eu
                                            magna</a></h5>
                                    <p><a href="news.html">26 Oct 2021</a> <i class="fas fa-circle"></i> 8 min read</p>
                                </div>
                            </div>
                            <div class="recent_news_item">
                                <div class="recent_news_img">
                                    <img src="{{ asset('assets/img/news/recent-4.png') }}" alt="img">
                                </div>
                                <div class="recent_news_text">
                                    <h5><a href="news-details.html">Proident dolore dolore cillum pelo aliquip irure
                                            elit</a></h5>
                                    <p><a href="news.html">26 Oct 2021</a> <i class="fas fa-circle"></i> 8 min read</p>
                                </div>
                            </div>
                        </div>
                        <div class="news_details_right_item">
                            <h3>Popular tags</h3>
                            <div class="news_tags_area">
                                <ul>
                                    <li><a href="#!" class="active">Assistant</a></li>
                                    <li><a href="#!">Tours</a></li>
                                    <li><a href="#!">Tour guide</a></li>
                                    <li><a href="#!">Business</a></li>
                                    <li><a href="#!">Corporate</a></li>
                                    <li><a href="#!">Manager</a></li>
                                    <li><a href="#!">Travel agency</a></li>
                                    <li><a href="#!">Destination</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="news_details_right_item">
                            <h3>Share causes</h3>
                            <div class="share_icon_area">
                                <ul>
                                    <li><a href="%21.html#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="%21.html#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="%21.html#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="%21.html#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   @endsection