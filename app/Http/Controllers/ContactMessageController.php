<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactMessageController extends Controller
{
    public function get(){
        return view('contact');
    }

    public function post(Request $request){
       $this->validate($request, [
        "name" => 'required|min:3|max:255',
        "email" => 'required|email',
        "subject" => 'required',
        "message" => 'required'
       ]);

       Message::create([
        'name' => request('name'),
        'email' => request('email'),
        'subject' => request('subject'),
        'message' => request('message')
      ]);

       Mail::send('emails.contact-message', [
            'msg' => $request->message
       ], function ($message) use($request){
           $message->from($request->email, $request->name);
           $message->to('kishorgujar95@gmail.com', 'Kishor Gujar');
           $message->subject($request->subject);
       });

       return redirect()->back()->with('flash_message', 'Thank you for your message.');
    }
}
