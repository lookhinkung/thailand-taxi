@extends('frontend.main_master')
@section('main')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg10">
        <div class="container">
            <div class="inner-title">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>car Details </li>
                </ul>
                <h3>{{ $cardetails->type->name }}</h3>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- car Details Area End -->
    <div class="car-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="car-details-side">
                        <div class="side-bar-form">
                            <h3>Booking Sheet </h3>
                            <form>
                                <div class="row align-items-center">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Check in</label>
                                            <div class="input-group">
                                                <input id="datetimepicker" type="text" class="form-control"
                                                    placeholder="09/29/2020">
                                                <span class="input-group-addon"></span>
                                            </div>
                                            <i class='bx bxs-calendar'></i>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Check Out</label>
                                            <div class="input-group">
                                                <input id="datetimepicker-check" type="text" class="form-control"
                                                    placeholder="09/29/2020">
                                                <span class="input-group-addon"></span>
                                            </div>
                                            <i class='bx bxs-calendar'></i>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Numbers of Persons</label>
                                            <select class="form-control">
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                                <option>05</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Numbers of cars</label>
                                            <select class="form-control">
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                                <option>05</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-bg-three border-radius-5">
                                            Book Now
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="room-details-article">
                        <div class="room-details-slider owl-carousel owl-theme">
                            @foreach ($multiImage as $image)
                                <div class="car-details-item">
                                    <img src="{{ asset('upload/carimg/multi_img/' . $image->multi_img) }}" alt="Images">
                                    
                                </div>
                            @endforeach
                        </div>

                        <div class="car-details-title">
                            <h2>{{ $cardetails->type->name }}</h2>
                            <ul>

                                <li>
                                    <b> {{ $cardetails->short_desc }} Passengers</b>
                                </li>

                            </ul>
                        </div>

                        <div class="car-details-content">
                            <p>
                                {!! $cardetails->description !!}
                            </p>


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="services-bar-widget">
                                        <h3 class="title">Car Details</h3>
                                        <div class="side-bar-list">
                                            <ul>
                                                <li>
                                                    <a href="#"> <b>Seats : </b> {{ $cardetails->total_passenger }}
                                                        Seats <i class='bx bxs-cloud-download'></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"> <b>Capacity : </b> {{ $cardetails->car_capacity }} <i
                                                            class='bx bxs-cloud-download'></i></a>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>



                    </div>

                    <div class="car-details-review">
                        <h2>Clients Review and Retting's</h2>
                        <div class="review-ratting">
                            <h3>Your retting: </h3>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" cols="30" rows="8" required data-error="Write your message"
                                            placeholder="Write your review here.... "></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn btn-bg-three">
                                        Submit Review
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- car Details Area End -->

    <!-- car Details Other -->
    <div class="car-details-other pb-70">
        <div class="container">
            <div class="car-details-text">
                <h2>Our Related Offer</h2>
            </div>

            <div class="row ">
                <div class="col-lg-6">
                    <div class="car-card-two">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-4 p-0">
                                <div class="car-card-img">
                                    <a href="car-details.html">
                                        <img src="assets/img/car/car-style-img1.jpg" alt="Images">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-8 p-0">
                                <div class="car-card-content">
                                    <h3>
                                        <a href="car-details.html">Luxury car</a>
                                    </h3>
                                    <span>320 / Per Night </span>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed
                                        pulvinar purus.</p>
                                    <ul>
                                        <li><i class='bx bx-user'></i> 4 Person</li>
                                        <li><i class='bx bx-expand'></i> 35m2 / 376ft2</li>
                                    </ul>

                                    <ul>
                                        <li><i class='bx bx-show-alt'></i> Sea Balcony</li>
                                        <li><i class='bx bxs-hotel'></i> Kingsize / Twin</li>
                                    </ul>

                                    <a href="car-details.html" class="book-more-btn">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="car-card-two">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-4 p-0">
                                <div class="car-card-img">
                                    <a href="car-details.html">
                                        <img src="assets/img/car/car-style-img2.jpg" alt="Images">
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-8 p-0">
                                <div class="car-card-content">
                                    <h3>
                                        <a href="car-details.html">Single car</a>
                                    </h3>
                                    <span>300 / Per Night </span>
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed
                                        pulvinar purus.</p>
                                    <ul>
                                        <li><i class='bx bx-user'></i> 1 Person</li>
                                        <li><i class='bx bx-expand'></i> 25m2 / 276ft2</li>
                                    </ul>

                                    <ul>
                                        <li><i class='bx bx-show-alt'></i> Sea Balcony</li>
                                        <li><i class='bx bxs-hotel'></i> Smallsize / Twin</li>
                                    </ul>

                                    <a href="car-details.html" class="book-more-btn">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- car Details Other End -->
@endsection