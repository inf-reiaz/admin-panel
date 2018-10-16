
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
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
                    <h4>Reset Your Password</h4>
                </div>
                
                <div class="text-center">
                    @include('admin.partials.message')
                </div>
                
                    {!! Form::open(['url'=>action('LoginController@postSignup'), 'method'=>'post', 'enctype'=> 'multipart/form-data']) !!}

                    
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        {!! Form::password('password', ['class'=>'form-control','placeholder' => 'Password','required']) !!}
                    </div>
                    
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        {!! Form::password('password_confirmation', ['class'=>'form-control','placeholder' => 'password confirmation','required']) !!}
                    </div>


                    <button type="submit" class="btn btn-info btn-block"> Reset Password</button>
                    <a href="{{ route('signup') }}"><p title="Registation Please" class="text-muted text-center help-block"><small>Are You New User ?</small></p></a>
                    
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
