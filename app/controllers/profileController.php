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

		$worktaken = DB::table('works')->join('worktaken','worktaken.worktaken_wid' ,'=', 'works.wid')
						->join('profiles','profiles.profile_uid','=','worktaken.worktaken_uid')->get();

		return View::make('profile.task')->with('works',$works)->with('user',$user)->with('worktakens',$worktaken);
	}

	public function showtakenTask($user_id)
	{
		$user = User::find($user_id)->profile;

		$works = DB::table('works')->join('worktaken','worktaken.worktaken_wid' ,'=', 'works.wid')
						->join('profiles','profiles.profile_uid','=','works.work_uid')
						->where('worktaken_uid',$user_id)->get();

		return View::make('profile.tasktaken')->with('user',$user)->with('works',$works);
	}
}
