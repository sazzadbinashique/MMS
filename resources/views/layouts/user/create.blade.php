@extends('layouts.master.layout')

@section('title','User Add')

@section('content')
<div class="row">
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
    <!--End Page Header -->
</div>
    <div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>User Add Form</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        @include('flash::message')
                         {!! Form::open(['method'=>'POST', 'action'=> 'UsersController@store','role'=>'form']) !!}
                        {{ Form::hidden('id') }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::label('name', 'Name:') !!}
                            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Enter your Name'])!!}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              {!! Form::label('email', 'Email:') !!}
                              {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Enter Your Email'])!!}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                          <div class="form-group {{$errors->has('password')? 'has-error': ''}}">
                              {!! Form::label('password', 'Password:') !!}
                              {!! Form::password('password', ['class'=>'form-control'])!!}
                              @if($errors->has('password'))
                                  <span class="text-danger"><em>{{$errors->first('password')}}</em></span>
                              @endif
                          </div>
                                
                            <div class="col-lg-6 col-lg-push-10">
                                <button type="submit" class="btn btn-primary">Save </button>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
         <!-- End Form Elements -->
    </div>
</div>

@stop
