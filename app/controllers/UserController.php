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
	 * Display user works.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id)->profile;

		$works = Work::where('works_uid','=',$id)->get();

		$user_works = DB::table('works')
						->join('user_works','user_works.user_works_wid' ,'=', 'works.wid')
						->join('profiles','profiles.profiles_uid','=','user_works.user_works_uid')
						->get();

		return View::make('profile.task')
					->with('works',$works)
					->with('user',$user)
					->with('user_works',$user_works);
	}

	/**
	 * 
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * 
	 *
	 * @param  int  $id
	 * @return profile.index.blade.php
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

	//Be called when no other matching method is found
	public function missingMethod($parameters = array())
	{
    	//
	}
}
