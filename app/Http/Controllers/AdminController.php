<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminController extends Controller
{

         public function adminView(){

        //  $admins= Admin::all();

         $admins= Admin::paginate(10);
         // echo "<pre>";
         // print_r($admins->toArray());
         
         $data=compact('admins');
        return view('admin/admin-view')->with($data);
     }


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
        $admin->password= Hash::make($req['password']);
        $admin->save();
        if($req){
            $req->session()->put('loginId',$admin->admin_id);
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
            if(Hash::check($req->password,$admin->password)){
                $req->session()->put('loginId',$admin->admin_id);
                return redirect('/');
            }
            else{
                return back()->with('fail',"Password is incorrect");
            }
        }

        else{

            return back()->with('fail',"this is not valid email");
        }
    }




}
