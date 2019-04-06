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
            <h3>Extra Item List</h3> 
        </div>
<div class="panel-body">
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Extra Item Name</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Edit</th>
                <th>Deleted</th>
            </tr>
        </thead>
        <tbody>
            @foreach($extraitems as $extraitem)
            <tr>
                <td>{{$extraitem->id}}</td>
                <td>{{$extraitem->extra_item}}</td>
                <td>{{$extraitem->created_at? $extraitem->created_at->diffForHumans(\Carbon\Carbon::now()): 'not created'}}</td>
                <td>{{$extraitem->updated_at? $extraitem->updated_at->diffForHumans(\Carbon\Carbon::now()): ' not updated'}}</td>
                <td>
                    <a href="{{route('extra_items.edit', $extraitem->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>   
                {!! Form::open(['method'=>'DELETE', 'action'=> ['ExtraItemsController@destroy', $extraitem->id]]) !!}
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