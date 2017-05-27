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
                <h4>Bazar Details Add Form</h4>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        @include('flash::message')
                        {!! Form::model($bazar_detail, array('method'=>'POST', 'url' => '/bazar_details_add', 'role'=>"form")) !!}
                        {{ Form::hidden('id') }}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>  Name: </label>
                                       {!! Form::select('user_id', $user_names, null, ['placeholder' => 'Add Your Name','id'=>'user_id','class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label> Menu: </label>
                                       {!! Form::select('Menu_id', $menu_names, null, ['placeholder' => 'Add Your Name','id'=>'Menu_id','class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label> Date: </label>
                                        {!! Form::date("Date", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Date...', 'id'=>'Date', 'value'=> old('Date'),]) !!}
                                    </div> 
                                    <div class="form-group">
                                        <label> Amount: </label>
                                        {!! Form::text("Amount", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Amount...', 'id'=>'Amount', 'value'=> old('Amount'),]) !!}
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