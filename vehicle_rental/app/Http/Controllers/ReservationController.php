<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info_reservation;
use Auth;
use Illuminate\Support\Facades\Session;



class ReservationController extends Controller
{
    function reservation()
    {
        return redirect(route('reservation'));
    }
    
    function reservation_info()
    {
        $info_reservations = Info_reservation::all();
        
    return view('reservation_info', ['info_reservations' => $info_reservations]);

    }
    function lhome()
    {
        $info_reservations = Info_reservation::all();
        
    return view('lhome', ['info_reservations' => $info_reservations]);

    }
    

    public function reservation_post(Request $request)
    {
        $request->validate([
            'Address_from' => 'required',
            'Address_to' => 'required',
            'PUD' => 'required',
            'RD' => 'required',
            'PUT' => 'required',
            'RT' => 'required',
            'Contact_Number' => 'required|numeric|min:10',
        ]);

        $new_Info_reservation = Info_reservation::create([
            'Username' => 'Elin_powS',
            'from_place' => $request->Address_from,
            'to_place' => $request->Address_to,
            'pick_up_date' => $request->PUD,
            'return_date' => $request->RD,
            'pick_up_time' => $request->PUT,
            'return_time' => $request->RT,
            'contact_number' => $request->Contact_Number,
        ]);

        if (!$new_Info_reservation) {
            return redirect(route('reservation'))->with("error", "Reservation Failed, try again!!");
        } else {
            return redirect(route('reservation_info'))->with("success", "Reservation successfully done.");
        }
    }
}
