<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Hamcrest\Core\Set;
use Illuminate\Contracts\Session\Session as SessionSession;
use Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data=array();
        if(session()->has('loginId')){
            $data=Admin::where('admin_id',"=",session()->get('loginId'))->first();
            
        }
        return view('/home');
    }

    public function logout(){
        if(session()->has('loginId')){
            session()->pull('loginId');
        }
        return redirect('/admin/login');
    }

    public function dashboard(){
        $data=array();
        if(session()->has('loginId')){
            $data=Admin::where('admin_id',"=",session()->get('loginId'))->first();
            
        }
        return view('/dashboard');
    }
}
