<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class CustomController extends Controller
{
    public function MailSend(Request $request){

        
        $details = [
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ];
        
        Mail::to('noman.bhuyan@gmail.com')->send(new \App\Mail\SendMyMail($details));

        return response()->json(['message' => 'Thanks for sending your Opinion']);
    }
}
