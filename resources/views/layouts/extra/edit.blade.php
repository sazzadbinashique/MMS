@extends('layouts.master.layout')

@section('title','Etra Item')

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
                <h4>Extra Item Add Form</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        @include('flash::message')
                         {!! Form::model($extraitem,['method'=>'PATCH', 'action'=> ['ExtraItemsController@update', $extraitem->id],'role'=>'form']) !!}
                        {{ Form::hidden('id') }}
                        <div class="form-group">
                            <label>Extra Item Name:</label>
                            {!! Form::text("extra_item", null, ['class' => 'form-control', 'placeholder'=> 'menu_name...', 'id'=>'extra_item']) !!}  
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