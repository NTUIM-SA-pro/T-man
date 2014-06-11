@extends('user_main')
<!-- 發的專案 -->
@section('right-container')

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
									<p>{{$work->description}}</p>
								</div>
								<div class="task-choose user">
									<div class="choose_user">
									@foreach($worktakens as $worktaken)
										@if($worktaken->work_id == $work->id)
											<img name='{{$worktaken->taken_by}}' work-id='{{$work->id}}' data-content="<a style='color:#1AB8F3;' href='/user/{{$worktaken->taken_by}}/profile'>{{$worktaken->username}}</a>" class="circular ui image" src="/{{$worktaken->user_img}}">
										@endif
									@endforeach
									</div>
									<a class="ui green button choose-user" style="width:200px;text-align:center;">選擇他</a>
								</div>
							</div>
						</div>
						<div class="ui purple ribbon label" style="margin-bottom:5px;"> {{$work->duetime}}</div>
						<div class="field">
							<img class="head-profile" src="/{{$work->img}}"/>
						</div>
						<div class="field">
							<div class="task_host">任務名稱:{{$work->workname}}</div>
						</div>
						<div class="field">
							<div class="task_host">發案人:{{$user->username}}</div>
						</div>
						<div class="field">
							<div class="task_host">獎賞:{{$work->reward}}</div>
						</div>
				
						<div class="field" style="margin-top:10px;">
							@foreach($work->workskill as $eachskill)
								<div class="task-date">{{$eachskill->skillname}}</div>
							@endforeach
						</div>
					</div>
				</div>
				@if($i%3==2)
					</div></div>
				@endif
				<?php $i++ ?>

			
		@endforeach

@stop