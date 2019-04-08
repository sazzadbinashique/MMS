@extends('layouts.master.layout')

@section('title','Extra Item')

@section('content')
<div class="row">
<!--  page header -->
<div class="col-lg-12">
<h1 class="page-header">All Member Meal Information</h1>
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
                     <th>Personal Collection</th>
                     <th>Personal Meal</th>
                     <th>Total Meal</th>
                     <th>Total Bazar </th>
                     <th>Total Extra </th>
                     <th>Meal Rate </th>
                     <th>Extra Rate </th>
                     <th>Khala </th>
                     <th>Individual Meal Cost</th>
                 </tr>
             </thead>
             <tbody>

                  @foreach($users as $user)
                 <tr>
                     <td>{{$user->id}}</td>
                     <td>{{$user->name}}</td>
                     <td>{{$user->TotalCollection}}</td>
                     <td>{{$user->TotalMeal}}</td>
                     <td>{{$total_meal}}</td>
                     <td>{{$total_bazar}}</td>
                     <td>{{$total_extra}}</td>
                     <td>{{$meal_rate}}</td>
                     <td>{{$total_extra_rate}}</td>
                     <td>{{$khala}}</td>
                     <td>{{$user-> TotalMeal*$meal_rate +$total_extra_rate+$khala}}</td>

                 </tr>
                 
                  @endforeach
             </tbody>
          </table>
      </div>
  </div>

@stop

