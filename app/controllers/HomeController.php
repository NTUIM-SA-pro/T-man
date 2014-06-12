<?php

class HomeController extends BaseController {

	public function home()
	{

		$works_cover = DB::table('works')->take(7)->orderBy('created_at','desc')->get();
		$works = Work::all();
		$user = DB::table('works')->join('profiles','profiles.user_id' ,'=', 'works.user_id')->get();
		return View::make('home')->with('workCover',$works_cover)->with('works',$works)->with('users',$user);
	}

	public function home_error()
	{

		$works_cover = DB::table('works')->take(7)->orderBy('created_at','desc')->get();
		$works = Work::all();
		$user = DB::table('works')->join('profiles','profiles.user_id' ,'=', 'works.user_id')->get();
		if( !Auth::check() ) return View::make('home')->with('workCover',$works_cover)->with('works',$works)->with('users',$user)->with('msg','ok');
		// return View::make('home')->with('workCover',$works_cover)->with('works',$works)->with('users',$user);
	}

	public function mail()
	{
		Mail::send('emails.auth.test',array('name'=>'ttt'),function($message){
			$message->to('lbj23k1@gmail.com','asas')->subject('subject');
		});
	}

}
