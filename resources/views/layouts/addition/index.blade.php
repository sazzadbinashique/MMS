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
            <h3>Additional List</h3> 
        </div>
    </div>
</div>
</div>
<div class="panel panel-body">
 <div class="table-responsive">
	<table class="table table-striped table-bordered table-hover">
    	<thead>
        	<tr>
            	<th>Id</th>
            	<th> Item Name</th>
            	<th>Date</th>
                <th>Amount</th>
                <th>Created</th>
                <th>Updated</th>
            	<th>Edit</th>
        		<th>Action</th>
    		</tr>
    	</thead>
        <tbody>
            @foreach($additionals as $additional)
            <tr>
                <td>{{$additional->id}}</td>
                <td>{{$additional->extra_items_id}}</td>
                <td>{{$additional->date}}</td>
                <td>{{$additional->amount}}</td>
                <td>{{$additional->created_at? $additional->created_at->diffForHumans(\Carbon\Carbon::now()): 'not created'}}</td>
                <td>{{$additional->updated_at? $additional->updated_at->diffForHumans(\Carbon\Carbon::now()): ' not updated'}}</td>
                <td>
                    <a href="{{route('additionals.edit', $additional->id)}}" class="btn btn-primary">Edit</a>
                 </td>
                 <td>   
                    {!! Form::open(['method'=>'DELETE', 'action'=> ['AdditionalsController@destroy', $additional->id]]) !!}
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