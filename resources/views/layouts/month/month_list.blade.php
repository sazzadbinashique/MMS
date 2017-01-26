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
                            <h4>Month Add Form</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Month Name:</label>
                                            <input class="form-control" type="text" name="department_name">
                                        </div>
                                        <div class="form-group">
                                            <label>Year</label>
                                            <input class="form-control" type="number" name="department_name">
                                        </div>    
                                        <div class="col-lg-6 col-lg-push-8">
                                            <button type="submit" class="btn btn-primary">Submit </button>
                                            <button type="reset" class="btn btn-success">Reset </button>
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