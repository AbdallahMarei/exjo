<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin.user.index', compact('user'));
    }

    public function add()
    {
        $user = User::all();
        return view('admin.user.add', compact('user'));
    }

    public function insert(Request $request)
    {

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role_as = $request->input('role_as') == True ? '1' : '0';
        $user->save();

        return redirect('/users')->with('success', 'User Added Successfully!');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role_as = $request->input('role_as') == True ? '1' : '0';
        $user->update();
        return redirect('/users')->with('success', 'User Updated!');
    }





    public function userProfile()
    {
        $userD =  Auth::user();
        return view('profile', compact('userD'));
    }



    public function updateProfileUser(Request $request, $id)
    {
        $userD = User::find($id);

        $userD->name = $request->input('name');
        $userD->email = $request->input('email');
        $userD->phone = $request->input('phone');
        $userD->location = $request->input('location');

        $userD->updateOrFail();
        return redirect('/profile')->with('success', 'Your Information has been Successfully Updated!');
    }
}
