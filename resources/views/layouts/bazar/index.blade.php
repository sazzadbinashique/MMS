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
            <h3>Bazar List</h3>
            <div class="">
                <a href="{{url('/bazars/create')}}" class="btn btn-primary">Add Meal</a>
            </div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                     @include('flash::message')
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Month</th>
                        <th>Expected Date</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Edit</th>
                        <th>Deleted</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bazars as $bazar)
                    <tr>
                        <td>{{$bazar->id}}</td>
                        <td>{{$bazar->user_id}}</td>
                        <td>{{$bazar->month_id}}</td>
                        <td>{{$bazar->expected_date}}</td>
                        <td>{{$bazar->created_at? $bazar->created_at->diffForHumans(\Carbon\Carbon::now()): 'not created'}}</td>
                        <td>{{$bazar->updated_at? $bazar->updated_at->diffForHumans(\Carbon\Carbon::now()): ' not updated'}}</td>
                        <td>
                            <a href="{{route('bazars.edit', $bazar->id)}}" class="btn btn-primary">Edit</a>
                         </td>
                         <td>   
                            {!! Form::open(['method'=>'DELETE', 'action'=> ['BazarsController@destroy', $bazar->id]]) !!}
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
</div>
</div>
@stop