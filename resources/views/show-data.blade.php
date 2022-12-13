@extends('master')
@section('title','Show-Data')
@section('show-data')
<div class="col-8 mx-auto py-4">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Image</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        @foreach ($showss as $show )
            <tbody>
            <tr>
                <th scope="row">{{ $show['id'] }}</th>
                <td>{{ $show['name'] }}</td>
                <td>{{ $show['email'] }}</td>
                <td>{{ $show['password'] }}</td>
                <td><img src="{{ asset('/')}}{{ $show['image'] }}" height="170px" alt=""></td>
                <td><a href="{{ "delete/". $show['id'] }}"> Delete</a></a></td>    
            </tr>
            </tbody>
        @endforeach
        
      </table>
</div>
@endsection