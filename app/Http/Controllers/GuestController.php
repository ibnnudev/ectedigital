<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('guest.about');
    }

    public function service()
    {
        return view('guest.service');
    }

    public function portfolio()
    {
        return view('guest.portfolio');
    }

    public function contact()
    {
        return view('guest.contact');
    }
}
