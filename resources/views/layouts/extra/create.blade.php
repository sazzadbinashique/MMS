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
                         {!! Form::open(['method'=>'POST', 'action'=> 'ExtraItemsController@store','role'=>'form']) !!}
                        {{ Form::hidden('id') }}
                        <div class="form-group{{$errors->has('extra_item')? 'has-error': ''}}">
                            <label>Extra Item Name:</label>
                            {!! Form::text("extra_item", null, ['class' => 'form-control', 'placeholder'=> 'menu_name...', 'id'=>'extra_item']) !!}
                            @if($errors->has('extra_item'))
                                    <span class="text-danger"><strong>{{$errors->first('extra_item')}}</strong></span>
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