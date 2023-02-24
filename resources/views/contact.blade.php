@extends('includes.main')
@section('main-container')
<style>
    .setpadding{
        padding-bottom: 30px;
    }
</style>
    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Area -->
    <section id="contact_main_arae" class="section_padding">
        <div class="container">
            {{-- <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section_heading_center">
                    <h2>Contact with us</h2>
                </div>
            </div>
        </div> --}}
        <div class="row">
            {{-- <div class="col-lg-12">
                <div class="phone_tuch_area">
                    <h3>Stay in touch</h3>
                    <h3><a href="tel:+00-123-456-789">+00 123 456 789</a></h3>
                </div>
            </div> --}}
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="contact_boxed">
                    {{-- <h6>Head office</h6> --}}
                    <h3>Address</h3>
                    <p>Car Market, Near Lajpat Nagar Metro Station</p>
                    <a href="%21.html#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">View on map</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="contact_boxed">
                    <h3>Contact</h3>
                    <p>+011-49074692</p>
                    <a
                        href="tel:+011-49074692">Make a call</a>
                    {{-- <a href="%21.html#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">View on map</a> --}}
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="contact_boxed">
                    <h3>Mail</h3>
                    <p>hello.pocketfriendly@gmail.com</p>
                    <a href="mailto:hello.pocketfriendly@gmail.com">Mail a query</a>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="contact_boxed">
                    <h6>Office schedule</h6>
                    <h3>Working hours</h3>
                    <p>Monday to Friday <br /> 9 am to 10pm</p>
                    <a href="%21.html#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">View on map</a>
                </div>
            </div> --}}
        </div>
            <div class="contact_main_form_area">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="section_heading_center">
                            <h2>Contact with us</h2>
                        </div>
                        <div class="contact_form">
                            <form method="POST" id="submitform">

                                <div id="showsuccesmessage" style="color:rgb(28, 195, 28);"></div>
                                {{-- <div id="showsuccesmessage" class="text-success"></div> --}}

                                @csrf()

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group setpadding">
                                            <input type="text" class="form-control bg_input" name="customer_name"
                                                id="customer_name" placeholder="Your name">
                                            <span class="text-danger error" id="customer_name_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group setpadding">
                                            <input type="email" class="form-control bg_input" name="email" id="email"
                                                placeholder="Email Address">
                                            <span class="text-danger error" id="email_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group setpadding">
                                            <input type="text" class="form-control bg_input" name="subject" id="subject"
                                                placeholder="Subject">
                                            <span class="text-danger error" id="subject_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group setpadding">
                                            <textarea class="form-control bg_input" rows="5" name="message" id="message" placeholder="Message"></textarea>
                                            <span class="text-danger error" id="message_error"></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group text-center">
                                            <input type="submit" name="submit" id="submit" class="btn btn_theme btn_md"
                                                value="Send message">
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
    <!-- Map Modal -->
    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-lg">
            <div class="modal-content">
                <div class="modal-body map_modal_content">
                    <div class="btn_modal_closed">
                        <button type="button" data-bs-dismiss="modal" aria-label="Close"><i
                                class="fas fa-times"></i></button>
                    </div>
                    <div class="map_area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1751.9863780367157!2d77.23425651744384!3d28.570580800000013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3acb72f236f%3A0x520c18b74fd34be5!2sLajpat%20Nagar%20Metro%20Station!5e0!3m2!1sen!2sin!4v1675621935550!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).on('submit', '#submitform', function(ev) {
            $('.error').html('');

            ev.preventDefault(); // Prevent browers default submit.
            var formData = new FormData(this);
            var error = false;

            if (error == false) {
                $.ajax({
                    url: "{{ url('submitenquiry') }} ",
                    type: 'post',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,

                    success: function(result) {
                        if (result.code == 200) {

                            $('#showsuccesmessage').html(result.message);
                            $('#showsuccesmessage').css('padding-bottom','20px');
                            $('#showsuccesmessage').css('text-align','center');
                            $('#showsuccesmessage').css('font-size','26px');
                            $('#submitform')[0].reset();
                            setTimeout(function() {
                                $('#showsuccesmessage').css('display','none');
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
@endsection
