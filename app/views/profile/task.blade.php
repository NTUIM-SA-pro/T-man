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
								<div class="task-choose">
									<a class="ui green button" style="width:200px;text-align:center;">接任務</a>
								</div>
							</div>
						</div>
						<div class="field">
							<img class="head-profile" src="/{{$work->img}}"/>
						</div>
						<div class="field">
							<div class="task_host">工作名稱:{{$work->name}}</div>
						</div>
						<div class="field">
							<div class="task_host">獎賞:{{$work->reward}}</div>
						</div>
				
						<div class="field" style="margin-top:10px;">
							@foreach($workskills as $workskill)
								<div class="task-date">{{$workskill->skillname}}</div>
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