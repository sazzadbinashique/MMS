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
                            <h4>Meal Add Form</h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                       <div class="row">
                                            <div class="col-lg-6">
                                            <div class="form-group">
                                            <label>Name: </label>
                                            <select class="form-control">
                                            <option selected="selected" value="">--- Add Name---</option>
                                                <option>Sazzad Bin Ashique</option>
                                                <option>Saif vai </option>
                                                <option>Shovon vai </option>
                                                <option>Emp_Name</option>
                                                <option>Emp_Name</option>
                                            </select>
                                            </div>

                                            <div class="form-group">
                                                <label> Date: </label>
                                                <input class="form-control" type="date" name="department_name">
                                            </div>

                                            <div class="form-group">
                                                <label> Breakfast: </label>
                                                <input class="form-control" type="text" name="department_name">
                                            </div>
                                            <div class="form-group">
                                                <label> Launch: </label>
                                                <input class="form-control" type="text" name="department_name">
                                            </div>
                                            <div class="form-group">
                                                <label> Dinner: </label>
                                                <input class="form-control" type="text" name="department_name">
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