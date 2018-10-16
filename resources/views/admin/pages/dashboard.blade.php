@extends('admin.layouts.app')

@section('content')
            <!--main content start-->
            <div id="content" class="ui-content ui-content-aside-overlay">
                <div class="ui-content-body">
                    <div class="ui-container">

                        <div class="row">
                            
                            <div class="col-md-8">
                                <h1 class="page-title"> Admin Dashboard
                                </h1>
                            </div>
                            
                            <div class="col-md-4">
                                <ul class="breadcrumb pull-right">
                                    <li>Home</li>
                                    <li><a href="#" class="active">Dashboard</a></li>
                                </ul>
                            </div>
                            
                        </div>
                        
                        <!--states start-->
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states bg-info">
                                    <div class="pull-right state-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="light-txt">{{ $user }}</h1>
                                        <!--<div class=" pull-right">65% <i class="fa fa-level-up"></i></div>-->
                                        <strong class="text-uppercase">Totla users</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states bg-danger">
                                    <div class="pull-right state-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="light-txt">{{ $role }}</h1>
                                        <strong class="text-uppercase">Totla Admin</strong>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states bg-warning">
                                    <div class="pull-right state-icon">
                                        <i class="fa fa-users"></i>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="light-txt">{{ $subscriber }}</h1>
                                        <strong class="text-uppercase">Totla Subscriber</strong>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-3 col-sm-6">
                                <div class="panel short-states bg-primary">
                                    <div class="pull-right state-icon">
                                        <i class="fa fa-pie-chart"></i>
                                    </div>
                                    <div class="panel-body">
                                        <h1 class="light-txt">$268,188</h1>
                                        <div class=" pull-right">88% <i class="fa fa-level-up"></i></div>
                                        <strong class="text-uppercase">Total Profit</strong>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                    </div>


                </div>
            </div>
    
@endsection
