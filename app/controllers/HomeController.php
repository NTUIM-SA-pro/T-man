<?php

class HomeController extends BaseController {

	/**
	 * Display Homepage.
	 *
	 * @return home.blade.php
	 */
	public function index()
	{
		$works_covers = DB::table('works')
						->take(7)
						->orderBy('created_at','desc')
						->get();

		// works join profiles
		$users = DB::table('works')
				->join('profiles','profiles.profiles_uid' ,'=', 'works.works_uid')
				->get();

		// works join skills
		$work_skills = DB::table('skills')
						->join('work_skills','work_skills.work_skills_sid' ,'=', 'skills.sid')
						->join('works','work_skills.work_skills_wid' ,'=', 'works.wid')
						->get();

		return View::make('home')
				->with( 'work_covers', $works_covers )
				->with( 'work_skills', $work_skills )
				->with( 'works', Work::all() )
				->with( 'skills', Skill::all() )
				->with( 'users', $users );
	}

	/**
	 * Filter works by skills.
	 *
	 * @return home.blade.php
	 */
	public function store()
	{
		$skills_checked = Input::get('filter_skill'); // skill checkbox

		// filter
		if( is_array($skills_checked) )
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
							->get();

			// works join skills and select works with correct skills
			$works = DB::table('skills')
						->join('work_skills','work_skills.work_skills_sid' ,'=', 'skills.sid')
						->join('works','work_skills.work_skills_wid' ,'=', 'works.wid')
						->groupBy('wid')
						->whereIn('sid', $skills_checked)
						->get();

			return View::make('home')
					->with( 'work_covers', $works_covers )
					->with( 'work_skills', $work_skills )
					->with( 'works', $works )
					->with( 'skills', Skill::all() )
					->with( 'users', $users );
		}
		else
		{
			return Redirect::to("/home");
		}
	}

	public function home_error()
	{

		$works_cover = DB::table('works')->take(7)->orderBy('created_at','desc')->get();
		$works = Work::all();
		$users = DB::table('works')
				->join('profiles','profiles.profiles_uid' ,'=', 'works.works_uid')
				->get();
		$work_skills = DB::table('skills')
						->join('work_skills','work_skills.work_skills_sid' ,'=', 'skills.sid')
						->join('works','work_skills.work_skills_wid' ,'=', 'works.wid')
						->get();

		if( !Auth::check() ) 
		{
			// return Redirect::route('home.index');
			return View::make('home')
			->with('work_covers',$works_cover)
			->with('works',$works)->with('msg','ok')
			->with( 'skills', Skill::all() )
			->with('users',$users)
			->with( 'work_skills', $work_skills );
		}
		// return View::make('home')->with('workCover',$works_cover)->with('works',$works)->with('users',$user);
	}

	public function mail()
	{
		Mail::send('emails.auth.test',array('name'=>'ttt'),function($message){
			$message->to('lbj23k1@gmail.com','asas')->subject('subject');
		});
	}

}
