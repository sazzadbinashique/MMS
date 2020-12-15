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
                            {!! Form::model( $bazar_detail,['method'=>'PATCH', 'action'=> ['BazarDetailsController@update', $bazar_detail->id],'role'=>'form']) !!}
                            {{ Form::hidden('id') }}
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>  Name: </label>
                                        {!! Form::select('user_id', $users, null, ['placeholder' => 'Add Your Name','id'=>'user_id','class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label> Menu: </label>
                                        {!! Form::select('bazar_menu_id', $bazar_menus, null, ['placeholder' => 'Add Your Name','id'=>'bazar_menu_id','class'=>'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label> Date: </label>
                                        {!! Form::date("date", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Date...', 'id'=>'date']) !!}
                                    </div>
                                    <div class="form-group">
                                        <label> Amount: </label>
                                        {!! Form::text("amount", null, ['class' => 'form-control', 'placeholder'=> 'Enter your Amount...', 'id'=>'amount']) !!}
                                    </div>
                                    <div class="col-lg-12 col-lg-push-10">
                                        <button type="submit" class="btn btn-primary">Submit </button>
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