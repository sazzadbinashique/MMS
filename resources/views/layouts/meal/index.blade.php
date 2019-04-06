@extends('layouts.master.layout')

@section('title','')

@section('content')

<div class="row">
     <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Dasboard</h1>
    </div>
     <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
      <!--   Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Meal List</h3> 
            </div>
<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                @include('flash::message')
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Breakfast</th>
                    <th>Launch</th>
                    <th>Dinner</th>
                    <th>Date</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Edit</th>
                    <th>Deleted</th>
                </tr>
            </thead>
            <tbody>
                @foreach($meals as $meal)
                <tr>
                    <td>{{$meal->id}}</td>
                    <td>{{$meal->user_id}}</td>
                    <td>{{$meal->braekfast}}</td>
                    <td>{{$meal->lanch}}</td>
                    <td>{{$meal->dinner}}</td>
                    <td>{{$meal->date}}</td>
                    <td>{{$meal->created_at? $meal->created_at->diffForHumans(\Carbon\Carbon::now()): 'not created'}}</td>
                    <td>{{$meal->updated_at? $meal->updated_at->diffForHumans(\Carbon\Carbon::now()): ' not updated'}}</td>
                    <td>
                    <a href="{{route('meals.edit', $meal->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                     <td>   
                    {!! Form::open(['method'=>'DELETE', 'action'=> ['MealsController@destroy', $meal->id]]) !!}
                        <div class="form-group">
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        </div>
                    {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop