@extends('layouts.default')

@section('content')
    @foreach($users as $user)
        <a class="ui green button">{{ $user->account }}</a>
    @endforeach
@stop