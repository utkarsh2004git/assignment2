<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{

    public function postView(){

        // $posts= Post::all();
        $posts= Post::paginate(10);
        // echo "<pre>";
        // print_r($admins->toArray());
        
        $data=compact('posts');
        
       return view('posts/adminpost')->with($data);
    }

    public function HomePage(){
        // $posts= Post::all();

        $posts= Post::paginate(9);
        $data=compact('posts');
       return view('/home')->with($data);
    }

    public function createPostView(){

        return view("/posts/createPost");
    }


    public function createPost(Request $req){
       
        $req->validate(
                [
                    'name'=>'required',
                    'title'=>'required|min:10|max:25',
                    'content'=>'required',
                    'category'=>'required',

                ]
        );

        $post = new Post;
        $post->creator= $req['name'];
        $post->content= $req['content'];
        $post->title= $req['title'];
        $post->category= $req['category'];
        $post->user_id= session()->get('loginId');
        $post->save();
        if($req){
            return redirect('/allposts')->with("success","Post Created Successfully");
        }
        else{
            return redirect('home')->with("fail","Something went wrong");
        }
    }
}
