@extends('layouts.main')
@push('title') <title>all-posts</title>
@section('hero-section')
<style>
    #mybtn{
        background-color: white;
        color: #283447;
        margin-top: 0.5rem;
        padding: 0.5rem 1rem; 
        font-size: 1.3rem;
        transition: all 0.5s;
    }
    #mybtn:hover{
        background-color: #283447;
        color: white;
        transform: scale(1.1)
    }
</style>

<div >
    <div class=" flex flex-col p-6 w-3/5 mx-auto my-7 rounded-3xl" style="background-color: #283447">
       <div>
            <div class="bg-white w-1/3 p-3 rounded-3xl">
                <h2 class="display-5 font-sans font-semibold" style="color: #283447">{{$post->category}}</h2>   
            </div>
            <div class="p-3 bg-white my-3 rounded-xl w-4/5">
            <h3 class="text-2xl font-semibold ">{{$post->title}}</h3>
            </div>
            <div class="bg-white mt-3 rounded-xl p-3" style="color:#283447 ">
                <div>
                    <p>{{$post->content}}</p>
                </div>
                <div class="p-2 text-white text-xl font-semibold rounded-lg mt-3 w-1/3 hover:scale-95 transition-all transition-300 cursor-pointer " style="background-color: #283447" >
                    <h5 align='center'>{{$post->creator}}</h5>
                    
                </div>
            </div>
       </div>
       <div>
            <div class="bg-orange-400 mt-4 flex text-white justify-between p-4 text-xl rounded-xl">
                    <div>
                        <div>
                            <p>Created : {{$post->created_at->diffForHumans()}}</p>
                        </div>
                        <div>
                            <p>Updated : {{$post->updated_at->diffForHumans()}}</p>
                        </div>
                    </div>

                    <div class="">
                        <a href="/" id="mybtn" class="btn mr-3 ">Back</a>
                    </div>

            </div>
       </div>
    </div>
</div>

@endsection