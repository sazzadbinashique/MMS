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
                <h4>Month Add Form</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                            @include('flash::message')
                         {!! Form::open(['method'=>'POST', 'action'=> 'MonthsController@store','role'=>'form']) !!}
                          {{ Form::hidden('id') }}
                            <div class="form-group{{$errors->has('month')? 'has-error': ''}}">
                                <label>Month Name:</label>
                                {!! Form::text("month", null, ['class' => 'form-control', 'placeholder'=> 'Month Name...', 'id'=>'month']) !!}
                                @if($errors->has('month'))
                                    <span class="text-danger"><strong>{{$errors->first('month')}}</strong></span>
                                @endif    
                            </div>
                            <div class="form-group{{$errors->has('year')? 'has-error': ''}}">
                                <label>Year</label>
                                 {!! Form::text("year", null, ['class' => 'form-control', 'placeholder'=> 'Year ...', 'id'=>'Year']) !!}
                                 @if($errors->has('year'))
                                    <span class="text-danger"><strong>{{$errors->first('year')}}</strong></span>
                                @endif 
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