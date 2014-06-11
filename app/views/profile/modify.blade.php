@extends('user_main')
@section('right-container')
	<?php $count = false; ?>
	<script type="text/javascript">
	$('.ui.selection.dropdown').dropdown();
	</script>
	<div class="profile_table">
		{{ Form::open(array('url' => '/user/'.Auth::id(), 'method' => 'put', 'files' => true)) }}
			<table class="ui table segment" style="height:100%;width:100%;">
				<tr>
					<td><b>大頭照</td>
					<td><input type="file" name="img"></td>
				</tr>
				<tr>
					<td><b>綽號</td>
					<td><input type="text" name="name" value="{{ $data[0]->pname }}"></td>
				</tr>
				<tr>
					<td><b>性別</td>
					<td>
						{{ Form::select('sex', array(
        					'0'     => '男性',
        					'1'     => '女性',
        					'2'     => '不明'
    					), $data[0]->sex, array('class' => 'ui selection dropdown')) }}
					</td>
				</tr>
				<tr>
					<td><b>個人簡介</td>
					<td><textarea name="introduction" rows="3">{{ $data[0]->introduction }}</textarea></td>
				</tr>
				<tr>
					<td><b>專長、技能</td>
					<td>
						<select name="skill">
						@foreach($skill as $item)
							<option value="{{ $item->sid }}">{{ $item->sname }}</option>
						@endforeach
						</select>
					</td>
				</tr>
			</table>
			<input class="ui blue button" style="width:100%;" type="submit" value="確定">
		{{ Form::close() }}
	</div>
@stop
