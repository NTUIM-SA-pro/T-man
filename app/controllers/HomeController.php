<?php

class HomeController extends BaseController {

	/* 
	 * Show homepage
	 */
	public function home()
	{
		$works_covers = DB::table('works')->take(7)->orderBy('created_at','desc')->get();

		// works join profiles
		$users = DB::table('works')
				->join('profiles','profiles.profiles_uid' ,'=', 'works.works_uid')
				->get();

		// works join skills
		$work_skills = DB::table('skills')
						->join('work_skills','work_skills.work_skills_sid' ,'=', 'skills.sid')
						->join('works','work_skills.work_skills_wid' ,'=', 'works.wid')
						->join('profiles','profiles.profiles_uid' ,'=', 'works.works_uid')
						->get();

		return View::make('home')
				->with( 'work_covers', $works_covers )
				->with( 'work_skills', $work_skills )
				->with( 'users', $users );
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
