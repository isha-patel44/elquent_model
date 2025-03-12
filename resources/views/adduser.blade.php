@extends('layout')
@section('title')
ADD USER DATA
@endsection

@section('content')
<form action="{{route('user.store')}}"method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>USER NAME:</label>
        <input type=text class="form-control" name="username">
    </div>
    <div class="mb-3">
        <label>EMAIL:</label>
        <input type=text class="form-control" name="email">
    </div>
    <div class="mb-3">
        <label>AGE:</label>
        <input type=number class="form-control" name="age">
    </div>
    <div class="mb-3">
        <label>city:</label>
        <input type=text class="form-control" name="city">
    </div>
    <div class="mb-3">
        <label>
            <input type="radio" name="status" value="pending" checked> Pending
        </label>
        <label>
            <input type="radio" name="status" value="in_progress"> In Progress
        </label>
        <label>
            <input type="radio" name="status" value="completed"> Completed
        </label>
        </div>
    <div class="mb-3">
    <input type="file" name="photo" accept="image/*">
    </div>
  
    <div class="mb-3">
        <input type="submit" value="save" class="btn btn-success">
    </div>
</form>
@endsection