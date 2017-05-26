@extends('layouts.master.layout')

@section('title','')

@section('content')

<div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dasboard</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Meal List</h3> 
                        </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            @include('flash::message')
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Breakfast</th>
                                <th>Launch</th>
                                <th>Dinner</th>
                                <th>Date</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($meal_lists as $meal_list)
                            <tr>
                                <td>{{$meal_list->id}}</td>
                                <td>{{$meal_list->user_name->name}}</td>
                                <th>{{$meal_list->Braekfast}}</th>
                                <th>{{$meal_list->Lanch}}</th>
                                <th>{{$meal_list->Dinner}}</th>
                                <th>{{$meal_list->date}}</th>
                                <td class="text-center">
                                    <div class="btn-group text-center"> 
                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Active<span class="caret ml5"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                {!! link_to('/meal_add/'.$meal_list->id, 'Edit') !!}
                                                <!--<a href="#">Edit</a>-->
                                            </li> 
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@stop