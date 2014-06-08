<?php

class UsersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function home()
	{
		$works = Work::all();

		return View::make('index')->with('works', $works);
		
	}
	public function showHomepage($user_id)
	{
		$user = User::find($user_id)->profile;
		return View::make('user_main')->with('user',$user);
	}
	public function test($user_id)
	{
		$id = Auth::id();
		$user = User::find($user_id)->profile;
		// echo $id;
		$works = Work::where('user_id','=',$id)->get();

		// print_r($works);
		return View::make('right_container')->with('works',$works)->witH('user',$user);	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('form');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
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
		$profile->name = $nickname;


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
		if($auth){
			return Redirect::route('home');
		}
		else{
			return '帳號or密碼輸入錯誤';		
			}	
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::route('home');
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

	//Be called when no other matching method is found
	public function missingMethod($parameters = array())
	{
    	//
	}
}
