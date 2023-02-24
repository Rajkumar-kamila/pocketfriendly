 <!-- Cta Area -->
 {{-- <section id="cta_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="cta_left">
                    <div class="cta_icon">
                        <img src="assets/img/common/email.png" alt="icon">
                    </div>
                    <div class="cta_content">
                        <h4>Get the latest news and offers</h4>
                        <h2>Subscribe to our newsletter</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="cat_form">
                    <form id="cta_form_wrappper">
                        <div class="input-group"><input type="text" class="form-control"
                                placeholder="Enter your mail address"><button class="btn btn_theme btn_md"
                                type="button">Subscribe</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<style>
    .setpadding{
        padding-bottom: 20px;
    }
</style>
 <!-- Footer  -->
 <footer id="footer_area">
     <div class="container">
         <div class="row">
             <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                 {{-- <div class="footer_heading_area">
                    <h5>Need any help?</h5>
                </div> --}}
                 <div class="footer_first_area">
                     <img src="https://pocketfriendly.in/images/foot.jpeg" alt="pocketfriendly" style="width:60%;"><br><br>
                     <p><a>Providing happiness everyday to everyone, Bringing change in many ways, we are India's most
                             affordable & loved app. Made in India Pocket Friendly <span><img
                                     src="https://pocketfriendly.in/images/flag.png" width="20"
                                     alt="Pocket Friendly"></span></a></p>
                     <div class="footer_inquery_area">
                         <h5>Follow us on</h5>
                         <ul class="soical_icon_footer">
                             <li><a href="https://www.facebook.com/www.pocketfriendly.in"><i
                                         class="fab fa-facebook"></i></a></li>
                             {{-- <li><a href="#!"><i class="fab fa-twitter-square"></i></a></li> --}}
                             <li><a href="https://instagram.com/pocketfriendly_official?igshid=YmMyMTA2M2Y="><i
                                         class="fab fa-instagram"></i></a></li>
                             {{-- <li><a href="#!"><i class="fab fa-linkedin"></i></a></li> --}}
                         </ul>
                     </div>
                 </div>
             </div>


             <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6 col-12">
                 <div class="footer_heading_area">
                     <h5>Company</h5>
                 </div>
                 <div class="footer_link_area">
                     <ul>
                         <li><a href="#" type="button" data-bs-toggle="modal" data-bs-target="#listyourbusiness">List Your Business</a></li>
                         <li><a href="{{ url('/loyality') }}">Loyalty</a></li>
                         <li><a href="{{ url('/about') }}">About Us</a></li>
                         <li><a href="#">Package Pricing</a></li>
                         <li><a href="{{ url('/privacy') }}">Privacy Policy</a></li>
                         <li><a href="{{ url('/terms') }}">Terms & Conditions</a></li>
                     </ul>
                 </div>
             </div>
             <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                 <div class="footer_heading_area">
                     <h5></h5>
                 </div>
                 <div class="footer_link_area">
                     <ul>
                         <li><a href="{{ url('/faq') }}">FAQ</a></li>
                         <li><a href="#">How It Works</a></li>
                         <li><a href="{{ url('/contact') }}">Contact</a></li>
                         <li><a href="{{ url('/disclaimer-note') }}">Disclaimer Note</a></li>
                         <li><a href="#">Login/SignUp</a></li>
                     </ul>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                 <div class="footer_heading_area">
                     <h5>Need any help?</h5>
                 </div>
                 <div class="footer_first_area">
                     <div class="footer_inquery_area">
                         <h5>Address</h5>
                         <h5> <a href="{{ getwebdetails('address') }}">{{ getwebdetails('address') }}</a></h5>
                     </div>
                     <div class="footer_inquery_area">
                         <h5>Contact for any help</h5>
                         <h5> <a
                                 href="tel:+{{ getwebdetails('phone_number') }}">{{ getwebdetails('phone_number') }}</a>
                         </h5>
                     </div>
                     <div class="footer_inquery_area">
                         <h5>Mail to our support team</h5>
                         <h5> <a href="mailto:{{ getwebdetails('email') }}">{{ getwebdetails('email') }}</a></h5>
                     </div>

                 </div>
             </div>
            {{-- <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>Other Services</h5>
                </div>
                <div class="footer_link_area">
                    <ul>
                        <li><a href="#">Community program</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Rewards Program</a></li>
                        <li><a href="#">PointsPLUS</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">List My Hotel</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                <div class="footer_heading_area">
                    <h5>Top cities</h5>
                </div>
                <div class="footer_link_area">
                    <ul>
                        <li><a href="#">Chicago</a></li>
                        <li><a href="#">New York</a></li>
                        <li><a href="#">San Francisco</a></li>
                        <li><a href="#">California</a></li>
                        <li><a href="#">Ohio </a></li>
                        <li><a href="#">Alaska</a></li>
                    </ul>
                </div>
            </div> --}}
         </div>
     </div>
 </footer>
 <!-- Sign Up Modal -->
<div class="modal fade" id="listyourbusiness" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                    <h3>List Your Business</h3>
                                    <h2>List Your Business with Us</h2>
                                </div>
                                <div class="common_author_form">
                                    <form method="POST" id="submitlistbusiness">

                                        @csrf()
                                        <div id="showbusinessmessage" style="color:rgb(28, 195, 28);"></div>

                                        <div class="row">
                                            {{-- <div class="col-lg-12">
                                                <div class="form-group setpadding">
                                                    <select class="form-control" aria-label="Default select example">
                                                        <option selected>Select An Option ▾</option>
                                                        <option value="List Your Business">List Your Business</option>
                                                        <option value="Build Your Business">Build Your Business</option>
                                                    </select>
                                                </div>
                                            </div> --}}
                                            <div class="col-lg-6">
                                                <div class="form-group setpadding">
                                                    <input type="text" class="form-control" name="business_name" placeholder="Enter Your Business Name" />
                                                    <span class="text-danger error" id="business_name_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group setpadding">
                                                    <input type="text" class="form-control" name="state" placeholder="Enter State" />
                                                    <span class="text-danger error" id="state_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group setpadding">
                                                    <input type="text" class="form-control" name="city" placeholder="Enter city" />
                                                    <span class="text-danger error" id="city_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group setpadding">
                                                    <input type="text" class="form-control" name="contacting_person" placeholder="Enter Your Name" />
                                                    <span class="text-danger error" id="contacting_person_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group setpadding">
                                                    <input type="text" class="form-control" name="mobile_number" placeholder="Enter Your Mobile Number" />
                                                    <span class="text-danger error" id="mobile_number_error"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group setpadding">
                                                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address" />
                                                    <span class="text-danger error" id="email_error"></span>
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-12">
                                                <div class="form-group setpadding">
                                                    <textarea class="form-control bg_input" rows="3" placeholder="Something About Yourself"></textarea>
                                                </div>
                                            </div> --}}
                                            <div class="col-lg-12">
                                                <div class="common_form_submit">
                                                    <button type="submit" class="btn btn_theme btn_md">Add Your Business</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div> --}}
      </div>
    </div>
</div>
 <div class="copyright_area">
     <div class="container">
         <div class="row align-items-center">
             <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                 <div class="copyright_left">
                     <p>© 2022 All Rights Reserved.</p>
                 </div>
             </div>
             <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                 <div class="copyright_right">
                     {{-- <img src="assets/img/common/cards.png" alt="img"> --}}
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="go-top">
     <i class="fas fa-chevron-up"></i>
     <i class="fas fa-chevron-up"></i>
 </div>

 <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
 <!-- Bootstrap js -->
 <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
 <!-- Meanu js -->
 <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
 <!-- owl carousel js -->
 <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
 <!-- wow.js -->
 <script src="{{ asset('assets/js/wow.min.js') }}"></script>
 <!-- Custom js -->
 <script src="{{ asset('assets/js/custom.js') }}"></script>
 <script src="{{ asset('assets/js/add-form.js') }}"></script>
 <script src="{{ asset('assets/js/form-dropdown.js') }}"></script>

 <script>
    //  $.ajax({success: function(result){
    //      $("#staticBackdrop").modal('show');
    //  }});
 </script>
 <!-- jQuery -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <!-- Slick -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
 <script>
   $('.basic').slick({
     fade: true,
     cssEase: 'ease-in-out',
     arrows: true
   });
   $('.withOptions').slick({
     dots: true,
     arrows: true,
     autoplay: true,
     autoplayspeed: 1000,
     centerMode: true,
   });
 </script>
<script>
    $(document).on('submit', '#submitlistbusiness', function(ev) {
        $('.error').html('');

        ev.preventDefault(); // Prevent browers default submit.
        var formData = new FormData(this);
        var error = false;

        if (error == false) {
            $.ajax({
                url: "{{ url('submitbusinesslist') }} ",
                type: 'post',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,

                success: function(result) {
                    if (result.code == 200) {

                        $('#showbusinessmessage').html(result.message);
                        $('#showbusinessmessage').css('padding-bottom','20px');
                        $('#showbusinessmessage').css('text-align','center');
                        $('#showbusinessmessage').css('font-size','26px');
                        $('#submitlistbusiness')[0].reset();
                        setTimeout(function() {
                            $('#showbusinessmessage').css('display','none');
                        }, 5000);
                    } else {
                        $.each(result.message, function(prefix, val) {
                            $('#' + prefix + '_error').text(val[0]);
                        });
                    }
                },
                error: function(xhr) {
                    
                    $(".hstack").css('display', 'flex');
                },
                complete: function() {
                    $(".hstack").css('display', 'flex');
                    $(".hstackloader").text('');
                },
            })
        }
    })
</script>

<script>
    $(document).on('submit', '#sendloginotp', function(ev) {
        $('.error').html('');

        ev.preventDefault(); // Prevent browers default submit.
        var formData = new FormData(this);
        var error = false;

        if (error == false) {
            $.ajax({
                url: "{{ url('sendloginotp') }} ",
                type: 'post',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,

                success: function(result) {
                    if (result.code == 200) {

                        $('#showotpmessage').html(result.message);
                        $('#showotpmessage').css('padding-bottom','20px');
                        $('#showotpmessage').css('text-align','center');
                        $('#showotpmessage').css('font-size','26px');
                        $('#disablephone').attr('disabled', true);
                        $('#showotpfield').show();
                        $('.changesendbtn').hide();
                        $('.changeverifybtn').show();
                        // $('#submitlistbusiness')[0].reset();
                        setTimeout(function() {
                            $('#showotpmessage').hide();
                        }, 5000);

                        if(result.message == 'OTP verified successfully') {
                            window.location.reload();
                        }

                    } else {
                        $.each(result.message, function(prefix, val) {
                            $('#' + prefix + '_error').text(val[0]);
                        });
                    }
                },
                error: function(xhr) {
                    
                    $(".hstack").css('display', 'flex');
                },
                complete: function() {
                    $(".hstack").css('display', 'flex');
                    $(".hstackloader").text('');
                },
            })
        }
    })
</script>
 </body>

 </html>
