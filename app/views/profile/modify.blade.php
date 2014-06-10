@extends('user_main')
@section('right-container')
	<?php $count = false; ?>
	<script type="text/javascript">
	$('.ui.selection.dropdown').dropdown();
	</script>
	<div class="profile_table">
		<form method="POST" action="profileUpdate" enctype="multipart/form-data">
			<table class="ui table segment" style="height:100%;width:100%;">
				<tr>
					<td><b>大頭照</td>
					<td><input type="file" name="img"></td>
				</tr>
				<tr>
					<td><b>綽號</td>
					<td><input type="text" name="name" value="{{ $data[0]->name }}"></td>
				</tr>
				<tr>
					<td><b>性別</td>
					<td>
						<select name='sex' class='ui selection dropdown'>
							<option value="1">男性
							<option value="0">女性
						</select>
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
							<option value="{{ $item->id }}">{{ $item->name }}</option>
						@endforeach
						</select>
					</td>
				</tr>
			</table>
			<input class="ui blue button" style="width:100%;" type="submit" value="submit">
		</form>
	</div>
@stop
