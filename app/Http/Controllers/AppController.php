<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
    // Get Dasboard Page:
    public function dashboard(){
        $user_id = auth()->user()->id;
        $posts = Post::where("user_id", $user_id)->latest()->get();

        return view("app.dashboard")->with([
            "posts" => $posts
        ]);
    }
}
