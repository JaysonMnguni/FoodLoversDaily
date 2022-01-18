<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // Register Sign Up Page:
    public function signUp(){
        return view("sign-up");
    }


    // Register User:
    public function register(Request $request){
        // Validate Form Data:
        $this->validate($request, [
            "first_name" => ["required", "min:3"],
            "last_name" => ["required", "min:3"],
            "email" => ["required", "email","unique:users"],
            "password" => ["required", "min:8", "alpha_num"],
            "confirm_password" => ["required", "min:8", "same:password"]
        ]);


        // Register New User:
      $user =  User::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);

        // Log User In If Successful:
        Auth::login($user);

        // Redirect To Dashboard after login:
        return redirect()->route("app.dashboard");

    }
    // End Of Register User.
} 
