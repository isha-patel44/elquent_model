@extends('layout')
@section('title')
USER DATA
@endsection

@section('content')
<table class="table table-striped table-bordered">
    <tr>
        <th width="80px">Name:</th>
        <td>{{$users->name}}</td>
    </tr>
  
    <tr>
        <th> EMAIL:</th>
        <td>{{$users->email}}</td>

    </tr>
    <tr>
        <th>AGE:</th>
        <td>{{$users->age}}</td>

    </tr>
    <tr>
        <th>city:</th>
        <td>{{$users->city}}</td>

    </tr>
</table>
<a  href="{{route('user.index')}}" class="btn btn-danger">Back</a>
@endsection