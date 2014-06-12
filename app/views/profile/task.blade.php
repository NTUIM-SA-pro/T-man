@extends('user_main')
<!-- 發的專案 -->

@section('right-container')
	<div class="ui segment main">
	@if(Auth::id()===$user->profiles_uid)
		<h2 class="ui left floated header">我發的案</h2>
	@else
		<h2 class="ui left floated header">{{$user->pname}}發的案</h2>
	@endif
  	

  	<div class="ui clearing divider"></div>
		<?php $i=0 ?>
		@foreach($user_works as $work)
		@if( $work->profiles_uid === Auth::id() )
			@if($i%3==0)
				<div class = "row">
				<div class="three column stackable ui grid">
			@endif 

			<div class="column">
				<div class="ui segment">
					<div class="ui dimmer">
						<div class="content">
							<!-- 未被接案 -->
							@if($work->status==0)
								<div class="task-desc">
									<h3>敘述：</h3>
									<p>{{$work->works_description}}</p>
								</div>

								<div class="task-choose">
									<div class="ui small message" style="width:200px;text-align:center;">
									  <p>還沒有任何人接案！！</p>
									</div>
								</div>
							<!-- 接案但未確定 -->
							@elseif($work->status==1)
								<div class="task-desc user">
									<h3>敘述：</h3>
									<p>{{$work->works_description}}</p>
								</div>
								<div class="userList">
									
									@foreach($user_works as $user_work)
										@if($user_work->user_works_wid === $work->wid && $user_work->status === 3)
										<img name='{{$user_work->user_works_uid}}' work-id='{{$work->wid}}' data-content="<a style='color:#1AB8F3;' href='/user/{{$user_work->user_works_uid}}'>{{$user_work->pname}}</a>" class="circular ui image" src="/{{$user_work->profiles_img}}" />
										@endif
									@endforeach
								</div>
								<div class="choose_user">
									<a class="ui green button choose-user" style="width:200px;text-align:center;">選擇他</a>
								</div>
							<!-- 已接案 -->
							@elseif($work->status==2)
								<div class="task-desc user">
									<h3>敘述：</h3>
									<p>{{$work->works_description}}</p>
								</div>
								<div class="userList">
								
								</div>
								<div class="task-choose">
									<div class="ui small message" style="width:200px;text-align:center;">
										@foreach($user_works as $user_work)
										@if($user_work->user_works_wid === $work->wid && $user_work->status === 4)
										<p>此專案由{{$user_work->pname}}承接</p>
										@endif
										@endforeach
									</div>
								</div>
							@endif

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
						<div class="task_host">發案人:{{$user->pname}}</div>
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