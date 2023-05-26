<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dhs extends Controller
{
    public function index()
    {
         return view('dhs');
    }
    public function create()
    {
        return view('digitalhomestaging.home_staging');
    }
    public function booking()
    {
        return view('digitalhomestaging.Renovierung');
    }
    public function formdata()
    {
        return view('Ihre_Daten');
    }
}
