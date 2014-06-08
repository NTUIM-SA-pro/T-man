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
					<td><b>Image</td>
					<td><input type="file" name="img"></td>
				</tr>
				<tr>
					<td><b>Name</td>
					<td><input type="text" name="name" value="{{ $data[0]->name }}"></td>
				</tr>
				<tr>
					<td><b>Sex</td>
					<td>
						<select name='sex' class='ui selection dropdown'>
							<option value="1">Male
							<option value="0">Female
						</select>
					</td>
				</tr>
				<tr>
					<td><b>Introduction</td>
					<td><textarea name="introduction" rows="3">{{ $data[0]->introduction }}</textarea></td>
				</tr>
				<tr>
					<td><b>New Skill</td>
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