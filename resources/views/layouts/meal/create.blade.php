@extends('layouts.master.layout')

@section('title','')

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
            <h4>Meal Add Form</h4>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    @include('flash::message')
                     {!! Form::open(['method'=>'POST', 'action'=> 'MealsController@store','role'=>'form']) !!}
                    {{ Form::hidden('id') }}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group {{$errors->has('user_id'? 'has-error':'')}}">
                                <label>Name: </label>
                                {!! Form::select('user_id', $users, null, ['placeholder' => 'Add Your Name','id'=>'user_id','class'=>'form-control']) !!}
                                @if ($errors->has('user_id'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('user_id') }}</strong>
                                    </span>
                                    @endif
                            </div>

                            <div class="form-group {{$errors->has('date'? 'has-error':'')}}">
                                <label> Date: </label>
                                {!! Form::date("date", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Date...', 'id'=>'date']) !!}
                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group {{$errors->has('braekfast'? 'has-error':'')}}">
                                <label> Breakfast: </label>
                                {!! Form::text("braekfast", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Breakfast...', 'id'=>'Braekfast']) !!}
                                @if ($errors->has('braekfast'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('braekfast') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('lanch'? 'has-error':'')}}">
                                <label> Launch: </label>
                                {!! Form::text("lanch", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Lanch...', 'id'=>'lanch']) !!}
                                @if ($errors->has('lanch'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('lanch') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group {{$errors->has('dinner'? 'has-error':'')}}">
                                <label> Dinner: </label>
                                {!! Form::text("dinner", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Dinner...', 'id'=>'dinner']) !!}
                                @if ($errors->has('dinner'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('dinner') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-lg-12 col-lg-push-10">
                                <button type="submit" class="btn btn-success">Submit </button>
                            </div>
                        </div>              
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