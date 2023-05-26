<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    public function index()
    {
        return view('contactus');
    }
    public function aboutus()
    {
        return view('aboutus');
    }
}
