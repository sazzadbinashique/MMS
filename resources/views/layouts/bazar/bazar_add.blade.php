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
                <h4>Bazar Add Form</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        @include('flash::message')
                        {!! Form::model($bazar, array('method'=>'POST', 'url' => '/bazar_add', 'role'=>"form")) !!}
                        {{ Form::hidden('id') }}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label> Item Name: </label>
                                        {!! Form::select('user_id', $user_names, null, ['placeholder' => 'Add Your Name','id'=>'user_id','class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label> Month Name: </label>
                                         {!! Form::select('Month_id', $month_names, null, ['placeholder' => 'Add Your Name','id'=>'Month_id','class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label> Expected Date: </label>
                                        {!! Form::date("Expected_date", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Date...', 'id'=>'Expected_date', 'value'=> old('Expected_date'),]) !!}
                                    </div> 
                                    <div class="col-lg-12 col-lg-push-8">
                                        <button type="submit" class="btn btn-primary">Submit </button>
                                        <button type="reset" class="btn btn-success">Reset </button>
                                    </div>
                                </div>                          
                            </div>     
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>

@stop