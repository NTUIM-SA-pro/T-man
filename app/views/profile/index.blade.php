@extends('user_main')
@section('right-container')
	@if(isset($message))
		<p>{{ $message }}</p>
	@endif
	<div class="profile_table">
		<table class="ui table segment" style="height:100%;width:100%;">
			
			<tr>
				<td><b>綽號</td>
				<td>{{ $data[0]->name }}</td>
			</tr>
			<tr>
				<td><b>性別</td>
				<td>
					@if($data[0]->sex == 1)
						<p>男生</p>
					@else
						<p>女生</p>
					@endif
				</td>
			</tr>
			<tr>
				<td><b>個人簡介</td>
				<td>
					@if($data[0]->introduction==1)
					@else
						{{ $data[0]->introduction }}
					@endif
				</td>
			</tr>
			<tr>
				<td><b>專長、技能</td>
				<td>
					@foreach($skill as $item)
						{{$item->name}}
					@endforeach
				</td>
			</tr>
		</table>
		<a href="/user/{{Auth::id()}}/profileModify">
			<div class="ui blue button" style="width:100%;">
				Modify
			</div>
		</a>
	</div>
@endsection