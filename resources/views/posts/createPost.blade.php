@extends('layouts.main')
@push('title') <title>all-posts</title>
@section('hero-section')

<div class="container flex flex-column items-center">
    <div>
      <h1 class="display-4 font-bold ">{{$heading}}</h1>
    </div>
      <div class="forminside p-4 w-1/3 border border-stone-300 border-3 my-3 rounded-md bg-gray-100">
        
        <form method="POST"  action="{{$url}}">
          @csrf

          <div class="form-group">
            <label for="category " class="font-semibold">Category</label>
            <select class="form-control" name="category" id="category"  required  >

              <option  value="select" name="select" selected disabled >select</option>

              <option value="Politics" name="Politics" {{ $post->category == NULL ? (old('category') == 'Politics' ? 'selected' : '') : ($post->category == 'Politics' ? 'selected' : '') }}>Politics</option>
              <option value="Agriculture" name="Agriculture" {{ $post->category == NULL ? (old('category') == 'Agriculture' ? 'selected' : '') : ($post->category == 'Agriculture' ? 'selected' : '') }}>Agriculture</option>
              <option value="Sports" name="Sports" {{ $post->category == NULL ? (old('category') == 'Sports' ? 'selected' : '') : ($post->category == 'Sports' ? 'selected' : '') }}>Sports</option>
              <option value="Technology" name="Technology" {{ $post->category == NULL ? (old('category') == 'Technology' ? 'selected' : '') : ($post->category == 'Technology' ? 'selected' : '') }}>Technology</option>
              <option value="Spiritual" name="Spiritual" {{ $post->category == NULL ? (old('category') == 'Spiritual' ? 'selected' : '') : ($post->category == 'Spiritual' ? 'selected' : '') }}>Spiritual</option>

            </select>
            <span class="text-danger">
              @error('category')
              {{$message}}
              @enderror
            </span>
            
            <div class="form-group my-2">
              <label for="name" class="font-semibold">Title</label>
              <input type="text"
                class="form-control rounded-md"  name="title" id=""  placeholder="" value="{{$post->title==NULL?old('title'):$post->title}}">
            </div>
            <span class="text-danger">
              @error('title')
              {{$message}}
              @enderror
            </span>


        <div>
            <label for="content" class="font-semibold">Content</label>
            <textarea id="content"
            class="block mt-1 w-full rounded"
            name="content"
            rows="6"
            autofocus >{{$post->content==NULL?old('content'):$post->content}}</textarea>
            <span class="text-danger">
                @error('content')
                {{$message}}
                @enderror
              </span>
        </div>
        
        <div class="form-group my-2">
          <label for="creator" class="font-semibold">Name</label>
          <input type="text"
            class="form-control rounded-md"  name="creator" id="creator"  placeholder="" value="{{$post->creator==NULL?old('creator'):$post->creator}}">
            <span class="text-danger">
              @error('category')
              {{$message}}
              @enderror
            </span> 
        </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary text-center bg-blue-600 mt-3" >{{$btn}}</button>
            </div>
        </form>
      </div>
  
  </div>

@endsection