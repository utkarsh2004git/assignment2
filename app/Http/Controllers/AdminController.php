<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{


    public function registerAdmin(Request $req){
       
        $req->validate(
                [
                    'name'=>'required',
                    'email'=>'required|email|unique:admin',
                    'password'=>'required|min:5|max:12',
                ]
        );

        $admin = new Admin;
        $admin->name= $req['name'];
        $admin->email= $req['email'];
        $admin->dob= $req['dob'];
        $admin->gender= $req['gender'];
        $admin->password= $req['password'];
        $admin->save();
        if($req){
            return view('home')->with("success","Admin Created Successfully");
        }
        else{
            return view('home')->with("fail","Something went wrong");
        }
    }
}
