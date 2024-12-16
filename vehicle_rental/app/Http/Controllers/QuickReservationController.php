<?php

namespace App\Http\Controllers;
use App\Models\Quick_reservation;
use Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class QuickReservationController extends Controller
{
    function home()
    {
        return redirect(route('home'));
    }

    public function home_post(Request $request)
    {
        $request->validate([
            'Address_from' => 'required',
            'Address_to' => 'required',
            'PUD' => 'required',
            'PUT' => 'required',
        ]);

        $new_Quick_reservation = Quick_reservation::create([
            'Username' => $request->Address_from,
            'place_from' => $request->Address_from,
            'place_to' => $request->Address_to,
            'pick_up_date' => $request->PUD,
            'pick_up_time' => $request->PUT,
            'contact_number' => $request->Address_to,
        ]);

        if (!$new_Quick_reservation) {
            return redirect(route('home'))->with("error", "Reservation Failed, try again!!");
        } else {
            return redirect(route('home'))->with("success", "Reservation successfully done.");
        }
    }
}
