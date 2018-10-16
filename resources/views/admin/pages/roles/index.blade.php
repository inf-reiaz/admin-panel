@extends('admin.layouts.app')

@section('content')

            <!--main content start-->
            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">
                        
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title"> All Roles</h1>
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
                                    <header class="panel-heading panel-border">
                                        Roles List
                                
                                        <span class="tools pull-right">
                                            <a href="{{ action('RolesController@create') }}" class="btn btn-sm btn-success" style="color:#fff;">Create New Role </a>
                                            <a class="close-box fa fa-times"></a>
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    
                                    
                                    <div class="text-center">
                                        @include('admin.partials.message')
                                    </div>
                                    
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table  table-hover general-table">
                                                <thead>
                                                <tr>
                                                    <th style="width: 12%;">Serial Number</th>
                                                    <th>Name</th>
                                                    <th>Permission</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($roles as $r)
                                                        <tr>
                                                            <td>{{ $r->id }}</td>
                                                            <td>{{ $r->name }}</td>
                                                            <td>
                                                                <a href="{{ action('UsersController@roleToPremissions',$r->id) }}" class="btn btn-sm btn-danger"> <i class="fa fa-adjust"></i> Permission</a>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('roles.show',$r->id) }}" class="btn btn-sm btn-default">View</a>
                                                                <a href="{{ action('RolesController@edit',$r->id) }}" class="btn btn-sm btn-success">Edit</a>
                                                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
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
