<?php

namespace App\Http\Controllers\Admin;
use App\Models\Country;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Http\Testing\File;

class CountryController extends Controller
{
    public function index (){
        $country = Country::all();
        return view('admin.country.index', compact('country'));
    }
    public function add (){
        return view('admin.country.add');
    }
  
    public function insert (Request $request ){
        $country = new Country();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $exten = $file->getClientOriginalExtension();
            $filename = time().'.'.$exten;
            $file->move('assets/uploads/country',$filename);
            $country->flag = $filename;
        }
        $country->name = $request->input('name');
        $country->save();
        return redirect('/dashboard')->with('status' , "Country Added Successfully!!!");
    }

    public function edit($id){
        $country = Country::find($id);
        return view('admin.country.edit', compact('country'));
    }

    public function update(Request $request ,$id){
        $country = Country::findOrFail($id);
        if($request->hasFile('image'))
        {
            $path = '/assets/uploads/country/'.$country->flag;
            if(file_exists($path))
            {
                Storage::disk('local')->delete($path);
            }
            $file = $request->file('image');
            $exten = $file->getClientOriginalExtension();
            $filename = time().'.'.$exten;
            $file->move('assets/uploads/country',$filename);
            $country->flag = $filename;
        }
        $country->name = $request->input('name');
        $country->update();
        return redirect('/countries')->with('success', 'Country Updated!');
    }

    public function destroy($id){
        $country = Country::find($id);
        if($country->flag)
        {
            $path = 'assets/uploads/country'.$country->flag;
            if(file_exists($path))
            {
                Storage::disk('local')->delete($path);
            }
        }
        $country->delete();
        return redirect('/counries')->with('success', 'Deleted Successfully!');
    }
}
