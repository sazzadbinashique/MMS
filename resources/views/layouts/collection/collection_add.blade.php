@extends('layouts.master.layout')

@section('title','Collection Add')

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
                <h4>Collection Add Form</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        @include('flash::message')
                        {!! Form::model($collection, array('method'=>'POST', 'url' => '/collection_add', 'role'=>"form")) !!}
                        {{ Form::hidden('id') }}
                            <div class="form-group">
                               <!--  <label> Member Name: </label>
                                <select class="form-control">
                                    <option selected="selected" value="">--- Add Name---</option>
                                    <option>Ssdsdfsdf</option>
                                    <option>sdfdd ddd </option>
                                    <option>Shovsdson vai </option>
                                    <option>Empsdfs_Name</option>
                                    <option>Emp_dfName</option>
                                </select> -->
                                {!! Form::select('user_id', $member_names, null, ['placeholder' => 'Add Your Name','id'=>'user_id','class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="amount" >Collection Amount: </label>
                                {!! Form::number("amount", null, ['class' => 'form-control', 'placeholder'=> 'Enter Your Amount...', 'id'=>'amount', 'value'=> old('amount'),]) !!}
                                <!-- <input class="form-control" type="number" name="amount" id="amount 'value'=> old('amount'),"> -->
                            </div> 
                             <div class="form-group">
                                <label for="date"> Collection Date: </label>
                                {!! Form::date("date", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Date...', 'id'=>'date', 'value'=> old('date'),]) !!}
                                <!-- <input class="form-control" type="date" name="date" id="date"> -->
                            </div> 
                                
                            <div class="col-lg-6 col-lg-push-8">
                                <button type="submit" class="btn btn-primary">Submit </button>
                                <button type="reset" class="btn btn-success">Reset </button>
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
