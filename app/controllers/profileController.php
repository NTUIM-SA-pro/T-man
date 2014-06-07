<?php
class ProfileController extends BaseController{
	
	public $restful = true;

	public function get_index(){
		$id = Auth::user()->id;
		if(isset($id)){
			$user_profile = DB::table('users')
							->join('profiles', 'users.id', '=', 'profiles.user_id')
							->where('id', $id)
							->get();
			$user_skill = DB::table('userSkills')
							->join('skills', 'userSkills.skill_id', '=', 'skills.id')
							->join('users', 'userSkills.user_id', '=', 'users.id')
							->where('user_id', $id)
							->get();
			return View::make('profile.index')
				->with( 'data', $user_profile )
				->with( 'skill', $user_skill ); 
		}else{
			return Redirect::route('home')->with('msg','Login First!');
		}
	}

	public function get_modify(){
		$id = Auth::user()->id;
		$user_profile = DB::table('users')
						->join('profiles', 'users.id', '=', 'profiles.user_id')
						->where('id', $id)
						->get();
		return View::make('profile.modify')
			->with( 'data', $user_profile )
			->with( 'skill', Skill::all() );
	}

	public function post_update(){
		$id = Auth::user()->id;

		/*
		 * get the data from front end. 
		 */
		$profile_name = Input::get('name');

		$img = Input::file('img');

		$name = $img->getClientOriginalName();
		preg_match('/.*(\.\w*)/', $name,$match);
		$destinationPath = 'public/uploads';
		$filename = str_random(12).$match[1];
		$upload_success = $img->move($destinationPath, $filename);

		$sex = Input::get('sex');
		$intro = Input::get('introduction');
		$skill = Input::get('skill');

		$profile_modify = DB::table('profiles')
							->where('user_id', $id)
							->update(array( 'name' => $profile_name,
											'img'  => $destinationPath.'/'.$filename,
											'introduction' => $intro,
											'sex'  => $sex));
		if(isset($skill)){
			$slill_modify = DB::table('userSkills')->insert(
									array('user_id'=>$id, 'skill_id'=>$skill));
		}
								
		return Redirect::route('profile');

	}
}
?>