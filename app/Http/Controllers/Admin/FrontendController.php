<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\Trip;
use App\Models\Reservation;

class FrontendController extends Controller
{
    public function index (){
        $user = User::all();
        $trip = Trip::all();
        $country = Country::all();
        $reservation = Reservation::all();
        return view('admin.index',compact('user','trip','country','reservation'));
    }
}
