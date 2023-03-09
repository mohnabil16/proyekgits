<?php

namespace App\Http\Controllers;

use App\Models\cstudent;
use Illuminate\Http\Request;

class cstudentcontroller extends Controller
{
    //
    function index()
    {
        $data = cstudent::all();
        return view('student/index')->with('data', $data);
    }
}
