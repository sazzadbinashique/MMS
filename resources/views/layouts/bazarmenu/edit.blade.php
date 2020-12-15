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
                            <h4>Menu Add Form</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                @include('flash::message')
                         {!! Form::model($bazar_menu, ['method'=>'PATCH', 'action'=>[ 'BazarMenusController@update',$bazar_menu->id],'role'=>'form']) !!}
                                {{ Form::hidden('id') }}
                                        <div class="form-group{{$errors->has('menu_item'? 'has-error': '')}} ">
                                            <label>Menu Name:</label>
                                             {!! Form::text("menu_item", null, ['class' => 'form-control', 'placeholder'=> 'menu_name...', 'id'=>'menu_item']) !!}
                                             @if($errors->has('menu_item'))
                                                <span class="text-danger"><strong>{{$errors->first('menu_item')}}</strong></span>
                                              @endif
                                        </div>   
                                        <div class="col-lg-6 col-lg-push-10">
                                            <button type="submit" class="btn btn-success">Update </button>
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