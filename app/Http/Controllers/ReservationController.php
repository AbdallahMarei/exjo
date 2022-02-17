<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index($id)
    {
        if(Auth::user())
        {
            $oneTrip=Trip::find($id);
            return view('book', compact('oneTrip'));
        }
        else {
            return redirect('/login')->withErrors(['msg' => 'You Must Login To Book This Trip']);
        }

    }

    public function insert (Request $request, $id ){
        $reser = new Reservation();
        $reser->name = $request->input('name');
        $reser->phone = $request->input('phone');
        $reser->quantity = $request->input('quantity');
        $reser->totalPrice = $request->input('totalPrice');
        $reser->user_id = Auth::user()->id;
        $reser->trip_id = $id;
        $reser->save();
    }
}
