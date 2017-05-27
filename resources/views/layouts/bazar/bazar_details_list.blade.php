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
                <h3>Bazar Details List</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            @include('flash::message')
                            <tr>
                                <th>Id</th>
                                <th> Name</th>
                                <th> Menu</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bazar_details as $bazar_detail)
                            <tr>
                                <td>{{$bazar_detail->id}}</td>
                                <td>{{$bazar_detail->user_name->name}}</td>
                                <td>{{$bazar_detail->menu_name->menu_item}}</td>
                                <td>{{$bazar_detail->Amount}}</td>
                                <td>{{$bazar_detail->Date}}</td>
                                <td class="text-center">
                                    <div class="btn-group text-center"> 
                                        <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            Active<span class="caret ml5"></span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                            <li>
                                                {!!link_to('/bazar_details_add/'.$bazar_detail->id, 'Edit', ['class'=>"fa fa-edit"])!!}
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