@extends('frontend.main_master')
@section('style')
    <style>
        .eq_card{
            display: flex;
            flex-direction: column;
        }
        .eq_card .card_{
            flex: 1;
        }
        .form-control {
            max-height: none;
            position: relative; /* Ensure the container can use z-index */
            z-index: 9999;
        }
        .col-lg-2, .col-md-2 {
            position: relative; /* Ensure the container can use z-index */
            z-index: 9999; /* A very high value to ensure it is on top */
            height: auto;
        }
    </style>
    </style>
@endsection
@section('main')
<!-- Banner Area -->
<div class="banner-area" style="height: 480px;">
    <div class="container">
        <div class="banner-content">
            <h1>Premium Taxi Cab Transger Services in Thailand</h1>
       
        </div>
    </div>
</div>
<!-- Banner Area End -->

<!-- Banner Form Area -->
<div class="banner-form-area">
    <div class="container">
        <div class="banner-form">
            <form method="GET" action="{{route('booking.search')}}">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label>CHECK IN TIME</label>
                            <div class="input-group">
    <input autocomplete="off" type="text" required name="check_in" class="form-control dt_picker" 
    placeholder="yyy-mm-dd">
                                <span class="input-group-addon"></span>
                            </div>
                            <i class='bx bxs-chevron-down'></i>	
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label>CHECK OUT TIME</label>
                            <div class="input-group">
    <input autocomplete="off" type="text" required name="check_out" class="form-control dt_picker" 
    placeholder="yyy-mm-dd">
                                <span class="input-group-addon"></span>
                            </div>
                            <i class='bx bxs-chevron-down'></i>	
                        </div>
                    </div>
                    
                    <div class="col-lg-2 col-md-2">
                        <div class="form-group">
                            <label>GUESTS</label>
                            <select name="persion" class="form-control">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                            </select>	
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <button type="submit" class="default-btn btn-bg-one border-radius-5">
                            Check Availability
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Banner Form Area End -->

<!-- Room Area -->
@include('frontend.home.Fleet')
<!-- Room Area End -->

<!-- Book Area Two-->
@include('frontend.home.Fleet_two')
<!-- Book Area Two End -->

<!-- Services Area Three -->
@include('frontend.home.services')
<!-- Services Area Three End -->

<!-- Team Area Three -->
@include('frontend.home.team')
<!-- Team Area Three End -->

<!-- Testimonials Area Three -->
@include('frontend.home.testimonials')
<!-- Testimonials Area Three End -->

<!-- FAQ Area -->
{{-- @include('frontend.home.faq') --}}
<!-- FAQ Area End -->

<!-- Blog Area -->
@include('frontend.home.blog')
<!-- Blog Area End -->

@endsection