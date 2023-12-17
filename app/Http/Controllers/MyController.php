<?php

namespace App\Http\Controllers;

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
