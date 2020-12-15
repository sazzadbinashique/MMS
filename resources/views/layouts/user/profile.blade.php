@extends('layouts.master.layout')

@section('title','User Profile')

@section('content')
    <div class="row">
        <!-- Page Header -->
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!--End Page Header -->
    </div>
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <!-- Form Elements -->
            <div class="panel panel-default" id="profile">
                <div class="panel-heading text-center">
                    <h4>Profile Information</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-offset-3">
                            @include('flash::message')
                            {!! Form::model($user,['method'=>'PATCH', 'action'=> ['UsersController@update', $user->id],'role'=>'form', 'class'=>'form-horizontal']) !!}
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

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>

@stop
