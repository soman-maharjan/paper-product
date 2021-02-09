<?php

namespace App\Http\Controllers;

use App\Mail\MessageMail;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request){
        Message::create(request()->validate([
            'name' => 'required',
            'email' => 'required',            
            'subject' => 'nullable',
            'number' => 'nullable',
            'message' => 'nullable',
        ]));

        $message = $request;

        Mail::to('maharjansoman@yahoo.com')->send(new MessageMail($message));

        return redirect('/contact')->with('alert','Message Sent!');
    }
}
