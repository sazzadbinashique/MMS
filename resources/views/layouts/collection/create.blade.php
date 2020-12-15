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
                            <div class="form-group{{$errors->has('user_id'? 'has-error': '')}}">
                                <label> Member Name: </label>
                                {!! Form::select('user_id', $users, null, ['placeholder' => 'Add Your Name','id'=>'user_id','class'=>'form-control']) !!}
                                @if($errors->has('user_id'))
                                    <span class="text-danger"><strong>{{$errors->first('user_id')}}</strong></span>
                                @endif
                            </div>
                            <div class="form-group{{$errors->has('amount'? 'has-error': '')}}">
                                <label for="amount" >Collection Amount: </label>
                                {!! Form::number("amount", null, ['class' => 'form-control', 'placeholder'=> 'Enter Your Amount...', 'id'=>'amount']) !!}
                                @if($errors->has('amount'))
                                    <span class="text-danger"><strong>{{$errors->first('amount')}}</strong></span>
                                @endif
                            </div> 
                             <div class="form-group{{$errors->has('date'? 'has-error': '')}}">
                                <label for="date"> Collection Date: </label>
                                {!! Form::date("date", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Date...', 'id'=>'date']) !!}
                                @if($errors->has('date'))
                                    <span class="text-danger"><strong>{{$errors->first('date')}}</strong></span>
                                @endif
                            </div> 
                                
                            <div class="col-lg-6 col-lg-push-10">
                                <button type="submit" class="btn btn-success">Submit </button>
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
