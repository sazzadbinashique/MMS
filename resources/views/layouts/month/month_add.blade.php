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
                          {!! Form::model($month , array('method'=>'POST', 'url' => '/month_add', 'role'=>"form")) !!}
                          {{ Form::hidden('id') }}
                            <div class="form-group">
                                <label>Month Name:</label>
                                {!! Form::text("Month", null, ['class' => 'form-control', 'placeholder'=> 'Month Name...', 'id'=>'Month', 'value'=> old('Month'),]) !!}
                            </div>
                            <div class="form-group">
                                <label>Year</label>
                                 {!! Form::text("Year", null, ['class' => 'form-control', 'placeholder'=> 'Year ...', 'id'=>'Year', 'value'=> old('Year'),]) !!}
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