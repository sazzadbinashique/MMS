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
                    <h3>Collection List</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            @include('flash::message')
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Edit</th>
                                <th>Deleted</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($collections as $collection)
                                <tr>
                                    <td>{{$collection->id}}</td>
                                    <td>{{$collection->user->name}}</td>
                                    <td>{{$collection->amount}}</td>
                                    <td>{{$collection->date}}</td>
                                    <td>{{$collection->created_at? $collection->created_at->diffForHumans(\Carbon\Carbon::now()): 'not created'}}</td>
                                    <td>{{$collection->updated_at? $collection->updated_at->diffForHumans(\Carbon\Carbon::now()): ' not updated'}}</td>
                                    <td>
                                        <a href="{{route('collections.edit', $collection->id)}}" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        {!! Form::open(['method'=>'DELETE', 'action'=> ['CollectionsController@destroy', $collection->id]]) !!}
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
            <!-- End  Kitchen Sink -->
        </div>

    </div>
    </div>
    </div>
    <!-- end page-wrapper -->
@stop