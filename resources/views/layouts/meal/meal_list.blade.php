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
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Breakfast</th>
                                <th>Launch</th>
                                <th>Dinner</th>
                                <th>Date</th>
                                <th>avg.</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>ssssdddd</td>
                                <th>.5</th>
                                <th>1</th>
                                <th>1</th>
                                <th>12-1-2017</th>
                                <th>avg.</th>
                                <td class="text-center">
                                    <div class="btn-group text-center"> 
                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Active<span class="caret ml5"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="#">Edit</a>
                                            </li> 
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>wwwwww</td>
                                <th>.5</th>
                                <th>1</th>
                                <th>1</th>
                                <th>12-1-2017</th>
                                <th>avg.</th>
                                <td class="text-center">
                                    <div class="btn-group text-center"> 
                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Active<span class="caret ml5"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="#">Edit</a>
                                            </li> 
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>dddqqqq</td>
                                <th>.5</th>
                                <th>1</th>
                                <th>1</th>
                                <th>12-1-2017</th>
                                <th>avg.</th>
                                <td class="text-center">
                                    <div class="btn-group text-center"> 
                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Active<span class="caret ml5"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                <a href="#">Edit</a>
                                            </li> 
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

@stop