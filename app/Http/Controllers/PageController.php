<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }
    public function contact()
    {
        return view('frontend.contact');

    }
    public function bakery()
    {
        return view('frontend.bakery');
    }
    public function restaurants()
    {
        return view('frontend.restaurant');
    }
}
