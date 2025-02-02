<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $user = Auth::user();

        return view("chatapp.home", [
            'user' => $user
        ]);
    }
}
