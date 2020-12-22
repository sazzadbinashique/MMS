@extends('layouts.master.layout')

@section('title','Mela add')

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
                    <h4>Meal Add Form</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            @include('flash::message')

                            {!! Form::open(['method'=>'POST', 'action'=> 'MealsController@store','role'=>'form', 'class'=>'form-horizontal']) !!}
                            {{ Form::hidden('id') }}
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row after-add-more">
                                        <div class="form-inline ">
                                            <div class="col-sm-2">
                                                {!! Form::select('user_id[]', $users, null, ['placeholder' => 'Select Name','id'=>'user_id[]','class'=>'form-control', 'required']) !!}
                                            </div>
                                        </div>

                                        <div class="form-inline">
                                            <div class="col-sm-2">
                                                {!! Form::date("date[]", null, ['class' => 'form-control', 'id'=>'date[]', 'required'] ) !!}
                                            </div>
                                        </div>

                                        <div class="form-inline">
                                            <div class="col-sm-2">
                                                {!! Form::text("braekfast[]", null, ['class' => 'form-control', 'placeholder'=> 'Breakfast...', 'id'=>'braekfast[]', 'required']) !!}
                                            </div>
                                        </div>
                                        <div class="form-inline ">
                                            <div class="col-sm-2">
                                                {!! Form::text("lanch[]", null, ['class' => 'form-control', 'placeholder'=> 'Lanch...', 'id'=>'lanch[]', 'required']) !!}

                                            </div>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="input-group form-group control-group">
                                                {!! Form::text("dinner[]", null, ['class' => 'form-control', 'placeholder'=> ' Dinner...','id'=>'dinner[]', 'required']) !!}
                                                <div class="input-group-btn">
                                                    <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="copy hide">

                                        <div class="row remove-more">
                                            <div class="form-inline ">
                                                <div class="col-sm-2">
                                                    {!! Form::select('user_id[]', $users, null, ['placeholder' => 'Select Name','id'=>'user_id[]','class'=>'form-control']) !!}
                                                </div>
                                            </div>

                                            <div class="form-inline">
                                                <div class="col-sm-2">
                                                    {!! Form::date("date[]", null, ['class' => 'form-control', 'id'=>'date[]']) !!}
                                                </div>
                                            </div>

                                            <div class="form-inline">
                                                <div class="col-sm-2">
                                                    {!! Form::text("braekfast[]", null, ['class' => 'form-control', 'placeholder'=> 'Breakfast...', 'id'=>'braekfast[]']) !!}
                                                </div>
                                            </div>
                                            <div class="form-inline">
                                                <div class="col-sm-2">
                                                    {!! Form::text("lanch[]", null, ['class' => 'form-control', 'placeholder'=> 'Lanch...', 'id'=>'lanch[]']) !!}
                                                </div>
                                            </div>

                                            <div class="col-sm-2">
                                                <div class="input-group form-group control-group">
                                                    {!! Form::text("dinner[]", null, ['class' => 'form-control', 'placeholder'=> ' Dinner...','id'=>'dinner[]']) !!}
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-minus"></i> Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row" >
                                        <div class="col-lg-12 col-lg-push-9" style="padding-top: 5px;">
                                            <button class="btn btn-success">Submit </button>
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
        @section('add-more')
            <script type="text/javascript">
                $(document).ready(function () {

                    $(".add-more").click(function () {
                        var html = $(".copy").html();
                        $(".after-add-more").after(html);
                    });

                    $("body").on("click", ".remove", function () {
                        $(this).parents(".remove-more").remove();
                    });

                });

            </script>
@endsection