@extends('admin.layouts.app')

@section('content')

            <!--main content start-->
            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">
                        
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title">Site Met Tag Settings</h1>
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
                                        Site Met Tag Settings
                                    </header>
                                    
                                    
                                    <div class="text-center">
                                        @include('admin.partials.message')
                                    </div>
                                    
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-actions table-responsive">
                                                <tbody><tr>
                                                        <td width="200">Title</td>
                                                        <td>Details</td>
                                                    </tr>
                                                
                                                </tbody>
                                                <tbody>
                                                        
                                                        <tr>
                                                            <td>Meta Author name</td>
                                                            <td>{{ $meta->author }}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Meta Keywords</td>
                                                            <td>{{ $meta->keywords }}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Meta Description</td>
                                                            <td>{{ $meta->description }}</td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Action</td>
                                                            <td>
                                                                <a href="{{ action('MetaSettingsController@edit',$meta->id) }}" class="btn btn-info btn-block">Edit</a>                
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
