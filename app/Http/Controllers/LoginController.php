<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/carte'); // Redirect to the intended page or a default page
        }

        // Authentication failed
        return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.');
    }

}
