<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }
    
    public function register()
    {
        return view('register');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function kirim(Request $request)
    {
        $first_name = $request->input("first_name");
        $last_name = $request->input("last_name");

        return view('page.welcome', ['first_name' => $first_name, 'last_name' => $last_name]);
    }
}
