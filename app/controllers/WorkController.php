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
		// image name
		$name = $img->getClientOriginalName();

		preg_match('/.*(\.\w*)/', $name,$match);
		$description = Input::get('description');

		$user_id = Auth::id();

		$reward = Input::get('reward');
		$status = 0;
		$date = Input::get('date');

		$destinationPath = 'public/uploads';
		$filepath = 'uploads';
		$filename = str_random(12).$match[1];
		$upload_success = $img->move($destinationPath, $filename);

		// insert and get this work id
		$work_id = Work::insertGetId(
			array(
				'wname' => $workname, 
				'works_description' => $description,
				'reward' => $reward, 
				'works_img' => $filepath.'/'.$filename,
				'works_uid' => $user_id,
				'dueTime' => $date
			));

		$work = Work::find($work_id);
		// 我想用sync
		if($skill1 == 'on')
		{
			$work->skill()->attach(1);
		}
		if($skill2 == 'on')
		{
			$work->skill()->attach(2);
		}
		if($skill3 == 'on')
		{
			$work->skill()->attach(3);
		}
		if($skill4 == 'on')
		{
			$work->skill()->attach(4);
		}
		if($skill5 == 'on')
		{
			$work->skill()->attach(5);
		}
		if($skill6 == 'on')
		{
			$work->skill()->attach(6);
		}

		// if($work && $upload_success ){
			if( $upload_success ) {
			return Redirect::to("/user/".$user_id);
		}
	}

	public function taketask($work_id)	
	{
		$id = Auth::id();
		$worktaken = Worktaken::create(
			array(
				'worktaken_wid'=>$work_id,
				'worktaken_uid'=>$id,
				'status' =>1
				));
		
		Work::find($work_id)->update(array('status'=>1));
		return Redirect::to("/user/".$id."/tasktaken");
	}

	public function confirmtask()	
	{
		$id = Auth::id();
		$chosen_user = Input::get('user');
		$work = Input::get('work');
		$worktaken = Worktaken::where('worktaken_wid','=',$work)->delete();
		$worktaken = Worktaken::create(
			array(
				'worktaken_wid'=>$work,
				'worktaken_uid'=>$chosen_user,
				'status' =>2
				));
		return 'Redirect::to("/user/".$id."/task")';

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
