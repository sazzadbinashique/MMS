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
                    <h3>Month List</h3>
                    <div class="">
                        <a href="{{url('/months/create')}}" class="btn btn-success">Add New Month</a>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            @include('flash::message')
                            <tr>
                                <th>Id</th>
                                <th>Month Name</th>
                                <th>Year</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Eidt</th>
                                <th>Deleted</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($months as $month)
                                <tr>
                                    <td>{{$month->id}}</td>
                                    <td>{{$month->month}}</td>
                                    <td>{{$month->year}}</td>
                                    <td>{{$month->created_at? $month->created_at->diffForHumans(\Carbon\Carbon::now()): 'not created'}}</td>
                                    <td>{{$month->updated_at? $month->updated_at->diffForHumans(\Carbon\Carbon::now()): ' not updated'}}</td>
                                    <td>
                                        <a href="{{route('months.edit', $month->id)}}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['MonthsController@destroy', $month->id]]) !!}
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