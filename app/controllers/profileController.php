<?php
class ProfileController extends BaseController{
	
	public $restful = true;

	public function get_index($user_id){
		$user = $user = User::find($user_id)->profile;

			$user_profile = DB::table('users')
							->join('profiles', 'users.id', '=', 'profiles.user_id')
							->where('id', $user_id)
							->get();
			$user_skill = DB::table('userSkills')
							->join('skills', 'userSkills.skill_id', '=', 'skills.id')
							->join('users', 'userSkills.user_id', '=', 'users.id')
							->where('user_id', $user_id)
							->get();
			return View::make('profile.index')
				->with( 'data', $user_profile )
				->with( 'skill', $user_skill )
				->with('user',$user); 

	}
	
	public function get_modify($user_id){
		$user = $user = User::find($user_id)->profile;
		$user_profile = DB::table('users')
						->join('profiles', 'users.id', '=', 'profiles.user_id')
						->where('id', $user_id)
						->get();
		$user_skill = DB::table('userSkills')
							->join('skills', 'userSkills.skill_id', '=', 'skills.id')
							->join('users', 'userSkills.user_id', '=', 'users.id')
							->where('user_id', $user_id)
							->get();
		return View::make('profile.modify')
			->with( 'data', $user_profile )
			->with( 'skill', Skill::all() )
			->with( 'user_skill', $user_skill )
			->with('user',$user); 
	}

	public function post_update($user_id){
		$id = Auth::user()->id;
		$skill_modify = true;

		/*
		 * get the data from front end. 
		 */
		$profile_name = Input::get('name');

		$img = Input::file('img');

		$filepath='uploads';
		$name = $img->getClientOriginalName();
			preg_match('/.*(\.\w*)/', $name,$match);
			$destinationPath = 'public/uploads';
			
			$filename = str_random(12).$match[1];
		if(isset($img)){
			$name = $img->getClientOriginalName();
			preg_match('/.*(\.\w*)/', $name,$match);
			$destinationPath = 'public/uploads';
			
			$filename = str_random(12).$match[1];
			$upload_success = $img->move($destinationPath, $filename);
			DB::table('profiles')->where('user_id', $id)
									->update( array('user_img' => $filepath.'/'.$filename));
									
		}
		$sex = Input::get('sex');
		$intro = Input::get('introduction');
		$skill = Input::get('skill');	


		$profile_modify = DB::table('profiles')
							->where('user_id', $id)
							->update(array( 'username' => $profile_name,
											'user_img'  => $filepath.'/'.$filename,
											'introduction' => $intro,
											'sex'  => $sex));
				

		
		return Redirect::to('/user/'.$user_id."/profile");


	}

	public function task($user_id)
	{

		$user = User::find($user_id)->profile;
		// echo $id;
		$works = Work::where('user_id','=',$user_id)->get();
	
		$worktaken = DB::table('works')->join('worktaken','worktaken.work_id' ,'=', 'works.id')
						->join('profiles','profiles.user_id','=','worktaken.taken_by')->get();

		return View::make('profile.task')->with('works',$works)->with('user',$user)->with('worktakens',$worktaken);
	}

	public function showtakenTask($user_id)
	{
		$user = User::find($user_id)->profile;

		$works = DB::table('works')->join('worktaken','worktaken.work_id' ,'=', 'works.id')
						->join('profiles','profiles.user_id','=','works.user_id')
						->where('taken_by',$user_id)->get();


		return View::make('profile.tasktaken')->with('user',$user)->with('works',$works);
	}
}
?>