@extends('layout')

@section('content')
    @foreach($works as $work)
        <p>work_id: {{ $work->id }}</p>
		<p>work_name: {{ $work->name }}</p>
		<p>work_descrip: {{ $work->description }}</p>
    @endforeach
@stop