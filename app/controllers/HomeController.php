<?php

class HomeController extends BaseController {

	public function home()
	{
		$works_cover = DB::table('works')->take(7)->orderBy('created_at','desc')->get();
		$works = Work::all();
		return View::make('home')->with('workCover',$works_cover)->with('works',$works);
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
