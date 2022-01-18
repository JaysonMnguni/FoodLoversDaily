<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // Contact Us Method:
    public function contactUs(Request $request){
        // Validate Form Data:
        $this->validate($request, [
            "first_name" =>  ["required", "min:3"],
            "last_name" =>  ["required", "min:3"],
            "email" =>  ["required", "email"],
            "message_body" =>  ["required", "min:10"]
        ]);
        // End Of Validate Form Data.

        // Set Email Data:
        $first_name     = $request->first_name;
        $last_name      = $request->last_name;
        $email          = $request->email;
        $message_body   = $request->message_body;

        // Send Mail:
        Mail::to("info@foodloversdaily.com")->send(new ContactUs($first_name, $last_name, $email, $message_body));

        // Redirect to success Page:
        return redirect()->route("success")->with("success", "Message sent successfully!");
         
    }
}
