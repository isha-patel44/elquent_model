@extends('layout')
@section('title')
ALL USERS DATA
@endsection

@section('content')
<a href="{{route('user.create')}}" class="btn btn-success btn-sm mb-3">ADD NEW</a>
<table class="table table-bordered table-striped">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th> email</th>
        <th> age</th>
        <th> city</th>
        <th>status</th>
        <th>photo</th>
        <th> Edit</th>
        <th> view</th>
        <th> Delete</th>
    </tr>
    @foreach ($users as $user )
    <tr>
        <td> {{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->age}}</td>
        <td>{{$user->city}}</td>
        <td>{{$user->status}}</td>
        <td> <img  class="img-fluid img-thumbnail"src="{{ asset('storage/'.$user->file_name)}}"</td>
        <td><a href="{{route('user.edit',$user->id)}}" class="btn btn-warning btn-sm">Edit</a></td>
        <td><a href="{{route('user.show',$user->id)}}" class="btn btn-primary btn-sm">View</a></td>
        <td> <form action="{{route('user.destroy',$user->id)}}" method="post">
            @csrf
            @method('delete')
            <button type='submit' class="btn btn-danger btn-sm">Delete</button>
            </form>
           {{-- <a href="" class="btn btn-danger btn-sm">Delete</a></td> --}}
    </tr> 
    @endforeach

</table>
<div class="mt-4">
    {{-- {{$users->links()}} --}}
</div>
@endsection