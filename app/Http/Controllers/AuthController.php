<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route("home");
        }

        return view('auth.login');
    }

    public function attempt(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email' => 'Email field is required',
            'password' => "Password field is required"
        ]);

        $credentials = $request->only(["email", "password"]);

        if (!Auth::attempt($credentials, $request->boolean('remember'))) {
            return redirect()->back()->withErrors([
                'email' => "Invalid credentials"
            ]);
        }


        return redirect()->route('home');
    }

    public function logout()
    {
        if (Auth::check()) {
            Auth::logout();
        }

        session()->flash('error', 'You are not logged in');
        return redirect()->route('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:15|confirmed',
            "password_confirmation" => "required|min:6|max:15"
        ], [
            'name' => "Name is requred",
            'email' => [
                "required"=>'Email is required',
                "email"=> "Invalid Email",
                "unique"=> "Email already exists"
            ],
            'password' => [
                "required" => "Password is required",
                "confirmed" => "Password doesn't match",
                "min" => "Min 6 dig required",
                "max" => "max 15 dig required"
            ],
            "password_confirmation" => [
                "required" => "Confirm Password is required",
                "min" => "Min 6 dig required",
                "max" => "max 15 dig required"
            ]
        ]);


        $user = new User();
        $user->name = $request->string('name');
        $user->email = $request->string("email");
        $user->password = Hash::make($request->string("password"));
        $user->save();

        Auth::login($user);

        return redirect()->route('home');
    }

}
