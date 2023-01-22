<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class CreatePostController extends Controller {

    function showView(){
        return view("create");
    }

    function createPost(Request $request) {
        $post=Post::create(['title'=>$request->title, 'content'=>$request->content]);
        return view("post", ["post"=>$post]);
    }

}