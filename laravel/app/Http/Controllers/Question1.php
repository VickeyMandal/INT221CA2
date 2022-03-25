<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Question1 extends Controller
{
    public function loadForm()
    {
        return view('question1');
    }
    public function add(Request $request)
    {
        $request->validate([
            'number1' => 'required',
            'number2' => 'required'
        ]);

        $number1 = $request['number1'];
        $number2 = $request['number2'];
        $sum = $number1 + $number2;
        return "Sum is : " . $sum;
    }
}
