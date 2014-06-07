<?php

class UsersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function home()
	{
		return View::make('home');
		
	}
	public function test()
	{
		// $works = Work::all();
		// print_r($works);
		$id = Auth::user()->account;
		echo $id;
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


		$user = User::create(
    		array('account' => $account, 'password' => $password)
		);

		$profile = new Profile;



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
