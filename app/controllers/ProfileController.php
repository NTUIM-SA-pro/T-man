<?php

class ProfileController extends BaseController{
	
	public $restful = true;

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
	 * Display profile.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id)->profile;

		$user_profile = DB::table('users')
						->join('profiles', 'users.id', '=', 'profiles.profiles_uid')
						->where('id', $id)
						->get();
		$user_skill = DB::table('user_skills')
						->join('skills', 'user_skills.user_skills_sid', '=', 'skills.sid')
						->join('users', 'user_skills.user_skills_uid', '=', 'users.id')
						->where('user_skills_uid', $id)
						->get();
		return View::make('profile.index')
				->with( 'data', $user_profile )
				->with( 'skill', $user_skill )
				->with( 'user', $user ); 
	}

	public function showtakenTask($user_id)
	{
		$user = User::find($user_id)->profile;

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
				->with( 'work_skills', $work_skills );
	}

	/**
	 * Edit profile.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id)->profile;
		$user_profile = DB::table('users')
						->join('profiles', 'users.id', '=', 'profiles.profiles_uid')
						->where('id', $id)
						->get();
		$user_skill = DB::table('user_skills')
							->join('skills', 'user_skills.user_skills_sid', '=', 'skills.sid')
							->join('users', 'user_skills.user_skills_uid', '=', 'users.id')
							->where('user_skills_uid', $id)
							->get();
		return View::make('profile.modify')
			->with( 'data', $user_profile )
			->with( 'skill', Skill::all() )
			->with( 'user_skill', $user_skill )
			->with( 'user', $user );
	}


	/**
	 * Update profile.
	 *
	 * @param  int  $id
	 * @return profile.index.blade.php
	 */
	public function update($id)
	{
		/*$validator = array(
    		'img' => 'required|min:1|integerOrArray'
		);*/

		// get the data from front end. 
		$profile_name = Input::get('name');

		// image validation
		/*if ($validator->fails())
		{
    		// The given data did not pass validation
		}*/

		// 有照片
		if( Input::file('img')->isValid() )
		{
			$img = Input::file('img');
		}	

		$filepath = 'uploads';
		$name = $img->getClientOriginalName();
		preg_match('/.*(\.\w*)/', $name,$match);
		$destinationPath = 'public/uploads';
		// file name
		$filename = str_random(12).$match[1];

		if(isset($img))
		{
			$name = $img->getClientOriginalName();
			preg_match('/.*(\.\w*)/', $name,$match);
			
			$filename = str_random(12).$match[1];
			$upload_success = $img->move($destinationPath, $filename);
			DB::table('profiles')->where('profiles_uid', $id)
									->update( array('profiles_img' => $filepath.'/'.$filename));
									
		}

		$sex = Input::get('sex');
		$intro = Input::get('introduction');

		$profile_update = DB::table('profiles')
							->where('profiles_uid', $id)
							->update(array( 'pname' => $profile_name,
											'profiles_img'  => $filepath.'/'.$filename,
											'introduction' => $intro,
											'sex'  => $sex));
		/*if(isset($skill))
		{
			$skill_modify = DB::table('user_skills')->insert(
									array('user_id'=>$id, 'skill_id'=>$skill));
		}*/
		return Redirect::to('/profile/'.$id);
	}
}
