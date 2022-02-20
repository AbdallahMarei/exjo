<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    public function store(Request $req){
        $inquiry = new Inquiry();
        $inquiry->name = $req->input('name');
        $inquiry->email = $req->input('email');
        $inquiry->message = $req->input('message');
        $inquiry->subject = $req->input('subject');
        $inquiry->save();
        return redirect('/contact')->withErrors('We will get back to you as soon as possible!');
    }

    public function adminIndex(){
        $inquiry = Inquiry::all();
        return view('admin.inquiry.index', compact('inquiry'));
    }
}
