@extends('admin.layouts.app')

@section('content')

            <!--main content start-->
            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">
                        
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title">Subscriber</h1>
                            </div>
                            <div class="col-md-4">
                                <ul class="breadcrumb pull-right">
                                    <li>Home</li>
                                    <li><a href="#" class="active">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>
                        

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form class=" row order-srch-form" role="form">
                                                    <div class="form-group col-md-3">
                                                        <label class="sr-only">subscriber emial</label>
                                                        <input class="form-control" placeholder="User Name" type="text">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <div class='input-group date' id='datetimepicker1'>
                                                            {!! Form::text('published_at', null, ['class' => 'form-control', 'placeholder' => 'Y-m-d']) !!}
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <div class='input-group date' id='datetimepicker2'>
                                                            {!! Form::text('published_at', null, ['class' => 'form-control', 'placeholder' => 'Y-m-d']) !!}
                                                            <span class="input-group-addon">
                                                                <span class="glyphicon glyphicon-calendar"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-3">
                                                        <button type="submit" class="btn btn-info btn-block">Find subscriber</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="panel">
                                    <header class="panel-heading panel-border">
                                        Subscriber List
                                
                                        <span class="tools pull-right">
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table  table-hover general-table">
                                                <thead>
                                                <tr>
                                                    <th>Serial Number</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>reiazbubr@gmail.com</td>
                                                    <td>
                                                        
                                                            <span class="tag label label-info">admin</span>
                                                        
                                                    </td>
                                                    <td><span class="label label-info label-warning">Pending</span></td>
                                                    <td>
                                                        <a href="" class="btn btn-sm btn-default">View</a>
                                                        <a href="#" class="btn btn-sm btn-success">Edit</a>
                                                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>


                    </div>

                </div>
            </div>
            <!--main content end-->
@endsection
