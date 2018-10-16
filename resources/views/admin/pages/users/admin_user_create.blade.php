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
                                                
                                    {!! Form::open(['url'=>action('UsersController@storeuser'), 'method'=>'post', 'enctype'=> 'multipart/form-data']) !!}
                    
                            
                                        <div class="box">
                                            <div class="box-body text-center">
                                                <div class="form-group {{ $errors->has('user_image_input') ? 'has-error' : '' }}">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                      <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img src="http://placehold.it/200x150&text=No+Image" alt="Uplode User Image">
                                                      </div>
                                                      <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                      <div>
                                                        <span class="btn btn-default btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            {!! Form::file('user_photo_input') !!}
                                                        </span>
                                                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                      </div>
                                                    </div>
                        
                                                    @if($errors->has('user_photo_input'))
                                                        <span class="help-block">{{ $errors->first('user_photo_input') }}</span>
                                                    @endif
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label>First Name</label>
                                            {!! Form::text('firstname', old('firstname'), ['class'=>'form-control','placeholder'=>'First Name','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            {!! Form::text('lastname', old('lastname'), ['class'=>'form-control','placeholder'=>'Last Name','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Username</label>
                                            {!! Form::text('username', old('username'), ['class'=>'form-control','placeholder'=>'User Name','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>User Email</label>
                                            {!! Form::text('email', old('email'), ['class'=>'form-control','placeholder'=>'Email','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Country Name</label>
                                            {!! Form::select('country_id', \App\Country::pluck('name'),null, ['class'=>'form-control','placeholder'=>'Country Name','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>City Name</label>
                                            {!! Form::select('city_id', \App\City::pluck('name'),null, ['class'=>'form-control','placeholder'=>'City Name','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Post Code</label>
                                            {!! Form::text('postcode', old('postcode'), ['class'=>'form-control','placeholder'=>'Postcode','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Corrent Address</label>
                                            {!! Form::textarea('address', old('address'), ['class'=>'form-control','placeholder'=>'Address','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Pareanent Address</label>
                                            {!! Form::textarea('parmanent_address', old('parmanent_address'), ['class'=>'form-control','placeholder'=>'Parmanent Address','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Contact number</label>
                                            {!! Form::number('contact', old('contact'), ['class'=>'form-control','placeholder'=>'Phone Number','required']) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>About You</label>
                                            {!! Form::textarea('about_me', old('about_me'), ['class'=>'form-control','placeholder'=>'Say Something about your self','required']) !!}
                                        </div>
                                        
                                        
                                        <div class="form-group text-center">
                                            <label class="i-checks">
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <i></i>
                                            </label>
                                              I Agree.
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