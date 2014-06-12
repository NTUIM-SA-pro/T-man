<?php

class UserController extends BaseController {

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
		//
	}

	/**
	 * Register.
	 *
	 * @return home.blade.php
	 */
	public function register()
	{
		$account = Input::get('account');
		$tempPassword = Input::get('password');
		$password = Hash::make($tempPassword);
		$nickname = Input::get('nickname');

		$user = User::create(
    		array('account' => $account, 'password' => $password)
		);

		$profile = new Profile;
		$profile->pname = $nickname;

		$save = $user->profile()->save($profile);

		if($save){
			$auth = Auth::attempt(array(
			'account' => $account,
			'password' => $tempPassword),true);
			if($auth){
				return Redirect::route('home');
			}
			else return 'error';
		}
	}

	public function login()
	{
		$account = Input::get('account');
		$password = Input::get('password');


		$auth = Auth::attempt(array(
			'account' => $account,
			'password' => $password));
		if($auth)
		{
			$id = Auth::id();
			return $id;
		}
		else
		{
			return '帳號or密碼輸入錯誤';		
		}	
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::route('home');
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
						->join('profiles', 'users.id', '=', 'profiles.profile_uid')
						->where('id', $id)
						->get();
		$user_skill = DB::table('userSkills')
						->join('skills', 'userSkills.userSkill_sid', '=', 'skills.sid')
						->join('users', 'userSkills.userSkill_uid', '=', 'users.id')
						->where('userSkill_uid', $id)
						->get();
		return View::make('profile.index')
				->with( 'data', $user_profile )
				->with( 'skill', $user_skill )
				->with( 'user', $user ); 
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
						->join('profiles', 'users.id', '=', 'profiles.profile_uid')
						->where('id', $id)
						->get();
		$user_skill = DB::table('userSkills')
							->join('skills', 'userSkills.userSkill_sid', '=', 'skills.sid')
							->join('users', 'userSkills.userSkill_uid', '=', 'users.id')
							->where('userSkill_uid', $id)
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
		//$skill_modify = true;
		$user = User::find($id)->profile;

		/*
		 * get the data from front end. 
		 */
		$profile_name = Input::get('name');

		$img = $user->profile_img;

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
			DB::table('profiles')->where('profile_uid', $id)
									->update( array('profile_img' => $filepath.'/'.$filename));
									
		}
		$sex = Input::get('sex');
		$intro = Input::get('introduction');
		$skill = Input::get('skill');	


		$profile_modify = DB::table('profiles')
							->where('profile_uid', $id)
							->update(array( 'pname' => $profile_name,
											'profile_img'  => $filepath.'/'.$filename,
											'introduction' => $intro,
											'sex'  => $sex));
		/*if(isset($skill))
		{ ====userskill!!!!!
			$skill_modify = DB::table('userSkills')->insert(
									array('user_id'=>$id, 'skill_id'=>$skill));
		}*/			
		return Redirect::to('/user/'.$id);
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

	//Be called when no other matching method is found
	public function missingMethod($parameters = array())
	{
    	//
	}
}
