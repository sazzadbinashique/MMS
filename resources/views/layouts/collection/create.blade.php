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
                         {!! Form::open(['method'=>'POST', 'action'=> 'CollectionsController@store','role'=>'form']) !!}
                        {{ Form::hidden('id') }}
                            <div class="form-group">
                                <label> Member Name: </label>
                                {!! Form::select('user_id', $users, null, ['placeholder' => 'Add Your Name','id'=>'user_id','class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <label for="amount" >Collection Amount: </label>
                                {!! Form::number("amount", null, ['class' => 'form-control', 'placeholder'=> 'Enter Your Amount...', 'id'=>'amount']) !!}
                            </div> 
                             <div class="form-group">
                                <label for="date"> Collection Date: </label>
                                {!! Form::date("date", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Date...', 'id'=>'date']) !!}
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