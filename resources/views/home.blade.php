@extends('layouts.main')
@push('title') <title>Home</title>
@section('hero-section')

<div class="px-5 pt-3 pb-5 " style="background-color: #dddddd">
    <div class="heading">
        <h1 align='center' class="display-3 font-semibold">Posts</h1>
    </div>

    <div class="mt-2 grid md:grid-cols-2 grid-cols-1 lg:grid-cols-3 gap-5 ">
        @foreach($posts as $post)
            <div class="border-3  border-gray-400 cursor-pointer p-3 rounded-md flex flex-col hover:scale-105 transition-all transition-600 justify-between " style="background-color: white;border:3px solid #283447">
                <div>
                    <h3 class=" text-5xl font-sans" style="color: #283447" >{{$post->category}}</h3>
                </div>
                
                <div class="info border rounded-md p-3 my-3 text-white" style="background-color: #283447">
                    <h4 class="text-3xl"> <span class="font-semibold ">Title : </span> {{substr($post->title,0,19)}}...</h4>
                    <p class="mt-3 ">{{substr($post->content,0,170)}}. . . .</p>

                    <div class="mt-3 px-3 py-2 bg-white w-max  rounded-lg nnp ">
                        <h3 class="text-black font-semibold " align='center'>{{$post->creator}}</h3>
                    </div>
                </div>
                <div class="flex justify-between mb-2">
                    <span class="text-black ml-2 font-semibold  ">
                        {{$post->updated_at->diffForHumans()}}
                    </span>
                    <a href="{{url('/detail-post')}}/{{$post->post_id}}" style="text-decoration: none" class="hover:scale-110 transition-all transition-1000 bg-orange-500 p-2 rounded-xl hover:bg-mycolor">
                     <span class=" text-white p-2 rounded-xl" >Read More </span>
                    </a>
                </div>

            </div>
              
        @endforeach
    </div>
</div>
<div class="inline-block min-w-full py-2 sm:px-6 lg:px-8  " style="">{{ $posts->links() }}</div>


@endsection