@extends('layouts.scaffold')
 
@section('main')
  {{ Form::open(array("class"=> "form-signin", "role"=> "form")) }}
  @if ($errors->has('login'))
    <div class="alert alert-error">{{ $errors->first('login', ':message') }}</div>
  @endif
  <h2 class="form-signin-heading">Please sign in</h2>

    {{ Form::label('email', 'Email') }}
    {{ Form::text('email',null, array("class"=> "form-control", "placeholder"=>"Email address", "required"=> true, "autofocus" => true)) }}
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password',  array("class"=> "form-control", "placeholder"=>"Your password", "required"=> true)) }}
    {{ Form::submit('Login', array('class' => 'btn btn-lg btn-primary btn-block')) }}
  {{ Form::close() }}
 
@stop