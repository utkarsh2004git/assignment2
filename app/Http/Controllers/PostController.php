<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{

    public function postView(){

        // $posts= Post::all();
        $posts= Post::orderBy("created_at","desc")->paginate(10);
        // echo "<pre>";
        // print_r($admins->toArray());
        
        $data=compact('posts');
        
       return view('posts/adminpost')->with($data);
    }

    public function HomePage(){
        // $posts= Post::all();

        $posts= Post::orderBy("created_at","desc")->paginate(9);
        $data=compact('posts');
       return view('/home')->with($data);
    }

    public function createPostView(){
        $post=new Post();
        $heading="Create Post";
        $url="/create-post";
        $btn="Create";
        $data=compact('post','url','btn',"heading");
        
        return view("/posts/createPost")->with($data);
    }


    public function createPost(Request $req){
       
        $req->validate(
                [
                    'creator'=>'required|alpha',
                    'title'=>'required|min:10|max:35',
                    'content'=>'required',
                    'category'=>'required',

                ]
        );

        $post = new Post;
        $post->creator= $req['creator'];
        $post->user_id= session()->get('loginId');
        $post->content= $req['content'];
        $post->title= $req['title'];
        $post->category= $req['category'];
        $post->save();
        if($req){
            return redirect('/allposts')->with("success","Post Created Successfully");
        }
        else{
            return redirect('home')->with("fail","Something went wrong");
        }
    }


    public function deletePost($id){
        $post=Post::find($id);
        $post->delete();
        return redirect()->back()->with("success","Post deleted Successfully");

    }

    public function editPost($id){
        $post=Post::find($id);
        
        if(is_null($post)){
            return redirect('/');
        }
        else{
            $heading="Update Post";
            $url='/update-post' .'/'. $id;
            $btn="Update";
            $data=compact('post','url','btn',"heading");
            return view("/posts/createPost")->with($data);
        }
    }

    public function updatePost($id,Request $req){
        $post=Post::find($id);
        $post->creator= $req['creator'];
        $post->content= $req['content'];
        $post->title= $req['title'];
        $post->category= $req['category'];
        $post->save();
        return redirect("/allposts")->with("success","Post Updated Successfully");
    }

    public function detailPost($id){
        $post=Post::find($id);
        
        if(is_null($post)){
            return redirect('/');
        }
        else{
            $url='/update-post' .'/'. $id;
            $data=compact('post','url');
            return view("/posts/detailpost")->with($data);
        }
    }



}
