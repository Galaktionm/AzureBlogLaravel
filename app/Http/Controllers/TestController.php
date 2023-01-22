<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class TestController extends Controller {

    public function showView(){
        $imagePath=Storage::url("dm.png");
        $content="This is a test post content";
        return view("postView", ["imagePath"=>$imagePath, "content"=>$content]);
    }

    public function saveFile(Request $request){
        $file=$request->file("image");
        $path=$file->storeAs("/blogTitle", "firstImage");
        echo("<img src=$path width=500 height=300></img>");
    }

}