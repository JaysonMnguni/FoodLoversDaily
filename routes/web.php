<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get("/", [SiteController::class, "index"] )->name("site.home");
Route::post("/contact", [ContactController::class, "contactUs"])->name("contact");
Route::get("/success", [SiteController::class, "success"])->name("success");
//Route::get("/recipe", [SiteController::class, "recipes"])->name("site.recipe");

// App Resources:
Route::get("/dashboard", [AppController::class, "dashboard"])->name("app.dashboard")->middleware("auth");


// Sign In / Login:
Route::get("/sign-in", [LoginController::class, "signIn"])->name("sign-in");
Route::post("/sign-in", [LoginController::class, "login"])->name("login");
Route::post("/sign-out", [LoginController::class, "logout"])->name("logout");

// Sign Up / register:
Route::get("/sign-up", [RegisterController::class, "signUp"])->name("sign-up");
Route::post("/sign-up", [RegisterController::class, "register"])->name("register");


// Blog Post Resources:
Route::get("/blog", [PostController::class, "index"])->name("blog.index");
Route::get("/blog/create", [PostController::class, "create"])->name("blog.create")->middleware("auth");
Route::post("/blog/create", [PostController::class, "store"])->name("blog.store");
Route::get("/blog/{slug}", [PostController::class, "show"])->name("blog.post");
Route::get("/blog/{id}/edit", [PostController::class, "edit"])->name("blog.edit");
Route::put("/blog/{id}/edit", [PostController::class, "update"])->name("blog.update");
Route::delete("/blog/{id}/destroy", [PostController::class, "destroy"])->name("blog.destroy");

 