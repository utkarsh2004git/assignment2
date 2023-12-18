@extends('layouts.main')
@push('title') <title>Register</title> 
@section('hero-section')

<div class="container flex flex-column items-center">
  <div>
    <h1 class="display-4 font-bold ">Register Here</h1>
  </div>
    <div class="forminside p-4 w-1/3 border border-stone-300 border-3 my-3 rounded-md bg-gray-100">
      <form method="POST"  action="{{url('/admin/register')}}">
        @csrf
        <x-Forminput type="text" name="name" title="Name" errortype="name" value="name"/>
        <span class="text-danger">
          @error('name')
          {{$message}}
          @enderror
      </span>
        <x-Forminput type="email" name="email" title="Email" errortype="email" value="email"/>
        <span class="text-danger">
          @error('email')
          {{$message}}
          @enderror
      </span>

        <x-Forminput type="text" name="password" title="Password" errortype="password" value='' />
        <span class="text-danger">
          @error('password')
          {{$message}}
          @enderror
      </span>

        <x-Forminput type="date" name="dob" title="Date of Birth" errortype="date" value="{{old('dob')}}"/>
        <span class="text-danger">
          @error('dob')
          {{$message}}
          @enderror
        </span>
        <div class="form-group">
          <label for="gender " class="font-semibold">Gender</label>
          <select class="form-control" name="gender" id="gender"  required  >
            <option value="select" name="select" selected disabled >select</option>
            <option value="M" name="M" >Male</option>
            <option value="F" name="F" >Female</option>
            <option value="O" name="O" >Other</option>
          </select>
          <span class="text-danger">
            @error('gender')
            {{$message}}
            @enderror
            
          <div class="text-center">
            <button type="submit" class="btn btn-primary text-center bg-blue-600 mt-3" >Submit</button>
          </div>

          <a href="{{url('admin/login')}}" class="font-semibold text-primary" >Already Registered?</a>


        

      </form>
    </div>

</div>

@endsection