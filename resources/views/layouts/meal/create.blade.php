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
                            <div class="form-group">
                                <label>Name: </label>
                                {!! Form::select('user_id', $users, null, ['placeholder' => 'Add Your Name','id'=>'user_id','class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                <label> Date: </label>
                                {!! Form::date("date", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Date...', 'id'=>'date']) !!}
                            </div>

                            <div class="form-group">
                                <label> Breakfast: </label>
                                {!! Form::text("braekfast", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Breakfast...', 'id'=>'Braekfast']) !!}
                            </div>
                            <div class="form-group">
                                <label> Launch: </label>
                                {!! Form::text("lanch", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Lanch...', 'id'=>'lanch']) !!}
                            </div>
                            <div class="form-group">
                                <label> Dinner: </label>
                                {!! Form::text("dinner", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Dinner...', 'id'=>'dinner']) !!}
                            </div>

                            <div class="col-lg-12 col-lg-push-8">
                                <button type="submit" class="btn btn-primary">Submit </button>
                                <button type="reset" class="btn btn-success">Reset </button>
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