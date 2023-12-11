<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormulaireController extends Controller
{
    public function index()
    {
        return view('register');
    }
    public function store(Request $request)
{
    try {
        // Validate the form data
        $validator = $request->validate([
            'inputEmail' => 'required|email|unique:users,email',
            'inputTelephone' => 'required|string',
            'inputAdresse' => 'required|string',
            'inputPassword' => 'required|string|min:8',
        ]);

        // Create a new user in the database
        $user = new User;
        $user->email = $validator['inputEmail'];
        $user->phone = $validator['inputTelephone'];
        $user->address = $validator['inputAdresse'];
        $user->password = bcrypt($validator['inputPassword']);
        $user->status = 1; // Set the default status
        $user->save();

        // Redirect to the home page or any other confirmation page
        return redirect('/')->with('success', 'User registered successfully!');
    } catch (\Exception $e) {
        // Log the exception with more details
        \Log::error('User registration failed. Exception: ' . $e->getMessage() . ' Stack Trace: ' . $e->getTraceAsString());
        \Log::info('Request Data: ' . json_encode($request->all()));


        // Debugging
        dd($e->getMessage());

        // Handle the exception as needed
        return redirect()->back()->withInput()->withErrors(['error' => 'User registration failed. Please try again later.']);
    }
}

}
