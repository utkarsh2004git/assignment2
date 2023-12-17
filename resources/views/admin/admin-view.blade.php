
@extends('layouts.main')
@section("hero-section")



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
                    <th>Name</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody align="center">
                @foreach ($admins as $admin)
                <tr>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->email}}</td>
                    <td>{{date("d-M-Y",strtotime($admin->dob))}}</td>
                    <td>@if($admin->gender=="M")Male
                        @elseif($admin->gender=="F")Female
                        @elseif($admin->gender=="O")Other
                        @endif
                    </td>
                    <td>
                        @if($admin->status=="1")
                           <a href=""> <span class="badge badge-success">Active</span></a>
                        @else       
                            <a href=""><span class="badge badge-danger">Inactive</span></a>
                        @endif
                    </td>
                    <td>{{$admin->created_at->diffForHumans()}}</td>
                    <td>{{$admin->updated_at->diffForHumans()}}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>


@endsection