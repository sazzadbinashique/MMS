@extends('layouts.master.layout')

@section('title','Extra Item')

@section('content')
<div class="row">
<!--  page header -->
<div class="col-lg-12">
<h1 class="page-header">All User Meal Information</h1>
</div>
<!-- end  page header -->
</div>
<div class="row">
<div class="col-lg-12">
<!--   Kitchen Sink -->
<div class="panel panel-default">
  <div class="panel-heading">
      <h3>All User List</h3> 
  </div>
  <div class="panel-body">
      <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
             <thead>
                 @include('flash::message')
                 <tr>
                     <th>ID</th>
                     <th>Name</th>
                     <th>Individual Total Meal</th>
                     <th>Total Meal</th>
                     <th>Total Bazar </th>
                     <th>Meal Rate </th>
                     <th>Individual Meal Cost</th>
                 </tr>
             </thead>
             <tbody>

                  @foreach($users as $user)
                 <tr>
                     <td>{{$user->id}}</td>
                     <td>{{$user->name}}</td>
                     <td>{{$person_total_meal}}</td>
                     
                     <td>{{$total_meal}}</td>

                     <td>{{$total_bazar}}</td>
                     
                     <td>{{$meal_rate}}</td>
                     
                     <td>{{$total_cost}}</td>

                 </tr>
                 
                  @endforeach
             </tbody>
          </table>
      </div>
  </div>

@stop