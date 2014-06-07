@extends('layouts.default')
@section('content')
	<table class="ui table segment" style="width:30%;">
		<tr>
			<td><img src="{{ $data[0]->img }}"></td>
		</tr>	
		<tr>
			<td><b>Name</td>
			<td>{{ $data[0]->name }}</td>
		</tr>
		<tr>
			<td><b>Sex</td>
			<td>
				@if($data[0]->sex == 0)
					<p>Female</p>
				@else
					<p>Male</p>
				@endif
			</td>
		</tr>
		<tr>
			<td><b>Introduction</td>
			<td>{{ $data[0]->introduction }}</td>
		</tr>
		<tr>
			<td><b>Skill</td>
			<td>
				@foreach($skill as $item)
					{{$item->name}}
				@endforeach
			</td>
		</tr>
	</table>
	<a href="profileModify">
		<div class="ui animated blue button">
			<div class="visible content">Modify</div>
			<div class="hidden content">
	    		<i class="right arrow icon"></i>
	  		</div>
		</div>
	</a>
@endsection