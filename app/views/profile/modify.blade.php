@extends('user_main')
@section('right-container')
	<?php $count = false; ?>
	<script type="text/javascript">
	$('.ui.selection.dropdown').dropdown();
	</script>
	<div class="profile_table">

		{{ Form::open(array('url' => '/profile/'.Auth::id(), 'method' => 'put', 'files' => true)) }}

	<div class="ui segment main">
		<h2 class="ui left floated header">修改資料</h2>
	<div class="ui clearing divider"></div>
			<table class="ui table segment" style="height:100%;width:100%;">
				<tr>
					<td><b>大頭照</b></td>
					<td><input type="file" name="img"></td>
				</tr>
				<tr>

					<td><b>綽號</b></td>

					<td><input type="text" name="name" value="{{ $data[0]->pname }}"></td>
				</tr>
				<tr>
					<td><b>性別</b></td>
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
						@foreach ($skills as $skill)
						<?php $skill_own = false; ?>
							<!-- 檢查是否擁有技能 -->
							@foreach( $user_skills as  $user_skill)
							@if( $user_skill->user_skills_uid === Auth::id() && $user_skill->user_skills_sid === $skill->sid )
							<?php $skill_own = true; ?>
							@endif
							@endforeach
						{{ Form::checkbox('user_skill[]', $skill->sid, $skill_own) }}{{$skill->sname}}
						@endforeach
					</td>
				</tr>
			</table>
			<input class="ui blue button" style="width:100%;" type="submit" value="確定">
		{{ Form::close() }}

	</div>
@stop
