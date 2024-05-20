<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BookArea;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Models\Car;
use App\Models\MultiImage;


class FrontendCarController extends Controller
{
    public function AllFrontendCarList(){
        $cars = Car::latest()->get();
        return view("frontend.cars.all_cars", compact("cars"));
    }//End Method

    public function AboutUs(){
        return view("frontend.cars.about_us");
    }//End Method

    public function CarDetailsPage($id){
        
        $cardetails = Car::find($id);
        $multiImage = MultiImage::where('car_id',$id)->get();
        return view("frontend.cars.car_details", compact("cardetails","multiImage"));

    }//End Method





}
