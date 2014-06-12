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
									<p>{{$work->work_description}}</p>
								</div>
								<div class="task-choose user">
									<div class="choose_user">
									@foreach($user_works as $user_work)
										@if($user_work->user_works_wid === $work->wid)
											<img name='{{$user_work->user_works_uid}}' work-id='{{$work->wid}}' data-content="<a style='color:#1AB8F3;' href='/user/{{$user_work->user_works_uid}}'>{{$user_work->pname}}</a>" class="circular ui image" src="/{{$user_work->profiles_img}}" />
										@endif
									@endforeach
									</div>
									<a class="ui green button choose-user" style="width:200px;text-align:center;">選擇他</a>
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
							<div class="task_host">發案人:{{$user->pname}}</div>
						</div>
						<div class="field">
							<div class="task_host">獎賞:{{$work->reward}}</div>
						</div>
				
						<div class="field" style="margin-top:10px;">
							@foreach($user_works as $user_work)
								<div class="task-date">{{$user_work->sname}}</div>
							@endforeach
						</div>
					</div>
				</div>
		@if($i%3==2)
			</div>
			</div>
		@endif
		<?php $i++ ?>			
	@endforeach
@stop