<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Post;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function showRegister(){
        return view('admin/register');
     }
     public function showLogin(){
        return view('admin/login');
     }


}
