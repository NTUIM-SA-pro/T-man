<?php

class WorkController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	public function taketask($work_id)
	{
		$worktaken = Worktaken::create(
			array(
				'description'=>$des,
				'reward'=>$reward, 
				'img'=> $filepath.'/'.$filename, 
				'status'=>$status,
				'user_id'=>$user_id,
				'dueTime'=>$date
				));
		
		if($skill1 == 'on')
		{
			$profile = new Workskill;
			$profile->skillname = '電腦';
			$work->workskill()->save($profile);
		}
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$skill1 = Input::get('skill1');
		$skill2 = Input::get('skill2');
		$skill3 = Input::get('skill3');
		$skill4 = Input::get('skill4');
		$skill5 = Input::get('skill5');
		$skill6 = Input::get('skill6');


		$workname = Input::get('workName');
		$img = Input::file('image');
		$name = $img->getClientOriginalName();

		preg_match('/.*(\.\w*)/', $name,$match);
		$des = Input::get('description');
		
		$user_id = Auth::id();

		$reward = Input::get('reward');
		$status = 0;
		$date = Input::get('date');

		$destinationPath = 'public/uploads';
		$filepath = 'uploads';
		$filename = str_random(12).$match[1];
		$upload_success = $img->move($destinationPath, $filename);

		$work = Work::create(
			array(
				'name'=>$workname, 
				'description'=>$des,
				'reward'=>$reward, 
				'img'=> $filepath.'/'.$filename, 
				'status'=>$status,
				'user_id'=>$user_id,
				'dueTime'=>$date
				));
		
		if($skill1 == 'on')
		{
			$profile = new Workskill;
			$profile->skillname = '電腦';
			$work->workskill()->save($profile);
		}
		if($skill2 == 'on')
		{
			$profile = new Workskill;
			$profile->skillname = '語文';
			$work->workskill()->save($profile);
		}
		if($skill3 == 'on')
		{
			$profile = new Workskill;
			$profile->skillname = '運動';
			$work->workskill()->save($profile);
		}
		if($skill4 == 'on')
		{
			$profile = new Workskill;
			$profile->skillname = '美術';
			$work->workskill()->save($profile);
		}
		if($skill5 == 'on')
		{
			$profile = new Workskill;
			$profile->skillname = '行政';
			$work->workskill()->save($profile);
		}
		if($skill6 == 'on')
		{
			$profile = new Workskill;
			$profile->skillname = '其他';
			$work->workskill()->save($profile);
		}
		
		// if($work && $upload_success ){
			if($upload_success ){
			return Redirect::to("/user/".$user_id."/task");
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
