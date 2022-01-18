<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Home Page:
    public function index(){
        
        $posts = Post::latest()->limit(3)->get();

        return view("home")->with([
            "posts" => $posts
        ]);
    }


    // Success Page:
    public function success(){
        return view("success");
    }    
    
}
