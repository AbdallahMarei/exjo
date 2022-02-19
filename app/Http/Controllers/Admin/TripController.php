<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class TripController extends Controller
{
    public function index (){
        $trip = Trip::all();
        $category = Category::all();
        return view('admin.trip.index', compact('trip','category'));
    }
    public function showAllProducts (){
        $trip = Trip::all();
        $category = Category::all();
        return view('destinations', compact('trip','category'));
    }
    public function showAllProductsWelcome (){
        $trip = Trip::orderBy('id', 'desc')->take(3)->get();
        $category = Category::all();
        return view('welcome', compact('trip','category'));
    }

    public function show($id)
    {
        //
        $oneTrip = Trip::find($id);
        // dd($oneTrip);
        return view('detailed', compact('oneTrip'));
    }


    public function add (){
        $category = Category::all();
        return view('admin.trip.add' ,compact('category'));
    }

    public function insert (Request $request ){
        $trip = new Trip();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $exten = $file->getClientOriginalExtension();
            $filename = time().'.'.$exten;
            $file->move('assets/uploads/trip',$filename);
            $trip->image = $filename;
        }

        $trip->cat_id = $request->input('cat_id');
        $trip->name = $request->input('name');
        $trip->brief = $request->input('brief');
        $trip->price = $request->input('price');
        $trip->description = $request->input('description');
        $trip->date = $request->input('date');
        $trip->days = $request->input('days');
        $trip->capacity = $request->input('capacity');
        $trip->trending = $request->input('trending') == True?'1':'0';
        $trip->meta_title = $request->input('meta_title');
        $trip->meta_keywords = $request->input('meta_keywords');
        $trip->meta_description = $request->input('meta_description');
        $trip->save();
        return redirect('/trips')->with('status' , "Trip Added Successfully!!!");
    }

    public function edit($id){
        $trip = Trip::find($id);
        $category = Category::all();
        return view('admin.trip.edit', compact('trip','category'));
    }

    public function update(Request $request ,$id){
        $trip = Trip::findOrFail($id);
        if($request->hasFile('image'))
        {
            $path = '/assets/uploads/trip/'.$trip->image;
            if(file_exists($path))
            {
                Storage::disk('local')->delete($path);
            }
            $file = $request->file('image');
            $exten = $file->getClientOriginalExtension();
            $filename = time().'.'.$exten;
            $file->move('assets/uploads/trip',$filename);
            $trip->image = $filename;
        }
        $trip->cat_id = $request->input('cat_id');
        $trip->name = $request->input('name');
        $trip->brief = $request->input('brief');
        $trip->price = $request->input('price');
        $trip->description = $request->input('description');
        $trip->date = $request->input('date');
        $trip->days = $request->input('days');
        $trip->capacity = $request->input('capacity');
        $trip->trending = $request->input('trending') == True?'1':'0';
        $trip->meta_title = $request->input('meta_title');
        $trip->meta_keywords = $request->input('meta_keywords');
        $trip->meta_description = $request->input('meta_description');
        $trip->update();
        return redirect('/trips')->with('success', 'Trip Updated!');
    }

    public function destroy($id){
        $trip = Trip::find($id);
        if($trip->image)
        {
            $path = 'assets/uploads/trip'.$trip->image;
            if(file_exists($path))
            {
                Storage::disk('local')->delete($path);
            }
        }
        $trip->delete();
        return redirect('/trips')->with('success', 'Deleted Successfully!');
    }
}
