@extends('admin.layouts.app')

@section('content')

            <!--main content start-->
            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">
                        
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title"> All Permission</h1>
                            </div>
                            <div class="col-md-4">
                                <ul class="breadcrumb pull-right">
                                    <li>Home</li>
                                    <li><a href="#" class="active">Dashboard</a></li>
                                </ul>
                            </div>
                        </div>
                                                    
                            <div class="col-md-12">
                                
                                
                                
                                <div class="panel">
                                    <header class="panel-heading">
                                         Permission
                                        <span class="tools pull-right">
                                            <a class="close-box fa fa-times" href="javascript:;"></a>
                                        </span>
                                    </header>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-bordered table-striped table-actions">
                                                    <tbody>
                                                        
                                                        <tr>
                                                            <td width="200">Id</td>
                                                            <td>Name</td>
                                                        </tr>
                                                    
                                                    </tbody>
                                                    <tbody>
                                                            <tr>
                                                                <td>{{ $permission->id }}</td>
                                                                <td>{{ $permission->name }}</td>
                                                            </tr>
                                                                
                                                            <tr>
                                                                <td>
                                                                    <a href="{{ action('PermissionController@edit',$permission->id) }}" class="btn btn-info btn-sm">edit</a>                
                                                                </td>
                                                                <td>
                                                                    <form >
                                                                        <button class=" btn btn-primary btn-sm "> <i class="fa fa-trash-o"></i> Delete </button>
                                                                    </form>
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
