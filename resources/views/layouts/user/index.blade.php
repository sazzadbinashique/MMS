@extends('layouts.master.layout')

@section('title','All users')

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
            <h3>All User List</h3>
            <div class="">
                <a href="{{url('/users/create')}}" class="btn btn-success">Add New User</a>
            </div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        @include('flash::message')
                        <tr>
                            <th>Id</th>
                            <th>UserName</th>
                            <th>Email</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Edit</th>
                            <th>Deleted</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at? $user->created_at->diffForHumans(\Carbon\Carbon::now()): 'not created'}}</td>
                            <td>{{$user->updated_at? $user->updated_at->diffForHumans(\Carbon\Carbon::now()): ' not updated'}}</td>
                            <td>
                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">Edit</a>
                             </td>
                             <td>   
                                {!! Form::open(['method'=>'DELETE', 'action'=> ['UsersController@destroy', $user->id]]) !!}
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