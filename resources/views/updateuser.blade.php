@extends('layout')
@section('title')
UPDATE USER DATA
@endsection

@section('content')
<form action="{{route('user.update',$users->id)}}"method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    {{-- <pre>
        @php
            print_r($errors->all());
        @endphp
    </pre> --}}
    <div class="mb-3">
        <label>USER NAME:</label>
        <input type=text class="form-control" name="username" value="{{$users->name}}">
    </div>
    <div class="mb-3">
        <label>EMAIL:</label>
        <input type=text class="form-control" name="email" value="{{$users->email}}">
    </div>
    <div class="mb-3">
        <label>AGE:</label>
        <input type=number class="form-control" name="age" value="{{$users->age}}">
    </div>
    <div class="mb-3">
        <label>city:</label>
        <input type=text class="form-control" name="city" value="{{$users->city}}">
    </div>
    <div class="mb-3">
        <label>
            <input type="radio" name="status" value="pending" {{ $users->status == 'pending' ? 'checked' : '' }}> Pending
        </label>
        <label>
            <input type="radio" name="status" value="in_progress" {{ $users->status == 'in_progress' ? 'checked' : '' }}> In Progress
        </label>
        <label>
            <input type="radio" name="status" value="completed" {{ $users->status == 'completed' ? 'checked' : '' }}> Completed
        </label>
    </div>
    <div class="mb-3">
        <label>photo:</label>
       <img  class="img-thumbnail img-fluid"src="{{ asset('/storage/'.$users->file_name)}}" id="output"alt='img'>
    </div>
    <div class="mb-3">
        <label>choose new:</label>
        <input type="file" onchange="document.querySelector('#output').src=window.URL.createObjectURL(this.files[0])" name="photo" accept="image/*" name="photo">
    </div>
    <div class="mb-3">
        <input type="submit" value="save" class="btn btn-success">
    </div>
</form>
@endsection