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

                <th>User_Id</th>
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
                <td>{{$post->user_id}}</td>
                <td>{{$post->creator}}</td>
                <td>{{$post->category}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->created_at->diffForHumans()}}</td>
                <td>{{$post->updated_at->diffForHumans()}}</td>
                <td>
                    <a class="btn btn-danger" href="{{url('/delete-post')}}/{{$post->post_id}}"  onclick="confirmation(event)">Delete</a>
                    <a class="btn btn-primary" href="{{url('/edit-post')}}/{{$post->post_id}}">Edit</a>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    
</div>
<div class="inline-block min-w-full py-2 sm:px-6 lg:px-8  " style="">{{ $posts->links() }}</div>

@endsection

@section('javascript-section')
<script>
    $('document').ready(function()
    {
        setTimeout(function() {
            $("div.alert").remove()
        },3000);
    });
</script>

<script>

    //Confirmation POP-UP

    function confirmation(ev){
        ev.preventDefault();
        let urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);
        swal({
            title: "Are you sure to delete this",
            text:"You won't be able to revert this process!",
            icon:"error",
            buttons :true,
            dangerMode:true,
        })
        .then((willCancel)=>
            {
                if(willCancel){
                    window.location.href=urlToRedirect;
                }
            }
        )
    } 
</script>

@endsection