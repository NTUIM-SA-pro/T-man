<?php

class ProfileController extends BaseController{
	
	//public $restful = true;

	/**
	 * Display user's profile.
	 *
	 * @param  int  $id
	 * @return profile.index.blade.php
	 */
	public function show($id)
	{
		$user = User::find($id)->profile;

		// users join profiles
		$user_profiles = DB::table('users')
						->join('profiles', 'users.id', '=', 'profiles.profiles_uid')
						->where('id', $id)
						->get();
		// users join skills
		$user_skills = DB::table('user_skills')
						->join('skills', 'user_skills.user_skills_sid', '=', 'skills.sid')
						->join('users', 'user_skills.user_skills_uid', '=', 'users.id')
						->where('user_skills_uid', $id)
						->get();

		return View::make('profile.index')
				->with( 'data', $user_profiles )
				->with( 'user_skills', $user_skills )
				->with( 'skills', Skill::all() )
				->with( 'user', $user ); 
	}

	/**
	 * Edit user's profile.
	 *
	 * @param  int  $id
	 * @return profile.modify.blade.php
	 */
	public function edit($id)
	{
		$user = User::find($id)->profile;
		$user_profile = DB::table('users')
						->join('profiles', 'users.id', '=', 'profiles.profiles_uid')
						->where('id', $id)
						->get();
		$user_skills = DB::table('user_skills')
							->join('skills', 'user_skills.user_skills_sid', '=', 'skills.sid')
							->join('users', 'user_skills.user_skills_uid', '=', 'users.id')
							->where('user_skills_uid', $id)
							->get();
		return View::make('profile.modify')
			->with( 'data', $user_profile )
			->with( 'skills', Skill::all() )
			->with( 'user_skills', $user_skills )
			->with( 'user', $user );
	}

	/**
	 * Update user's profile.
	 *
	 * @param  int  $id
	 * @return profile.index.blade.php
	 */
	public function update($id)
	{
		/*$validator = array(
    		'img' => 'required|min:1|integerOrArray'
		);*/
		$user = User::find($id);

		// get the data from front end. 
		$profile_name = Input::get('name');
		$img = Input::file('img');
		$sex = Input::get('sex');
		$intro = Input::get('introduction');
		$skills_checked = Input::get('user_skill'); // skill checkbox

		// image validation
		/*if ($validator->fails())
		{
    		// The given data did not pass validation
		}*/

		// 有照片
		/*if( Input::file('img')->isValid() )
		{
			$img = Input::file('img');
		}*/	

		//$date = \Carbon\Carbon::now();
			
		//$filename = $date;
		// image name
		$filename = str_random(12);
		// image upload path
		$destinationPath = public_path().'/uploads';
		// image url
		$url = $img->move($destinationPath, $filename)->getRealPath();
		// substring: /uploads/*.jpg
		$url = substr($url, -20);
		// update profile
		$profile_update = DB::table('profiles')
							->where('profiles_uid', $id)
							->update(array( 'pname' => $profile_name,
											'profiles_img' => $url,
											'introduction' => $intro,
											'sex' => $sex
									));
		
		// sync user_skills
		if( is_array($skills_checked) )
		{
			$user->skill()->sync($skills_checked);
		}
		else
		{
			// delete all user_skills
		}
	
		return Redirect::to('/profile/'.$id);
	}

	/*public function showtakenTask($user_id)
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
				->with( 'skills', Skill::all() )
				->with( 'work_skills', $work_skills );
	}*/
}
