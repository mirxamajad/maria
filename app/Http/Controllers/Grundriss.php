<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Grundriss extends Controller
{
    public function index()
    {
        return view('3dgrundriss');
    }
    public function create()
    {
        return view('booking');
    }
    public function ihre_daten()
    {
        return view('Ihre_Daten');
    }
    public function gewerbe_booking()
    {
        return  view('gebooking');
    }
    public function payment()
    {
        return  view('Auftragsdetails.payment');
    }
    public function auftragsdetails()
    {
        return  view('Auftragsdetails.Auftragsdetails3');
    }
    public function newthanks()
    {
        return  view('Auftragsdetails.newthnakspage');
    }
    public function thanks()
    {
        return  view('Auftragsdetails.thnakspage');
    }

}
