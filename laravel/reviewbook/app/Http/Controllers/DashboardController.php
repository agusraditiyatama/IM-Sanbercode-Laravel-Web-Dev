<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('home');
    }
    
    public function register()
    {
        return view('register');
    }

    public function contact()
    {
        return view('contact');
    }

    public function course()
    {
        return view('course');
    }

    public function news()
    {
        return view('news');
    }

}
