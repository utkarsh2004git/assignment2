@extends('layouts.main')
@push('title') <title>Register</title> 
@section('hero-section')

<div class="container flex flex-column items-center">
  <div>
    <h1 class="display-4 font-bold ">Login Here</h1>
  </div>
    <div class="forminside p-4 w-1/3 border border-stone-300 border-3 my-3 rounded-md bg-gray-100">
      <form method="POST"  action="{{url('/admin/register')}}">
        @csrf
        <x-Forminput type="email" name="email" title="Email" errortype="email" value="email"/>
        <span class="text-danger">
          @error('email')
          {{$message}}
          @enderror
        </span>

        <x-Forminput type="password" name="password" title="Password" errortype="password" value='' />
        <span class="text-danger">
          @error('password')
          {{$message}}
          @enderror
      </span>
          

          <div class="text-center">
            <button type="submit" class="btn btn-primary text-center bg-blue-600 mt-3">Submit</button>
          </div>

          <a href="{{url('admin/register')}}" class="font-semibold text-primary"> Registered Now </a>
        

      </form>
    </div>

</div>

@endsection