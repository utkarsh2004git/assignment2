<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Post;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function showRegister(){
         $posts=Post::paginate(9);
         if(session()->has("loginId")){

            return redirect('/')->with(compact('posts'));
         }
        return view('admin/register');
     }
     public function showLogin(){
        return view('admin/login');
     }


}
