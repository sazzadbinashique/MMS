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
                        {!! Form::model( array('method'=>'POST', 'url' => '/additional_add', 'role'=>"form")) !!}
                        {{ Form::hidden('id') }}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label> Item Name: </label>
<!--                                        <select class="form-control">
                    	                    <option selected="selected" value="">--- Add Name---</option>
                                            <option>Ssdsdfsdf</option>
                                            <option>sdfdd ddd </option>
                                            <option>Shovsdson vai </option>
                                            <option>Empsdfs_Name</option>
                                            <option>Emp_dfName</option>
                                        </select>-->
                                        {!! Form::select('extra_item_id', $extra_item_names, null, ['placeholder' => 'Add Your Name','id'=>'extra_item_id','class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label> Date: </label>
                                        <input class="form-control" type="date" name="department_name">
                                    </div> 
                                    <div class="form-group">
                                        <label> Amount: </label>
                                        <input class="form-control" type="text" name="department_name">
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