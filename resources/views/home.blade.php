@extends('layouts.main')
@push('title') <title>Home</title>
@section('hero-section')

<div class="px-5">
    <div class="heading">
        <h1 align='center' class="display-3 font-semibold">Posts</h1>
    </div>

    <div class="mt-2 grid grid-cols-3 gap-5">
        @foreach($posts as $post)
            <div class="border-3  border-gray-400 cursor-pointer p-3 rounded-md flex flex-col hover:scale-105 transition-all transition-600" style="background-color: #b0adaa;border:3px solid #283447">
                <div>
                    <h3 class=" text-5xl font-sans" style="color: #283447" >{{$post->category}}</h3>
                </div>
                
                <div class="info border rounded-md p-3 my-3 text-white" style="background-color: #283447">
                    <h4 class="text-3xl"> <span class="font-semibold ">Title : </span> {{$post->title}}</h4>
                    <p class="mt-3 ">{{substr($post->content,0,170)}}. . . .</p>

                    <div class="mt-3 bg-white w-2/5 py-2 rounded-lg">
                        <h3 class="text-black font-semibold " align='center'>{{$post->creator}}</h3>
                    </div>
                </div>
                <div class="flex justify-between">
                    <span class="text-white ml-2 font-semibold  ">
                        {{$post->created_at->diffForHumans()}}
                    </span>
                    <a href="#" style="text-decoration: none" class="hover:scale-105 transition-all transition-600"> <span class=" text-white p-2 rounded-xl" style="background-color: #283447 ">
                        Read More
                    </span></a>
                </div>

            </div>
              
        @endforeach
    </div>
</div>


@endsection