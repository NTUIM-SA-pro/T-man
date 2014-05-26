@extends('layout')

@section('content')
    {{ Form::open(array('url' => 'users')) }}
    	account{{ Form::text('account') }}
    	password{{ Form::text('password') }}
    	type{{ Form::text('type') }}
    	{{ Form::submit('Save') }}
	{{ Form::close() }}
@stop