<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(2);

        return view("blog.index")->with([
            "posts" => $posts
        ]);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("blog.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate Form Data:
        $this->validate($request, [
            "title" => ["required", "min:6"],
            "post-body" => "required",
            "image" => ["required", "mimes:jpg,png"]
        ]);

        // Check For File and Store / Upload:
        if($request->hasFile("image")){

            // Get The Complete File With the Extension:
           $completeFileName = $request->file("image")->getClientOriginalName();

           // Get the Complete File Name without extension:
           $filenameWithNoExt = pathinfo($completeFileName, PATHINFO_FILENAME);

           // Get The File Extension:
           $fileExtension = $request->file("image")->getClientOriginalExtension();

           // File Name To Store In Database:
           $fileNameToStoreInDatabase = $filenameWithNoExt . "_" . time() . '.'. $fileExtension;
           
           // Store File:
           $request->file("image")->storeAs("public/images", $fileNameToStoreInDatabase);

        }else{
            $fileNameToStoreInDatabase = "nofilePresent.png";
        }
        // End Of Check For File and Store / Upload.

       // $user = User::findOrFail(1);

        // Create Post:
        Post::create([
            "user_id" => auth()->user()->id,
            "title" => $request->input("title"),
            "slug" => Str::slug($request->input("title")),
            "body" => $request->input("post-body"),
            "image_path" => $fileNameToStoreInDatabase
        ]);

        return back()->with("success", "Post Created Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where("slug", $slug)->first();
        //
        return view("blog.show")->with([
            "post" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Get Post
        $post = Post::findOrFail($id);

        return view("blog.edit")->with([
            "post" => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            "image" => ["nullable", "mimes:jpg,png"]
        ]);

        // Get Current Image:
        $image = Post::where("id", $id)->value("image_path");


        // Check For File and Store / Upload:
        if($request->hasFile("image")){

            // Delete Current Image:
            Storage::delete(["public/images/" . $image]);

            // Get The Complete File With the Extension:
           $completeFileName = $request->file("image")->getClientOriginalName();

           // Get the Complete File Name without extension:
           $filenameWithNoExt = pathinfo($completeFileName, PATHINFO_FILENAME);

           // Get The File Extension:
           $fileExtension = $request->file("image")->getClientOriginalExtension();

           // File Name To Store In Database:
           $fileNameToStoreInDatabase = $filenameWithNoExt . "_" . time() . '.'. $fileExtension;
           
           // Store File:
           $request->file("image")->storeAs("public/images", $fileNameToStoreInDatabase);

        }else{
            $fileNameToStoreInDatabase = $image;
        }
        // End Of Check For File and Store / Upload.
        
        // Update Post:
        Post::where("id", $id)->update([
            "title" => $request->input("title"),
            "slug" => Str::slug($request->input("title")),
            "body" => $request->input("post-body"),
            "image_path" => $fileNameToStoreInDatabase
        ]);

        // Return to dashboard:
        return redirect()->route("app.dashboard")->with("success", "Post Updated Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $image = Post::where("id", $id)->value("image_path");

        Post::where("id", "=", $id)->delete();

        Storage::delete(["public/images/" . $image]);
        
        return back()->with([
            "success" => "Post Deleted Successfully" 
        ]);
    }
}
