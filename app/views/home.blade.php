@extends('layouts.default')
@section('content')
	
	<div id="preview-coverflow">
		
		@foreach($works as $work)
			<img class="cover" src="{{$work->img}}"/>
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
		</div><div class="one column stackable ui grid" >
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
		</div><div class="one column stackable ui grid" >
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

	
@stop