@extends('layouts.default')
@section('content')
	
	<div id="preview-coverflow">

		<?php $j=0?>
		@foreach($work_covers as $work_cover)
			<div>
			@if($j==0)
				<div class="ui left corner red label">
	    			<div class="text">New</div>
	  			</div>
  			@endif
  			<?php $j++?>
				<img class="cover" src="{{$work_cover->works_img}}"/>
			</div>

		@endforeach
	</div>
	<div id='left-container'>
		<div class="one column stackable ui grid" >
			<div class="column">
				<div class="ui segment" style="border: 1px solid #ababab;">
					{{ Form::open(array('url' => '/home', 'method' => 'post','id'=>'filter_form')) }}
					<div class="field">
						<span class="filter_title">條件篩選</span>
					</div>
					<div class="field">
						<div class="ui divided list">
							@foreach ($skills as $skill)
							<div class="item">
								<div class="ui checkbox">
								{{ Form::checkbox('filter_skill[]', $skill->sid, false) }}<label>{{$skill->sname}}</label>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<div class="field">
						<div class="ui animated black button go">
						  	<div class="visible content submit">GO</div>
						  	<div class="hidden content">
						  		<i class="right arrow icon"></i>
						  	</div>
						</div>
						
					</div>
					{{ Form::close() }}
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
									<p>{{$work->works_description}}</p>
								</div>
								<div class="task-choose">
									<form action="takeTask/{{$work->wid}}" method="post">
										<input type="submit" class="ui green button" style="width:200px;text-align:center;" value="接任務"/>
									</form>
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

						@foreach( $users as $user )
							@if( $user->wid === $work->wid )
							<div class="task_host">發案人:{{$user->pname}}</div>
							@endif
						@endforeach

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
					</div>
					</div>
				@endif
				<?php $i++ ?>
		@endforeach
	</div>
	@if(isset($msg)) <span class="test">{{$msg}}</span> 
	@endif
@stop