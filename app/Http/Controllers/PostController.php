<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function HomePage(){

        $posts= Post::all();
        
        $data=compact('posts');
       return view('/home')->with($data);
    }
}
