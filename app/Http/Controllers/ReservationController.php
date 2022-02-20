<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

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
        $oneTrip=Trip::find($id);
        $oneReser=Reservation::all();
        $reser = new Reservation();
        $reser->name = $request->input('name');
        $reser->user_id = Auth::user()->id;
        forEach($oneReser as $item)
        {
            if($item->name == $reser->name && $item->user_id == $reser->user_id && $item->trip_id == $id){
            return redirect('destinations/'.$id)->withErrors('You already have a reservation on this period');
            }
        }
       
        $price1 = $oneTrip->price;
        $totalPrice1 = (int)$request->input('quantity');
        $totalPrice2 = $totalPrice1 * $price1;

        $reser->phone = $request->input('phone');
        $reser->quantity = $request->input('quantity');
        $reser->totalPrice = $totalPrice2;
        $reser->trip_id = $id;
        $oneTrip->capacity = $oneTrip->capacity - $reser->quantity;
        $oneTrip->update();
        $reser->save();
        return redirect('/destinations')->withErrors('You have successfully booked the trip');
    }

    public function adminIndex (){
        $reservation = Reservation::where('status', '=' , 'pending')->get();

        return view('admin.reservation.index', compact('reservation'));

    }
    public function acceptedIndex (){
        $reservation = Reservation::where('status', '=' , 'accepted')->get();
        return view('admin.reservation.accepted', compact('reservation'));

    }
    public function acceptStatus ($id,$tid){
        $reservation = Reservation::find($id);
        $reservation->status = "accepted";
        $reservation->update();
        return redirect('/reservations')->with('success', 'Reservation Accepted !');
       

    }
    public function destroy ($id, $tid){
        $reservation = Reservation::find($id);
        $trip = Trip::find($tid);
        $quantity = $reservation->quantity;
        $trip->capacity = $trip->capacity + $quantity;
        $trip->update();
        $reservation->delete();
        return redirect('/reservations')->with('success', 'Reservation Deleted !');

    }
    public function destroyUser ($id, $tid){
        $trip = Trip::find($tid);
        $reservation = Reservation::find($id);
        $quantity = $reservation->quantity;
        $trip->capacity = $trip->capacity + $quantity;
        $trip->update();
        $reservation->delete();
        return redirect('/profile')->with('success', 'Reservation Deleted !');

    }
}
