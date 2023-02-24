<section id="dashboard_main_arae" class="section_padding setpaddsectop">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="dashboard_sidebar">
                    {{-- <div class="dashboard_sidebar_user">
                        <img src="assets/img/common/dashboard-user.png" alt="img">
                        <h3>Test</h3>
                        <p><a href="tel:+00-123-456-789">+00 123 456 789</a></p>
                        <p><a href="mailto:sherlyn@domain.com">test@gmail.com</a></p>
                    </div> --}}
                    <div class="dashboard_menu_area">
                        <ul>
                            <li><a href="{{url('/dashboard')}}" class="{{Request::segment(1) == 'dashboard' ? 'active' : '';}}"><i
                                        class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                            <li><a href="{{url('/purchase_package')}}" class="{{Request::segment(1) == 'purchase_package' ? 'active' : '';}}"><i class="fas fa-wallet"></i>Purchase Package</a></li>
                            <li><a href="{{url('/supreme_package')}}" class="{{Request::segment(1) == 'supreme_package' ? 'active' : '';}}"><i class="fas fa-wallet"></i>Supreme Package</a></li>
                            <li><a href="{{url('/gift_massages')}}" class="{{Request::segment(1) == 'gift_massages' ? 'active' : '';}}"><i class="fas fa-gift"></i>Gift Massages</a></li>
                            <li><a href="{{url('/appointment_history')}}" class="{{Request::segment(1) == 'appointment_history' ? 'active' : '';}}"><i class="fas fa-calendar"></i>Appointment History</a></li>
                            <li><a href="{{url('/supreme_history')}}" class="{{Request::segment(1) == 'supreme_history' ? 'active' : '';}}"><i class="fas fa-calendar"></i>Supreme History</a></li>
                            <li><a href="{{url('/favourite')}}" class="{{Request::segment(1) == 'favourite' ? 'active' : '';}}"><i class="fas fa-heart"></i>Favourite</a></li>
                            <li><p>Account</p></li>
                            {{-- <li class="dashboard_dropdown_button" id="dashboard_dropdowns"><i
                                    class="fas fa-address-card"></i>My bookings
                                <span> <i class="fas fa-angle-down"></i></span>
                                <div class="booing_sidebar_dashboard" id="show_dropdown_item"
                                    style="display: none;">
                                    <ul>
                                        <li><a href="hotel-booking.html"><i class="fas fa-hotel"></i>Hotel
                                                booking</a></li>
                                        <li><a href="flight-booking.html"><i class="fas fa-paper-plane"></i>Flight
                                                booking</a></li>
                                        <li>
                                            <a href="tour-booking.html">
                                                <i class="fas fa-map"></i>Tour booking
                                            </a>
                                        </li>
                                        <li><a href="booking-history.html">
                                                <i class="fas fa-history"></i>Booking history</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> --}}
                            <li><a href="{{url('/myprofile')}}" class="{{Request::segment(1) == 'myprofile' ? 'active' : '';}}"><i class="fas fa-user-circle"></i>My profile</a></li>
                            {{-- <li><a href="wallet.html"><i class="fas fa-wallet"></i>Wallet</a></li>
                            <li><a href="notification.html"><i class="fas fa-bell"></i>Notifications</a></li> --}}
                            <li>
                                <a href="{{url('/')}}">
                                    <i class="fas fa-sign-out-alt"></i>Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>