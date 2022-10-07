<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postcontroller extends Controller
{
    //
    public function index()
    {

        return view('index');
    }

    public function typography()
    {
        return view('typography');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function about_us()
    {
        return view('about-us');
    }
}
