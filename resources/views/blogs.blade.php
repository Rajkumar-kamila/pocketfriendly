@extends('includes.main')
@section('main-container')
 <!-- Common Banner Area -->
 <section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Blog</h2>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><span><i class="fas fa-circle"></i></span>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Area -->
<section id="news_main_arae" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section_heading_center">
                    <h2>Blog</h2>
                </div>
            </div>
        </div>

        <div class="new_main_news_box">
            <div class="row">
                @if (!empty($getblog))
                @foreach ( $getblog->blogs_objects as $value)
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="news_item_boxed">
                        <div class="news_item_img">
                            <img src="{{image_url().$value->blog_image}}" alt="img" style="height: 280px!important;
                                object-fit: cover;">
                        </div>
                        <div class="news_item_content">
                            <h3><a href="news-details.html">{{$value->title}}
                                </a></h3>
                            <p>{{substr($value->description,0,180)}}<a href="{{url('blog-details')}}/{{$value->slug}}">Read More..</a></p>
                        </div>
                        <div class="news_author_area">
                            <div class="news_author_area_name">
                                <p>Created at<i class="fas fa-circle"></i><a href="#">{{substr($value->created_at,0,10)}}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
                {{-- <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="news_item_boxed">
                        <div class="news_item_img">
                            <a href="news-details.html"><img src="assets/img/news/news-2.png" alt="img"></a>
                        </div>
                        <div class="news_item_content">
                            <h3><a href="news-details.html">
                                    Nostrud occaecat reprehenderit elit pariatur do occaecat.
                                </a></h3>
                            <p>Irure enim eiusmod ipsum do Lorem sit consectetur enim consectetur. Nostrud ipsum
                                eiusmod eiusmod culpa anim excepteur.</p>
                        </div>
                        <div class="news_author_area">
                            <div class="news_author_img">
                                <img src="assets/img/news/author-2.png" alt="img">
                            </div>
                            <div class="news_author_area_name">
                                <h4>Connley jimmy</h4>
                                <p><a href="news.html">26 Oct 2021</a> <i class="fas fa-circle"></i> 8 min read</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="news_item_boxed">
                        <div class="news_item_img">
                            <a href="news-details.html"><img src="assets/img/news/news-3.png" alt="img"></a>
                        </div>
                        <div class="news_item_content">
                            <h3><a href="news-details.html">
                                    Ea non officia minim cupidatat culpa et reprehenderit esse ea
                                </a></h3>
                            <p>Irure enim eiusmod ipsum do Lorem sit consectetur enim consectetur. Nostrud ipsum
                                eiusmod eiusmod culpa anim excepteur.</p>
                        </div>
                        <div class="news_author_area">
                            <div class="news_author_img">
                                <img src="assets/img/news/author-3.png" alt="img">
                            </div>
                            <div class="news_author_area_name">
                                <h4>Astom martin</h4>
                                <p><a href="news.html">26 Oct 2021</a> <i class="fas fa-circle"></i> 8 min read</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="news_item_boxed">
                        <div class="news_item_img">
                            <a href="news-details.html"><img src="assets/img/news/news-1.png" alt="img"></a>
                        </div>
                        <div class="news_item_content">
                            <h3><a href="news-details.html">
                                    Anim labore dolor mollit esse do labore adipisicing fugiat
                                </a></h3>
                            <p>Irure enim eiusmod ipsum do Lorem sit consectetur enim consectetur. Nostrud ipsum
                                eiusmod eiusmod culpa anim excepteur.</p>
                        </div>
                        <div class="news_author_area">
                            <div class="news_author_img">
                                <img src="assets/img/news/author-1.png" alt="img">
                            </div>
                            <div class="news_author_area_name">
                                <h4>Simon donald</h4>
                                <p><a href="news.html">26 Oct 2021</a> <i class="fas fa-circle"></i> 8 min read</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="news_item_boxed">
                        <div class="news_item_img">
                            <a href="news-details.html"><img src="assets/img/news/news-5.png" alt="img"></a>
                        </div>
                        <div class="news_item_content">
                            <h3><a href="news-details.html">
                                    Ex ad cupidatat aliquip nostrud duis deserunt culpa esse
                                </a></h3>
                            <p>Irure enim eiusmod ipsum do Lorem sit consectetur enim consectetur. Nostrud ipsum
                                eiusmod eiusmod culpa anim excepteur.</p>
                        </div>
                        <div class="news_author_area">
                            <div class="news_author_img">
                                <img src="assets/img/news/author-5.png" alt="img">
                            </div>
                            <div class="news_author_area_name">
                                <h4>Jesica aliston</h4>
                                <p><a href="news.html">26 Oct 2021</a> <i class="fas fa-circle"></i> 8 min read</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="news_item_boxed">
                        <div class="news_item_img">
                            <a href="news-details.html"><img src="assets/img/news/news-6.png" alt="img"></a>
                        </div>
                        <div class="news_item_content">
                            <h3><a href="news-details.html">
                                    Occaecat nulla anim cillum anim id irure nostrud elit excepteur nisi
                                </a></h3>
                            <p>Irure enim eiusmod ipsum do Lorem sit consectetur enim consectetur. Nostrud ipsum
                                eiusmod eiusmod culpa anim excepteur.</p>
                        </div>
                        <div class="news_author_area">
                            <div class="news_author_img">
                                <img src="assets/img/news/author-6.png" alt="img">
                            </div>
                            <div class="news_author_area_name">
                                <h4>Patricia ramise</h4>
                                <p><a href="news.html">26 Oct 2021</a> <i class="fas fa-circle"></i> 8 min read</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="pagination_area">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
        {{-- {!! getblog(); !!} --}}
    </div>
</section>
<script>
//     getblogdetails();
//   function getblogdetails() {
//     $.ajax({
//       type: "POST",
//       url: "https://pocketfriendly.alphacs.in/api/list-your-business/",
//       success: function(response) {
//         alert(response);
//         content.html(response);

//       }
//     })
//   }
// $.ajax({
//     type: 'POST',
//     url: 'test.php',
//     data: { album: this.title },
//     success: function(response) {
//         alert(response);
//         content.html(response);
//     }
// });
</script>
@endsection

