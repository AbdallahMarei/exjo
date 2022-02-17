<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index (){
        $user = User::all();
        return view('admin.user.index', compact('user'));
    }

    public function add (){
        $user = User::all();
        return view('admin.user.add' ,compact('user'));
    }

    public function insert (Request $request){

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role_as = $request->input('role_as') == True?'1':'0';
        $user->save();

        return redirect('/users')->with('success', 'User Added Successfully!');
    }

    public function edit ($id){
        $user = User::find($id);
        return view('admin.user.edit' ,compact('user'));
    }

    public function update(Request $request ,$id){
        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role_as = $request->input('role_as') == True?'1':'0';
        $user->update();
        return redirect('/users')->with('success', 'User Updated!');
    }


}
