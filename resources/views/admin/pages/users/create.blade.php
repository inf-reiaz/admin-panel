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
                                <h1 class="page-title"> Create New  User</h1>
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
                                    
                                        {!! Form::open(['url'=>action('UsersController@store'), 'method'=>'post', 'enctype'=> 'multipart/form-data']) !!}
                    
                        
                                        <div class="box">
                                            <div class="box-body text-center">
                                                <div class="form-group {{ $errors->has('user_image_input') ? 'has-error' : '' }}">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                      <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img src="http://placehold.it/200x150&text=No+Image" alt="...">
                                                      </div>
                                                      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                      <div>
                                                        <span class="btn btn-default btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            {!! Form::file('user_image_input') !!}
                                                        </span>
                                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                      </div>
                                                    </div>
                        
                                                    @if($errors->has('product_photo_input'))
                                                        <span class="help-block">{{ $errors->first('product_photo_input') }}</span>
                                                    @endif
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            {!! Form::text('first_name', old('first_name'), ['class'=>'form-control','placeholder'=>'First Name','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            {!! Form::text('last_name', old('last_name'), ['class'=>'form-control','placeholder'=>'Last Name','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            {!! Form::text('username', old('username'), ['class'=>'form-control','placeholder'=>'User Name','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            {!! Form::text('email', old('email'), ['class'=>'form-control','placeholder'=>'Email','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            {!! Form::password('password', ['class'=>'form-control','placeholder' => 'Password','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            {!! Form::number('phone_number', old('phone_number'), ['class'=>'form-control','placeholder'=>'Phone Number','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            {!! Form::select('roles', App\Role::pluck('name', 'id'),null, ['class' => 'form-control mb-10', 'placeholder' => 'Choose a role']) !!}
                                        </div>
                                        
                                        
                                        <div class="form-group text-center">
                                            <label class="i-checks">
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <i></i>
                                            </label>
                                              Agree the Our policy
                                        </div>
                                        <button type="submit" class="btn btn-info btn-block">Create User</button>
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