@extends('layouts.main')
@push('title') <title>all-posts</title>
@section('hero-section')

<div class="container flex flex-column items-center">
    <div>
      <h1 class="display-4 font-bold ">Create Post</h1>
    </div>
      <div class="forminside p-4 w-1/3 border border-stone-300 border-3 my-3 rounded-md bg-gray-100">
        
        <form method="POST"  action="{{url('/create-post')}}">
          @csrf
          <div class="form-group">
            <label for="category " class="font-semibold">Category</label>
            <select class="form-control" name="category" id="category"  required  >
              <option value="select" name="select" selected disabled >select</option>
              <option value="Politics" name="Politics" >Politics</option>
              <option value="Agriculture" name="Agriculture" >Agriculture</option>
              <option value="Sports" name="Sports" >Sports</option>
              <option value="Technology" name="Technology" >Technology</option>
              <option value="Spiritual" name="Spiritual" >Spiritual</option>
            </select>
            <span class="text-danger">
              @error('category')
              {{$message}}
              @enderror
            </span>
            
            <x-Forminput type="title" name="title" title="Title" errortype="title" value="title"/>
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
            autofocus></textarea>
            <span class="text-danger">
                @error('content')
                {{$message}}
                @enderror
              </span>
        </div>
        
        <x-Forminput type="text" title="Name" name="name" errortype="name" value="name"/>
        <span class="text-danger">
            @error('name')
            {{$message}}
            @enderror
          </span>

            <div class="text-center">
              <button type="submit" class="btn btn-primary text-center bg-blue-600 mt-3" >Create</button>
            </div>
        </form>
      </div>
  
  </div>

@endsection