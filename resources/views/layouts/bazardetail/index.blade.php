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
<h3>Bazar Details List</h3>
</div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
    <thead>
        @include('flash::message')
        <tr>
            <th>Id</th>
            <th> Name</th>
            <th> Menu</th>
            <th>Amount</th>
            <th>Date</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Edit</th>
            <th>Deleted</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bazar_details as $bazar_detail)
        <tr>
            <td>{{$bazar_detail->id}}</td>
            <td>{{$bazar_detail->user->name}}</td>
            <td>{{$bazar_detail->bazar_menu_id}}</td>
            <td>{{$bazar_detail->amount}}</td>
            <td>{{$bazar_detail->date}}</td>
            <td>{{$bazar_detail->created_at? $bazar_detail->created_at->diffForHumans(\Carbon\Carbon::now()): 'not created'}}</td>
            <td>{{$bazar_detail->updated_at? $bazar_detail->updated_at->diffForHumans(\Carbon\Carbon::now()): ' not updated'}}</td>
            <td>
                <a href="{{route('bazar_details.edit', $bazar_detail->id)}}" class="btn btn-primary">Edit</a>
             </td>
             <td>   
                {!! Form::open(['method'=>'DELETE', 'action'=> ['BazarDetailsController@destroy', $bazar_detail->id]]) !!}
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