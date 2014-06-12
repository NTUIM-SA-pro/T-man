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
									<p>{{$work->work_description}}</p>
								</div>
								<div class="task-choose">
									
								</div>
							</div>
						</div>
						<div class="field">
							<img class="head-profile" src="/{{$work->img}}"/>
						</div>
						<div class="field">
							<div class="task_host">發案人:{{$work->username}}</div>
						</div>
						<div class="field">
							<div class="task_host">獎賞:{{$work->reward}}</div>
						</div>
				
						<div class="field" style="margin-top:10px;">
							
						</div>
					</div>
				</div>
				@if($i%3==2)
					</div></div>
				@endif
				<?php $i++ ?>

			
		@endforeach
	</div>
@stop