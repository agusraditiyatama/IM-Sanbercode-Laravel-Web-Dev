<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function showregister()
    {
        return view ('auth.register');
    }

    public function registeruser(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8'
        ]);

        $userCount = User::count();

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->role = $userCount === 0 ? "admin" : "user";

        $user->save();

        return redirect ('/')->with('success', 'Selamat anda sudah mendaftar');

    }

    public function showlogin()
    {
        return view ('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/')->with('success', 'Selamat anda sudah login');

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
 

    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return redirect('/');
    }

    public function getprofile()
    {
        $userAuth = Auth::user()->profile;

        $userId = Auth::id();

        $profileData = Profile::where('user_id', $userId)->first();

        if($userAuth){
            return view("profile.edit", ["profile"=>$profileData]);
        }else{
            return view("profile.create");
        }
    }

    public function createprofile(Request $request)
    {
        $request->validate([
            'age' => 'required|numeric',
            'address' => 'required|min:5',
            
        ]);

        $userId = Auth::id();

        $profile = new Profile;
        $profile->age = $request->input('age');
        $profile->address = $request->input('address');
        $profile->user_id = $userId;

        $profile->save();

        return redirect ('/profile');
    }

    public function updateprofile(Request $request, $id)
    {
        $request->validate([
            'age' => 'required|numeric',
            'address' => 'required|min:5',
            
        ]);

        $profile = Profile::find($id);
        $profile->age = $request->input('age');
        $profile->address = $request->input('address');

        $profile->save();

        return redirect ('/profile')->with('success', 'Selamat anda sudah update profile');;
    }
}
