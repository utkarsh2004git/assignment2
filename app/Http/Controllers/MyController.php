<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function showRegister(){
        return view('admin/register');
     }
     public function showLogin(){
        return view('admin/login');
     }
     public function adminView(){

         $admins= Admin::all();
         // echo "<pre>";
         // print_r($admins->toArray());
         
         $data=compact('admins');
        return view('admin/admin-view')->with($data);
     }
}
