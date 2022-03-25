<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class Question2 extends Controller
{
    public function uploadForm()
    {
        return view('question2');
    }
    public function uploadFile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'registrationnumber' => 'required',
            'cgpa' => 'required',
            'specialization' => 'required',
            'file' => 'required'
            ]);

        $student = new Student;
        $student->name = $request['name'];
        $student->registrationnumber = $request['registrationnumber'];
        $student->cgpa = $request['cgpa'];
        $student->specialization = $request['specialization'];
        $student->file = $request['file'];
        $student->save();



        //$request->file->store('public/uploads');

        // echo "<pre>";
        // print_r($request->all());

        return "Sucessfully Submitted";
    }



}
