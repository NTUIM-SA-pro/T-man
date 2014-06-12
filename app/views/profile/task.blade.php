@extends('user_main')
<!-- 發的專案 -->

@section('right-container')
	<div class="ui segment main">
	@if($user->user_id==Auth::id())
		<h2 class="ui left floated header">我發的案</h2>
	@else
		<h2 class="ui left floated header">{{$user->username}}發的案</h2>
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
							
							@if($work->status==0)
								<div class="task-desc">
									<h3>敘述：</h3>
									<p>{{$work->work_description}}</p>
								</div>

								<div class="task-choose">
									<div class="ui small message" style="width:200px;text-align:center;">
									  <p>還沒有任何人接案！！</p>
									</div>
								</div>
							@elseif($work->status==1)
								<div class="task-desc user">
									<h3>敘述：</h3>
									<p>{{$work->description}}</p>
								</div>
								<div class="userList">
									
									@foreach($worktakens as $worktaken)
										@if($worktaken->work_id == $work->id)
										<img name='{{$user_work->user_works_uid}}' work-id='{{$work->wid}}' data-content="<a style='color:#1AB8F3;' href='/user/{{$user_work->user_works_uid}}'>{{$user_work->pname}}</a>" class="circular ui image" src="/{{$user_work->profiles_img}}" />
										@endif
									@endforeach
								</div>
								<div class="choose_user">
									<a class="ui green button choose-user" style="width:200px;text-align:center;">選擇他</a>
								</div>
							@else
								<div class="task-desc user">
									<h3>敘述：</h3>
									<p>{{$work->works_description}}</p>
								</div>
								<div class="userList">
									
									@foreach($worktakens as $worktaken)
									@if($worktaken->work_id == $work->id)
										<img name='{{$worktaken->taken_by}}' work-id='{{$work->id}}' data-content="<a style='color:#1AB8F3;' href='/user/{{$worktaken->taken_by}}/profile'>{{$worktaken->username}}</a>" class="circular ui image" src="/{{$worktaken->user_img}}" />
									@endif
									@endforeach
								</div>
								<div class="task-choose">
									<div class="ui small message" style="width:200px;text-align:center;">
										<p>此專案由{{$worktaken->username}}承接</p>
									</div>
								</div>
							@endif

						</div>
					</div>
					<div class="ui purple ribbon label" style="margin-bottom:5px;"> {{$work->duetime}}</div>
					<div class="field">
						<img class="head-profile" src="/{{$work->img}}"/>
					</div>
					<div class="field">
						<div class="task_host">任務名稱:{{$work->wname}}</div>
					</div>
					<div class="field">
						<div class="task_host">發案人:{{$user->pname}}</div>
					</div>
					<div class="field">
						<div class="task_host">獎賞:{{$work->reward}}</div>
					</div>
			
					<div class="field" style="margin-top:10px;">
						@foreach($work->workskill as $eachskill)
							<div class="task-date">{{$eachskill->sname}}</div>
						@endforeach
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