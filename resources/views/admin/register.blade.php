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


        {{-- <x-Forminput type="password" id="password" name="password" title="Password" errortype="password" value='' />
         --}}
         <div class="form-group my-2">
          <label for="password" class="font-semibold">Password</label>
          <input type="password"
            class="form-control rounded-md"  name="password" id="password"  placeholder="" value="">
            <input type="checkbox" id="showPassword"> <label for="showPassword" class="mb-0">Show Password</label>
            <span class="text-danger">
              @error('password')
              {{$message}}
              @enderror
          </span>
        </div>


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
            <option value="M" name="M" {{old('gender')=="M"?"selected":""}}>Male</option>
            <option value="F" name="F" {{old('gender')=="F"?"selected":""}}>Female</option>
            <option value="O" name="O" {{old('gender')=="O"?"selected":""}}>Other</option>
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


@section('javascript-section')
<script>
  document.getElementById('showPassword').addEventListener('change', function () {
      var passwordField = document.getElementById('password');
      passwordField.type = this.checked ? 'text' : 'password';
  });
</script>

@endsection