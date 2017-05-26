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
                        {!! Form::model($meal, array('method'=>'POST', 'url' => '/meal_add', 'role'=>"form")) !!}
                        {{ Form::hidden('id') }}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Name: </label>
                                    {!! Form::select('user_id', $user_names, null, ['placeholder' => 'Add Your Name','id'=>'user_id','class'=>'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    <label> Date: </label>
                                    {!! Form::date("date", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Date...', 'id'=>'date', 'value'=> old('date'),]) !!}
                                </div>

                                <div class="form-group">
                                    <label> Breakfast: </label>
                                    {!! Form::text("Braekfast", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Breakfast...', 'id'=>'Braekfast', 'value'=> old('Braekfast'),]) !!}
                                </div>
                                <div class="form-group">
                                    <label> Launch: </label>
                                    {!! Form::text("Lanch", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Lanch...', 'id'=>'Lanch', 'value'=> old('Lanch'),]) !!}
                                </div>
                                <div class="form-group">
                                    <label> Dinner: </label>
                                    {!! Form::text("Dinner", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Dinner...', 'id'=>'Dinner', 'value'=> old('Dinner'),]) !!}
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