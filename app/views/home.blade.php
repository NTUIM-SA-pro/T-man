@extends('layouts.default')
@section('content')
	
	<div id="preview-coverflow">

		<?php $j=0?>
		@foreach($workCover as $work)
			<div>
			@if($j==0)
				<div class="ui left corner red label">
	    			<div class="text">New</div>
	  			</div>
  			@endif
  			<?php $j++?>
				<img class="cover" src="{{$work->img}}"/>
			</div>

		@endforeach
	</div>
	<div id='left-container'>
		<div class="one column stackable ui grid" >
			<div class="column">
				<div class="ui segment" style="border: 1px solid #ababab;">
					<div class="field">
						<span class="filter_title">條件篩選</span>
					</div>
					<div class="field">
						<div class="ui divided list">
							<div class="item">
								<div class="ui checkbox">
									<input type="checkbox" name="skill1">
									<label>電腦</label>
								</div>
							</div>
							<div class="item">
								<div class="ui checkbox">
									<input type="checkbox" name="skill2">
									<label>語文</label>
								</div>
							</div>
							<div class="item">
								<div class="ui checkbox">
									<input type="checkbox" name="skill3">
									<label>運動</label>
								</div>
							</div>
							<div class="item">
								<div class="ui checkbox">
									<input type="checkbox" name="skill4">
									<label>美術</label>
								</div>
							</div>
							<div class="item">
								<div class="ui checkbox">
									<input type="checkbox" name="skill5">
									<label>行政</label>
								</div>
							</div>
							<div class="item">
								<div class="ui checkbox">
									<input type="checkbox" name="skill6">
									<label>其他</label>
								</div>
							</div>
						</div>
					</div>
					<div class="field">
						<div class="ui animated black button go">
						  <div class="visible content">Go</div>
						  <div class="hidden content">
						  	<i class="right arrow icon"></i>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="right-container">
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
									<form action="takeTask/{{$work->id}}" method="post">
										<input type="submit" class="ui green button" style="width:200px;text-align:center;" value="接任務"/>
									</form>
								</div>
							</div>
						</div>

						<div class="ui purple ribbon label" style="margin-bottom:5px;"> {{$work->duetime}}</div>
						<div class="field">
							<img class="head-profile" src="/{{$work->img}}"/>
						</div>
						<div class="field">ach
							<div class="task_host">發案人:{{$work->name}}</div>
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

	</div>

	
@stop