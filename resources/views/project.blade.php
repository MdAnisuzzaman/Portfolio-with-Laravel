@extends('master')
@section('title','Project')
@section('project')

<div class="card mx-auto"  style="width: 30rem ;">
    <img src="images/project.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h2 class="card-title"style="color:red ;">Thesis/Project Work </h2>
      <h3 class="card-text"style="color:black ;">Topic:nRF Teachers Calling</h3>
  
      <h3 class="card-text"style="color:black ;">Supervisor:Md Jahangir Alam Sumon(Associate Professor,Dhaka City College)</h3>
      
    </div>
  </div>
  <div class="container py-4">
    <div class="row">
     <img src="{{ asset('/')}}db/images/person.images/persons1670037940.jpg" width="20px" alt="" srcset="">
    </div>
  </div>
  @endsection