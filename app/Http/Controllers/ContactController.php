<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller

{
    public function contact()
    {
        return view ('contact');
    }

    public function sendEmail(Request $request)
    {
        $details = [
            'name' =>$request->name,
            'email' =>$request->email,
            'message' =>$request->message

        ];



        

        Mail::to('3cec1c44c03148@mailtrap.io') ->send(new ContactMail($details));
        return back()-> with('message_sent', 'Poruka je poslana');


            
    }
}   


