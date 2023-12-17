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
                    'dob'=>'required',
                    'gender'=>'required',
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
            return redirect('/admin/admin-view')->with("success","Admin Created Successfully");
        }
        else{
            return redirect('home')->with("fail","Something went wrong");
        }
    }

    public function loginAdmin(Request $req){
        $req->validate(
            [
                'email'=>'required',
                'password'=>'required',
                
            ]

        );
        $admin= Admin::where('email',"=",$req->email)->first();
        if($admin){
            return redirect('admin/login')->with('success',"this is  valid email");
        }

        else{

            return redirect('admin/login')->with('fail',"this is not valid email");
        }
    }
}
