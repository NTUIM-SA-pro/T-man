<?php
class ProfileController extends BaseController{
	
	public $restful = true;

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function task($user_id)
	{

		$user = User::find($user_id)->profile;
		// echo $id;
		$works = Work::where('work_uid','=',$user_id)->get();
		$workskills = DB::table('works')->join('workSkills','workSkills.workSkill_wid' ,'=', 'works.wid')
						->where('work_uid',$user_id)->get();
		// $workskill = 

		return View::make('profile.task')->with('works',$works)->with('user',$user)->with('workskills',$workskills);
	}
}
