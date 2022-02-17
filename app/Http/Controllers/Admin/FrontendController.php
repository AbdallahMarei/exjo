<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Trip;

class FrontendController extends Controller
{
    public function index (){
        $user = User::all();
        $trip = Trip::all();
        $category = Category::all();
        return view('admin.index',compact('user','trip','category'));
    }
}
