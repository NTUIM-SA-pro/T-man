@extends('user_main')
<!-- 發的專案 -->

@section('right-container')
	<div class="ui segment main">

		<h2 class="ui left floated header">更改相片</h2>

  	<div class="ui clearing divider"></div>
  		<div class="field" style="height:50px;"> 
			<img class='photo_upload' src=''>
			<div class='upload'>
				<form id ='photo_form' action="uploadphoto" method="post" enctype="multipart/form-data">
					
					<div class="fileUpload ui basic button">
						<span>選擇檔案</span>
						<input type='file' name='img' class="upload" />
					</div>
					<input type="submit" class="ui basic button" style="width:100px;text-align:center;" value="上傳"/>
				</form>
				
			</div>
		</div>
		<div class="field">
			@if(isset($msg))
				<div class="ui error message photo">{{$msg}}</div>
			@endif
		</div>
	</div>
@stop