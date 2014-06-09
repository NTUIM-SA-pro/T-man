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

	public function post_update(){
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
									->update( array('img' => $filepath.'/'.$filename));
									
		}
		$sex = Input::get('sex');
		$intro = Input::get('introduction');
		$skill = Input::get('skill');	


		$profile_modify = DB::table('profiles')
							->where('user_id', $id)
							->update(array( 'name' => $profile_name,
											'img'  => $filepath.'/'.$filename,
											'introduction' => $intro,
											'sex'  => $sex));
		if(isset($skill)){
			$skill_modify = DB::table('userSkills')->insert(
									array('user_id'=>$id, 'skill_id'=>$skill));
		}			

		
		return Redirect::to('/user/'.$user_id."/profile");


	}

	public function task($user_id)
	{

		$user = User::find($user_id)->profile;
		// echo $id;
		$works = Work::where('user_id','=',$user_id)->get();
		$workskills = DB::table('works')->join('workSkills','workSkills.work_id' ,'=', 'works.id')
						->where('user_id',$user_id)->get();
		// $workskill = 

		return View::make('profile.task')->with('works',$works)->with('user',$user)->with('workskills',$workskills);
	}
}
?>