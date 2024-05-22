<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\BookArea;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use App\Models\Car;
use App\Models\MultiImage;
use App\Models\Facility;
use App\Models\CarBookedDate;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Log;
class BookingController extends Controller
{
    
    public function Checkout(){
        if (Session::has('book_date')) {
            $book_data = Session::get('book_date');
            $car = Car::find($book_data['car_id']);

            $toDate = Carbon::parse($book_data['check_in']);
            $fromDate = Carbon::parse($book_data['check_out']);
            $nights = $toDate->diffInDays($fromDate);
            $persion = $book_data['persion'];
            return view('frontend.checkout.checkout',compact('book_data','car','nights','persion'));
        }else{
            $notification = array(
                'message' => 'Something went wrong',
                'alert-type' => 'error'
            );
            return redirect('/')->with($notification);
        }//end else

        
    }//End Method

    public function BookingStore(Request $request){

        $validateData = $request->validate([
            'check_in' => 'required',
            'check_out' => 'required',
            'persion' => 'required',
    

        ]);

        if ($request->available_car < $request->number_of_cars) {

            $notification = array(
                'message' => 'Something went wrong',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        Session::forget('book_date');

        $data = array();
        $data['number_of_cars'] = $request->number_of_cars;
        $data['available_car'] = $request->available_car;
        $data['persion'] = $request->persion;
        $data['check_in'] = date('Y-m-d', strtotime($request->check_in));
        $data['check_out'] = date('Y-m-d', strtotime($request->check_out));
        $data['car_id'] = $request->car_id;

        Session::put('book_date',$data);

        return redirect()->route('checkout');

    }//End Method


    public function CheckoutStore(Request $request)
    {
        
        $this->validate($request, [     
            
            'name' => 'required',
            'email' => 'required',
            'title' => 'required',
            'nationality' => 'required',
            'check_in' => 'required',
            'pick_from' => 'required',
            'phone' => 'required',
            'drop_to' => 'required',
        ]);

        

        $book_data = Session::get('book_date');
        
        $toDate = Carbon::parse($book_data['check_in']);
        $fromDate = Carbon::parse($book_data['check_out']);
        $nights = $toDate->diffInDays($fromDate);

        $car = Car::find($book_data['car_id']);
        $code = rand(000000000, 999999999);
        
        $data = new Booking();
        $data->car_id = $car->id;
        $data->user_id = Auth::user()->id;
        $data->check_in = date('Y-m-d', strtotime($book_data['check_in']));
        $data->check_out = date('Y-m-d', strtotime($book_data['check_out']));
        $data->persion = $book_data['persion'];
        $data->number_of_cars = $book_data['number_of_cars'];
        $data->total_night = $nights;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->nationality = $request->nationality;
        $data->pick_from = $request->pick_from;
        $data->drop_to = $request->drop_to;
        $data->msg = $request->msg;
        $data->code = $code;
        $data->status = 0;
        $data->created_at = Carbon::now();
        $data->save();


        $sdate = date('Y-m-d', strtotime($book_data['check_in']));
        $edate = date('Y-m-d', strtotime($book_data['check_out']));
        $eldate = Carbon::create($edate)->subDay();
        $d_period = CarbonPeriod::create($sdate, $eldate);
        foreach ($d_period as $period) {
            $booked_dates = new CarBookedDate();
            $booked_dates->booking_id = $data->id;
            $booked_dates->car_id = $car->id;
            $booked_dates->book_date = date('Y-m-d', strtotime($period));
            $booked_dates->save();
        }

        Session::forget('book_date');

        $notification = array(
            'message' => 'Booking Added Successfully',
            'alert-type' => 'success'
        );
        return redirect('/')->with($notification);
    } // End Method



}

