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
                <h4>Additional Add Form</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        @include('flash::message')
                        {!! Form::open(['method'=>'POST', 'action'=> 'AdditionalsController@store','role'=>'form'])!!}
                        {{ Form::hidden('id') }}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group{{$errors->has('extra_items_id')? 'has-error': ''}}">
                                        <label> Item Name: </label>
                                        {!! Form::select('extra_items_id', $extra_items, null, ['id'=>'extra_item_id','class'=>'form-control']) !!}
                                        @if($errors->has('extra_items_id'))
                                            <span class="text-danger"><strong>{{$errors->first('extra_items_id')}}</strong></span>
                                        @endif  
                                    </div>
                                    <div class="form-group{{$errors->has('date')? 'has-error': ''}}">
                                        <label> Enter Date: </label>
                                        {!! Form::date("date", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Date...', 'id'=>'date', 'value'=> old('date'),]) !!}
                                        @if($errors->has('date'))
                                            <span class="text-danger"><strong>{{$errors->first('date')}}</strong></span>
                                        @endif  
                                    </div> 
                                    <div class="form-group{{$errors->has('amount')? 'has-error': ''}}">
                                        <label> Extra Amount: </label>
                                         {!! Form::number("amount", null, ['class' => 'form-control', 'placeholder'=> 'Enter Extra Amount...', 'id'=>'extra_amount']) !!}
                                           @if($errors->has('amount'))
                                                <span class="text-danger"><strong>{{$errors->first('amount')}}</strong></span>
                                            @endif  
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