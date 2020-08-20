<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showHome()
    {
        return view('frontend.home');
    }

    public function showRegistration()
    {
        return view('frontend.home');
    }

    public function processRegistration(Request $request)
    {
        # code...
    }

    public function showLogin()
    {
        return view('frontend.home');
    }
    public function processLogin(Request $request)
    {
        # code...
    }

    public function logout()
    {
        # code...
    }
}
