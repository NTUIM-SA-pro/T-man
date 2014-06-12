@extends('user_main')
<!-- 發的專案 -->
@section('right-container')
	<div class="ui segment main">
	@if(Auth::id()===$user->profiles_uid)
		<h2 class="ui left floated header">我接的案</h2>
	@else
		<h2 class="ui left floated header">{{$user->pname}}接的案</h2>
	@endif
	<div class="ui clearing divider"></div>
		<?php $i=0 ?>
		@foreach($works as $work)
		@if( $work->profiles_uid === Auth::id() && $work->status === 4 )
			@if($i%3==0)
				<div class = "row">
				<div class="three column stackable ui grid">
			@endif 
			
				<div class="column">
					<div class="ui segment">
						<div class="ui dimmer">
							<div class="content">
								<div class="task-desc">
									<h3>敘述：</h3>
									<p>{{$work->works_description}}</p>
								</div>
								<div class="task-choose">
									
								</div>
							</div>
						</div>
						<div class="ui purple ribbon label" style="margin-bottom:5px;"> {{$work->duetime}}</div>
						<div class="field">
							<img class="head-profile" src="/{{$work->works_img}}"/>
						</div>
						<div class="field">
							<div class="task_host">任務名稱:{{$work->wname}}</div>
						</div>
						<div class="field">
							@foreach( $works as $work_owner )
							@if( $work_owner->wid === $work->wid && $work_owner->status === 2 )
								<div class="task_host">發案人:{{$work_owner->pname}}</div>
							@endif
							@endforeach
						</div>
						<div class="field">
							<div class="task_host">獎賞:{{$work->reward}}</div>
						</div>
				
						<div class="field" style="margin-top:10px;">
							@foreach($work_skills as $work_skill)
							@if( $work_skill->wid === $work->wid )
								<div class="task-date">{{$work_skill->sname}}</div>
							@endif
							@endforeach
						</div>
					</div>
				</div>
				@if($i%3==2)
					</div></div>
				@endif
				<?php $i++ ?>

		@endif	
		@endforeach
	</div>
@stop