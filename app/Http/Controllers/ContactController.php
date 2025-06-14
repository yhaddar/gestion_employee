<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view("contact.index");
    }

    public function store(Request $request){
        Mail::to($request->email)
        ->send(new ContactMail($request->email, $request->subject, $request->message));

        return redirect()->route("contact.index")->with(["success" => "your message was send"]);
    }
}
