<?php

class HomeController extends BaseController {

	public function home()
	{
		$works_covers = DB::table('works')->take(7)->orderBy('created_at','desc')->get();

		// profiles join works
		$user_works = DB::table('profiles')
						->join('user_works','profiles.profiles_uid' ,'=', 'user_works.user_works_uid')
						->join('works','works.wid' ,'=', 'user_works.user_works_wid')
						->get();

		// works join skills
		$work_skills = DB::table('works')
						->join('work_skills','works.wid' ,'=', 'work_skills.work_skills_wid')
						->join('skills','skills.sid' ,'=', 'work_skills.work_skills_sid')
						->get();

		return View::make('home')
				->with( 'work_covers', $works_covers )
				->with( 'user_works', $user_works )
				->with( 'work_skills', $work_skills );
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
