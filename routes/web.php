<?php

use App\Http\Controllers\CreatePostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;
use App\Models\Post;
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

Route::get('/', function () {
    return view('welcome', ["latestPosts"=>Post::orderBy('updated_at', 'desc')->take(8)->get()->all()]);
});

Route::controller(CreatePostController::class)->group(function(){
    Route::get("/create", "showView");
    Route::post("/create", "createPost");
});

Route::controller(LoginController::class)->group(function(){
    Route::get("/login", "showView");
    Route::post("/login", "login");
});

Route::get("posts/{post}", function(Post $post){
    return view('post')->with('post', $post);
});
