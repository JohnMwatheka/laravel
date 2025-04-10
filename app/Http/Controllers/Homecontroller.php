<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //
    public function Index()
    {
        return view('ticket.index');
    }

    public function Contact()
    {
        return view('contact');
    }
}
