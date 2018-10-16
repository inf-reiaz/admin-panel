@extends('admin.layouts.app')


@section('css')
<style>
    .text-center {
        max-width: 500px;
        display: block;
        margin: 10px auto;
    }
</style>
@endsection

@section('content')

            <!--main content start-->
            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">
                        
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title"> All User</h1>
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
                                                        <label class="sr-only">User Name</label>
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
                                                        <button type="submit" class="btn btn-info btn-block">Find User</button>
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
                                        User List
                                        <span class="tools pull-right">
                                            <a href="" class="btn btn-sm btn-success" style="color:#fff;">Create User </a>
                                            <a class="close-box fa fa-times"></a>
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
                                                    <th>Serial Number</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($users as $u)
                                                <tr>
                                                    <td>{{ $u->id }}</td>
                                                    <td>{{ $u->email }}</td>
                                                    <td>
                                                        <span class="tag label label-info">@if($u->roles){{$u->roles->name}} @endif</span>
                                                    </td>
                                                    <td>
                                                        @if($u->active == 1)
                                                            <a href="{{ route('blockusers',$u->id) }}"><span class="label label-info label-success">Active</span></a>
                                                        @else
                                                            <a href="{{ route('blockusers',$u->id) }}"><span class="label label-info label-warning">Pending</span></a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['dashboard',1]]) !!}
                                                            <a href="{{ action('MyProfile@getProfile',$u->id) }}" class="btn btn-sm btn-default">View</a>
                                                            <a href="" class="btn btn-sm btn-success">Edit</a>
                                                            <button type="submit" onclick="return confirm('You are about to delete a post permanently. Are you sure?')"  class="btn btn-sm btn-danger">
                                                                Delete
                                                            </button>
                                                        {!! Form::close() !!}
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
