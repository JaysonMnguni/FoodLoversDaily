<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Login / Sign In Page:
    public function signIn(){
        return view("sign-in");
    }

    // Authenticte and Log Users In:
    public function login(Request $request){
        // Validate Form Data:
        $this->validate($request, [
            "email" => "required|email",
            "password" => "required"
        ]);

        // Authenticate User:
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect()->intended("dashboard");
        }
        // End Of Authenticate User.

        return back()->with("error", "Incorect Username / Email or Password");

    }
    // End Of Authenticte and Log Users In.

    public function logout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

} 
