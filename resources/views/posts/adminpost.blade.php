@extends('layouts.main')
@push('title') <title>all-posts</title>
@section('hero-section')



<div align="center">
    <div id="alert">
        @if(session()->has('success'))
            <div class="alert alert-success ">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{session()->get('success')}}
            </div>
        @elseif(session()->has('fail'))
        <div class="alert alert-danger " >
            <button type="button" class="close" data-dismiss="alert">X</button>
            {{session()->get('fail')}}
        </div>
        @endif
    </div>
</div>
<div class="">

    <table class="table">
        <thead align="center">
            <tr>
                <th>Creator</th>
                <th>Category</th>
                <th>Title</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody align="center">
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->creator}}</td>
                <td>{{$post->category}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
                <td>
                    <a class="btn btn-danger" href="">Delete</a>
                    <a class="btn btn-primary" href="">Edit</a>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>


@endsection