@extends('includes.main')
@section('main-container')
    
    <!-- Dashboard Area -->
    @include('includes.sidebar')
                <div class="col-lg-9">
                    <div class="dashboard_main_top">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dashboard_top_boxed">
                                    <div class="dashboard_top_icon">
                                        <i class="fas fa-hot-tub"></i>
                                    </div>
                                    <div class="dashboard_top_text">
                                        <h3>Loyality Points</h3>
                                        @if(!empty($loyality['loyalty_points_history_objects'])) 
                                            <h1>{!! $loyality['loyalty_points_history_objects'] ?? '' !!}</h1>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="dashboard_top_boxed">
                                    <div class="dashboard_top_icon">
                                        <i class="fas fa-sync"></i>
                                    </div>
                                    <div class="dashboard_top_text">
                                        <h3>Wallet Balance</h3>
                                        @if(!empty($wallet['wallet_history_objects'])) 
                                            <h1>{!! $wallet['wallet_history_objects'] ?? '' !!}</h1>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dashboard_common_table">
                        <h3>My bookings</h3>
                        <div class="table-responsive-lg table_common_area">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sl no.</th>
                                        <th>Booking ID</th>
                                        <th>Booking type</th>
                                        <th>Booking amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01.</td>
                                        <td>#JK589V80</td>
                                        <td>Hotel</td>
                                        <td>$754.00</td>
                                        <td class="complete">Completed</td>
                                        <td><i class="fas fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>02.</td>
                                        <td>#JK589V80</td>
                                        <td>Hotel</td>
                                        <td>$754.00</td>
                                        <td class="complete">Completed</td>
                                        <td><i class="fas fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>03.</td>
                                        <td>#JK589V80</td>
                                        <td>Hotel</td>
                                        <td>$754.00</td>
                                        <td class="complete">Completed</td>
                                        <td><i class="fas fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>04.</td>
                                        <td>#JK589V80</td>
                                        <td>Hotel</td>
                                        <td>$754.00</td>
                                        <td class="complete">Completed</td>
                                        <td><i class="fas fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>05.</td>
                                        <td>#JK589V80</td>
                                        <td>Hotel</td>
                                        <td>$754.00</td>
                                        <td class="cancele">Canceled</td>
                                        <td><i class="fas fa-eye"></i></td>
                                    </tr>
                                    <tr>
                                        <td>06.</td>
                                        <td>#JK589V80</td>
                                        <td>Hotel</td>
                                        <td>$754.00</td>
                                        <td class="complete">Completed</td>
                                        <td><i class="fas fa-eye"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
                </div>
            </div>
        </div>
    </section>

@endsection