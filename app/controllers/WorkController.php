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
	 * Store user's work.
	 *
	 * @return Usercontroller@show
	 */
	public function store()
	{
		$user_id = Auth::id();

		// get the data from front end. 
		$workname = Input::get('workName');
		$img = Input::file('image');
		$description = Input::get('description');
		$reward = Input::get('reward');
		$date = Input::get('date');
		$skills_checked = Input::get('work_skill'); // skill checkbox

		// image name
		$filename = str_random(12);
		// image upload path
		$destinationPath = public_path().'/uploads';
		// image url
		$url = $img->move($destinationPath, $filename)->getRealPath();
		// substring: /uploads/*.jpg
		$url = substr($url, -20);	
		// insert and get this work id
		$work_id = Work::insertGetId(
			array(
				'wname' => $workname, 
				'works_description' => $description,
				'reward' => $reward, 
				'works_img' => $url,
				'works_uid' => $user_id,
				'dueTime' => $date
			));
		// this work
		$work = Work::find($work_id);
		// insert into many to many: user_works
		$work->user()->attach($user_id);
		// sync user_skills
		if( is_array($skills_checked) )
		{
			$work->skill()->sync($skills_checked);
		}

		return Redirect::to("/user/".$user_id);
	}

	public function taketask($work_id)	
	{
		$id = Auth::id();

		// 發案人: 未接 -> 未確認
		$work_owner = UserWork::where('user_works_wid', '=', $work_id)
						->where('status', '=', 0)
						->update(array('status' => 1));

		// 接案人: 未確認
		$work_taker = Work::find($work_id);
		$work_taker->user()->attach($id, array('status' => 3));

		return Redirect::to("/user/".$id."/tasktaken");
	}

	public function confirmtask()	
	{
		$id = Auth::id();
		$chosen_user = Input::get('user');
		$work = Input::get('work');

		// 發案人: 未確認 -> 已確認
		$work_owner = UserWork::where('user_works_wid', '=', $work)
						->where('status', '=', 1)
						->update(array('status' => 2));

		// 接案人: 未確認 -> 已確認
		$work_owner = UserWork::where('user_works_wid', '=', $work)
						->where('status', '=', 3)
						->update(array('status' => 4));

		return $id;
	}

	/**
	 * Display user's works which he takes.
	 *
	 * @param  int  $id
	 * @return profile.tasktaken.blade.php
	 */
	public function show($id)
	{
		$user = User::find($id)->profile;

		// profiles join works
		$works = DB::table('works')
					->join('user_works','user_works.user_works_wid' ,'=', 'works.wid')
					->join('profiles','profiles.profiles_uid','=','user_works.user_works_uid')
					->get();

		// works join skills
		$work_skills = DB::table('works')
						->join('work_skills','works.wid' ,'=', 'work_skills.work_skills_wid')
						->join('skills','skills.sid' ,'=', 'work_skills.work_skills_sid')
						->get();

		return View::make('profile.tasktaken')
				->with( 'user', $user )
				->with( 'works', $works )
				->with( 'skills', Skill::all() )
				->with( 'work_skills', $work_skills );
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
