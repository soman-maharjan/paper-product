<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function store(Request $request){
        Message::create(request()->validate([
            'name' => 'required',
            'email' => 'required',            
            'subject' => 'nullable',
            'message' => 'nullable',
        ]));
        return redirect('/contact')->with('alert','Message Sent!');
    }
}
