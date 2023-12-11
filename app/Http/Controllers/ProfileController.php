<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    
    public function profile(): View
    {   
        $user = User::find(1);
        return view('profile', [
            'email' => $user->email,
            'phone' => '0' + $user->phone,
            'address' => $user->address,
        ]);
    }

    public function update(Request $request)
    {
        $request->all();
        $user = User::find(1); 
        $password = $request->input('cpassword');
        if($request->input('email') != ""){
        $user->email = $request->input('email');
        }
        if($request->input('phone') != ""){
        $user->phone = $request->input('phone');
        }
        if($request->input('address') != ""){
        $user->address = $request->input('address');
        }
        if (Hash::check($password, $user->password)) {
            dd($user->password);
            if($request->input("npassword") == $request->input("confirm_password")){
                $user->password = $request->input("npassword");
            }
        }
        $user->save();
        return redirect('/profile')->with('success',"Les informations ont bien été sauvegardées");
    }
    public function showHistory(): View {
        return view('history');
    }
}