@extends('admin.layouts.app')

@section('css')

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
<style>
    .sign-in-wrapper{
        padding-top: 1% !important;
    
    }
    .singn-admin-container{
        background: #fff;
        border-radius: 5px;
    
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
                                <h1 class="page-title">Edit User Account</h1>
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
                                
                            <div class="sign-in-wrapper">
                                <div class="singn-admin-container">
                                    <div class="sign-container">
                                    <div class="text-center">
                                        <h2 class="logo"><img src="{{ asset('/public/admin/imgs/logo-dark.png') }}" width="130px" alt=""/></h2>
                                    </div>
                                    
                                    <div class="text-center">
                                        @include('admin.partials.message')
                                    </div>
                                                
                                {!! Form::open(['class'=>'form', 'url'=>action('MyProfile@updatePassword')]) !!}
                                        
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            {!! Form::password('oldpass',['class'=>'form-control','placeholder'=>'Old Password','required']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            {!! Form::password('newpass', ['class'=>'form-control','placeholder'=>'New Password','required']) !!}
                                        </div>
                                        <div class="form-group">
                                            <label>Rr-type Password</label>
                                            {!! Form::password('repeatpass', ['class'=>'form-control','placeholder'=>'Re-type new password','required']) !!}
                                        </div>
                                     
                                       <button type="submit" class="btn btn-info btn-block">Update</button>
                                    {!! Form::close() !!}
                                  
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


@section('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
@endsection