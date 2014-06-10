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
					<div class="">發案人:</div>
				</div>
				<div class="field">
					<div class="task-title">{{$work->name}}</div>
				</div>
				<div class="field">
					<div class="task-title">{{$work->name}}</div>
				</div>
				<div class="field">
					<div class="task-date">www</div>
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