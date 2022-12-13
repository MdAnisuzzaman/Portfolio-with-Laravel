@extends('master')
@section('title','Add Info')
@section('add-data')

<div class="col-6 mx-auto py-4">
    <h3>Add New Data</h3>
    <h4>{{ Session::get('notify') }}</h4>
<form action="{{ route('data.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="" placeholder="Enter  Name"><br>
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email"  class="form-control" id="email" value="" placeholder="Enter Email"><br>
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password"  class="form-control" id="password" value="" placeholder="Enter Password"><br>
        @error('password')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image"  class="form-control" id="image" value="" placeholder="ChooseFile"><br>
        @error('password')
        <span class="text-danger" >{{ $message }}</span>
            
        @enderror
    </div>

        <button type="submit" class="btn btn-danger" >Submit</button>

   

</form>

</div>
@endsection