@extends('layouts.master.layout')

@section('title','Menu list')

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
        <h3>Menu List</h3> 
    </div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
    <thead>
        @include('flash::message')
        <tr>
            <th>Id</th>
            <th>Menu Name</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Edit</th>
            <th>Deleted</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bazar_menus as $bazar_menu)
        <tr>
            <td>{{$bazar_menu->id}}</td>
            <td>{{$bazar_menu->menu_item}}</td>
            <td>{{$bazar_menu->created_at? $bazar_menu->created_at->diffForHumans(\Carbon\Carbon::now()): 'not created'}}</td>
            <td>{{$bazar_menu->updated_at? $bazar_menu->updated_at->diffForHumans(\Carbon\Carbon::now()): ' not updated'}}</td>
            <td>
                <a href="{{route('bazar_menus.edit', $bazar_menu->id)}}" class="btn btn-primary">Edit</a>
             </td>
             <td>   
                {!! Form::open(['method'=>'DELETE', 'action'=> ['BazarMenusController@destroy', $bazar_menu->id]]) !!}
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