<?php

namespace App\Http\Controllers;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Mail;
Use Alert;
// use Illuminate\support\facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::send( new ContactMessage($request));
        toastr()->success('Message sent successfully!');
        return redirect()->back();
        // dd($request->all());
    }
}
