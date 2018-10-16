
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration</title>
        <link rel="stylesheet" href="{{ asset('/public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/admin/bower_components/simple-line-icons/css/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/admin/bower_components/weather-icons/css/weather-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/admin/bower_components/themify-icons/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('/public/admin/dist/css/main.css') }}">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
        <script src="{{ asset('/public/admin/assets/js/modernizr-custom.js') }}"></script>
    </head>
    <body>

        <div class="sign-in-wrapper">
            <div class="sign-container">
                <div class="text-center">
                    <h2 class="logo"><img src="{{ asset('/public/admin/imgs/logo-dark.png') }}" width="130px" alt=""/></h2>
                    <h4>Register to Admin</h4>
                </div>
                
                <div class="text-center">
                </div>
                
                    {!! Form::open(['url'=>action('AccessController@postSignup'), 'method'=>'post', 'enctype'=> 'multipart/form-data']) !!}

    
                    <div class="box">
                        <div class="box-body text-center">
                            <div class="form-group {{ $errors->has('user_image_input') ? 'has-error' : '' }}">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                  <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="http://placehold.it/200x150&text=No+Image}" alt="...">
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
    
                                @if($errors->has('user_image_input'))
                                    <span class="help-block">{{ $errors->first('user_image_input') }}</span>
                                @endif
                            </div>
                            
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        {!! Form::text('firstname', old('firstname'), ['class'=>'form-control','placeholder'=>'First Name','required']) !!}

                        @if($errors->has('firstname'))
                            <span class="help-block">{{ $errors->first('firstname') }}</span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        {!! Form::text('lastname', old('lastname'), ['class'=>'form-control','placeholder'=>'Last Name','required']) !!}
                        @if($errors->has('lastname'))
                            <span class="help-block">{{ $errors->first('lastname') }}</span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        {!! Form::text('username', old('username'), ['class'=>'form-control','placeholder'=>'User Name','required']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::text('email', old('email'), ['class'=>'form-control','placeholder'=>'Email','required']) !!}
                        @if($errors->has('email'))
                            <span class="help-block">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        {!! Form::password('password', ['class'=>'form-control','placeholder' => 'Password','required']) !!}
                        @if($errors->has('password'))
                            <span class="help-block">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        {!! Form::number('contact', old('contact'), ['class'=>'form-control','placeholder'=>'Contact Number','required']) !!}
                        @if($errors->has('contact'))
                            <span class="help-block">{{ $errors->first('contact') }}</span>
                        @endif
                    </div>
                    
                    
                    <div class="form-group text-center">
                        <label class="i-checks">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <i></i>
                        </label>
                          Agree the Our policy
                    </div>
                    <button type="submit" class="btn btn-info btn-block">Register</button>
                    <p class="text-muted text-center help-block"><small>Already have an account?</small></p>
                    <a class="btn btn-md btn-default btn-block" href="{{ action('AccessController@login') }}">Login</a>
                {!! Form::close() !!}
                <div class="text-center copyright-txt">
                    <small>MegaDin - Copyright © 2017</small>
                </div>
            </div>
        </div>
        
        <script src="{{ asset('/public/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('/public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/public/admin/bower_components/jquery.nicescroll/dist/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('/public/admin/bower_components/autosize/dist/autosize.min.js') }}"></script>
        <script src="{{ asset('/public/admin/dist/js/main.js') }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
    </body>
</html>
