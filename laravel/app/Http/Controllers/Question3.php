<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Question3 extends Controller
{
    public function emailForm()
    {
        return view('question3');
    }
    public function sendEmail(Request $request)
    {

        $to = $request['to'];
        // $title = $request['title'];
        // $body = $request['body'];
        $details = [
            'title' =>  $request['title'],
            'body' =>  $request['body']
        ];

        Mail::to($to)->send(new TestMail($details));
        
        return"Email Sent";

    }
}
