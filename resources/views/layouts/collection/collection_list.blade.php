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
                <h3>Collection List</h3> 
            </div>
<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            @include('flash::message')
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($collection_lists as $collection_list)
                <tr>
                    <td>{{$collection_list->id}}</td>
                    <td>{{$collection_list->user_name->name}}</td> 
                    <td>{{$collection_list->amount}}</td>
                    <td>{{$collection_list->date}}</td>
                    <!-- <td>500</td> -->
                    <td class="text-center">
                        <div class="btn-group text-center"> 
                            <button type="button" class="btn btn-success br2 btn-xs fs12 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                Active<span class="caret ml5"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                {!! link_to('/collection_add/'.$collection_list->id, 'Edit') !!}
                                    <!-- <a href="#">Edit</a> -->
                                </li> 
                            </ul>
                        </div>
                    </td>
                </tr>
                 @endforeach
                <!-- <tr>
                    <td>2</td>
                    <td>wwwwww</td>
                    <td>100</td>
                    <td>12-1-2017</td>
                    <td>500</td>
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
                    <td>100</td>
                    <td>12-1-2017</td>
                    <td>500</td>
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
                </tr> -->
            </tbody>
        </table>
    </div>
</div>
</div>
         <!-- End  Kitchen Sink -->
</div>

</div>
</div>
</div>
<!-- end page-wrapper -->
@stop