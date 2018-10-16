@extends('admin.layouts.app')

@section('css')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
@endsection

@section('content')

            <div id="content" class="ui-content">
                <div class="ui-content-body">

                    <div class="ui-container">
                        
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="page-title">Site Settings</h1>
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
                                        Site Settings
                                    </header>
                                    
                                    <div class="panel-body">
                                                                                
                                        <section class="col-sm-12">
                                        
                                                  
                                        {!! Form::model($settings, [
                                            'method' => 'PUT',
                                            'action'  => ['SettingsController@update',$settings->id],
                                            'files'  => TRUE
                                        ]) !!}
                                        
                                                            
                                                <div class="box">
                                                    <div class="box-body text-center">
                                                        <div class="form-group {{ $errors->has('logo_input') ? 'has-error' : '' }}">
                                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                              <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                                <img src="{{ $settings->logo }}" alt="...">
                                                              </div>
                                                              <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                              <div>
                                                                <span class="btn btn-default btn-file">
                                                                    <span class="fileinput-new">Select image</span>
                                                                    <span class="fileinput-exists">Change</span>
                                                                    {!! Form::file('logo_input') !!}
                                                                </span>
                                                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                              </div>
                                                            </div>
                                
                                                            @if($errors->has('logo_input'))
                                                                <span class="help-block">{{ $errors->first('logo_input') }}</span>
                                                            @endif
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            
                                                    <div class="form-group {{ $errors->has('app_name') ? 'has-error' : '' }}">
                                                        {!! Form::label('app_name', 'Application name: ') !!}
                                                        {!! Form::text('app_name', $settings->app_name , ['class'=>'form-control']) !!}
                            
                                                        @if($errors->has('app_name'))
                                                            <span class="help-block">{{ $errors->first('app_name') }}</span>
                                                        @endif
                                                    </div>
                                                        
                                                    <div class="form-group {{ $errors->has('app_author') ? 'has-error' : '' }}">
                                                        {!! Form::label('app_author', 'Application slogan: ') !!}
                                                        {!! Form::text('app_author', $settings->app_author , ['class'=>'form-control']) !!}
                                                        
                                                        @if($errors->has('app_author'))
                                                            <span class="help-block">{{ $errors->first('app_author') }}</span>
                                                        @endif
                                                    </div>
                                                        
                                                    <div class="form-group {{ $errors->has('app_type') ? 'has-error' : '' }}">
                                                        {!! Form::label('app_type', 'Business name: ') !!}
                                                        {!! Form::text('app_type', $settings->app_type , ['class'=>'form-control']) !!}
                                                        @if($errors->has('app_type'))
                                                            <span class="help-block">{{ $errors->first('app_type') }}</span>
                                                        @endif
                                                    </div>
                                                        
                                                    <div class="form-group {{ $errors->has('app_vishon') ? 'has-error' : '' }}">
                                                        {!! Form::label('app_vishon', 'Application Vishon: ') !!}
                                                        {!! Form::text('app_vishon', $settings->app_vishon , ['class'=>'form-control']) !!}
                                                        @if($errors->has('app_vishon'))
                                                            <span class="help-block">{{ $errors->first('app_vishon') }}</span>
                                                        @endif
                                                    </div>
                                                        
                                                    <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                                                        {!! Form::label('address', 'Address: ') !!}
                                                        {!! Form::text('address', $settings->address , ['class'=>'form-control']) !!}
                                                        @if($errors->has('address'))
                                                            <span class="help-block">{{ $errors->first('address') }}</span>
                                                        @endif
                                                    </div>
                                                        
                                                    <div class="form-group  {{ $errors->has('postcode') ? 'has-error' : '' }}">
                                                        {!! Form::label('postcode', 'Postcode: ') !!}
                                                        {!! Form::text('postcode', $settings->postcode , ['class'=>'form-control']) !!}
                                                        @if($errors->has('postcode'))
                                                            <span class="help-block">{{ $errors->first('postcode') }}</span>
                                                        @endif
                                                    </div>
                                                        
                                                    <div class="form-group  {{ $errors->has('postcode') ? 'has-error' : '' }}">
                                                        {!! Form::label('city', 'City: ') !!}
                                                        {!! Form::text('city', $settings->city , ['class'=>'form-control']) !!}
                                                        @if($errors->has('city'))
                                                            <span class="help-block">{{ $errors->first('city') }}</span>
                                                        @endif
                                                    </div>
                                                        
                                                    <div class="form-group  {{ $errors->has('country') ? 'has-error' : '' }}">
                                                        {!! Form::label('country', 'Country: ') !!}
                                                        {!! Form::text('country', $settings->country, ['class'=>'form-control']) !!}
                                                        @if($errors->has('country'))
                                                            <span class="help-block">{{ $errors->first('country') }}</span>
                                                        @endif
                                                    </div>
                                                        
                                                    <div class="form-group  {{ $errors->has('contact') ? 'has-error' : '' }}">
                                                        {!! Form::label('contact', 'Contact Number: ') !!}
                                                        {!! Form::text('contact', $settings->contact , ['class'=>'form-control']) !!}
                                                        @if($errors->has('contact'))
                                                            <span class="help-block">{{ $errors->first('contact') }}</span>
                                                        @endif
                                                    </div>
                                                        
                                                    <div class="form-group  {{ $errors->has('mail') ? 'has-error' : '' }}">
                                                        {!! Form::label('mail', 'E-mail: ') !!}
                                                        {!! Form::text('mail', $settings->mail, ['class'=>'form-control']) !!}
                                                        @if($errors->has('mail'))
                                                            <span class="help-block">{{ $errors->first('mail') }}</span>
                                                        @endif
                                                    </div>
                                                    
                                                            
                                                <div class="form-group">
                                                    {!! Form::submit('Update Setting', ['class'=>'form-control btn btn-info']) !!}
                                                </div>
                                        
                                        {!! Form::close() !!}
                                        
                                        
                                        </section>

                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>


                    </div>

                </div>
            </div>
            
@endsection

@section('js')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
@endsection