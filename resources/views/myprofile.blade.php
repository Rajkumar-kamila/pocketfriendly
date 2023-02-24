@extends('includes.main')
@section('main-container')
    <!-- Dashboard Area -->
    @include('includes.sidebar')
    <div class="col-lg-9">
        <div class="dashboard_common_table">
            <h3>My Profile</h3>
            <div class="profile_update_form">

                <form method="POST" id="updateprofile">
                    <div id="showsuccesmessage" style="color:rgb(18, 29, 18);"></div>
                    @csrf()
                    <div class="row">

                        {{-- <div class="col-lg-6">
                                        <input type="hidden" class="form-control" name="order_id" id="order_id" placeholder="Your Name" value="">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="hidden" class="form-control" name="otp" id="otp" placeholder="Your Name" >
                                    </div> --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="full_name">Your Full Name</label>
                                <input type="text" class="form-control" value="{{ $item['full_name'] ?? '' }}" name="full_name" id="full_name"
                                    placeholder="Your Name">
                                <span class="text-danger error" id="full_name_error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="text" class="form-control" name="email" id="email"
                                    placeholder="Your Email" value="{{ $item['email'] ?? '' }}">
                                <span class="text-danger error" id="email_error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="date_of_birth">Date of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth"
                                    placeholder="Your Date of Birth" value="{{ $item['date_of_birth'] ?? '' }}">
                                <span class="text-danger error" id="date_of_birth_error"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <input type="text" class="form-control" name="gender" id="gender"
                                    placeholder="Your Gender" value="{{ $item['gender'] ?? '' }}">
                                <span class="text-danger error" id="gender_error"></span>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="referred_by">Referred By</label>
                                            <input type="text" class="form-control" name="referred_by" id="referred_by">
                                        </div>
                                    </div> --}}
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="profile_picture">Upload Profile Picture</label>
                                <input type="file" class="form-control" name="profile_picture" id="profile_picture">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="btn btn_theme btn_md"
                                    value="Update">
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

    

    <script>
        $(document).on('submit', '#updateprofile', function(ev) {
            $('.error').html('');

            ev.preventDefault(); // Prevent browers default submit.
            var formData = new FormData(this);
            var error = false;

            if (error == false) {
                $.ajax({
                    url: "{{ url('submitmyprofile') }} ",
                    type: 'post',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,

                    success: function(result) {
                        if (result.code == 200) {

                            $('#showsuccesmessage').html(result.message);
                            $('#showsuccesmessage').css('padding-bottom', '20px');
                            $('#showsuccesmessage').css('text-align', 'center');
                            $('#showsuccesmessage').css('font-size', '26px');
                            $('#submitform')[0].reset();
                            setTimeout(function() {
                                $('#showsuccesmessage').css('display', 'none');
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
