<?php

class HomeController extends BaseController {

	public function home()
	{
		$works_cover = DB::table('works')->take(7)->orderBy('created_at','desc')->get();
		$works = Work::all();
		$user = DB::table('works')->join('profiles','profiles.profile_uid' ,'=', 'works.work_uid')->get();
		return View::make('home')->with('workCover',$works_cover)->with('works',$works)->with('users',$user);
	}

	public function test()
	{
		$user = User:: find(1);
		echo '<pre>' , print_r($user), '</pre>';
		// return View::make('hello');
	}
	public function mail()
	{
		Mail::send('emails.auth.test',array('name'=>'ttt'),function($message){
			$message->to('lbj23k1@gmail.com','asas')->subject('subject');
		});
	}

}
