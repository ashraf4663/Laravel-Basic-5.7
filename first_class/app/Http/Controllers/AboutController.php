<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function Contact()
    {
        return view('pages.contact');
    }

    public function Contactt()
    {
        return view('pages.laracast');
    }
}
