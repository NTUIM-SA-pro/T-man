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
<<<<<<< HEAD
		$works = Work::where('user_id','=',$user_id)->get();
	
		$worktaken = DB::table('works')->join('worktaken','worktaken.work_id' ,'=', 'works.id')
						->join('profiles','profiles.user_id','=','worktaken.taken_by')->get();
=======
		$works = Work::where('work_uid','=',$user_id)->get();

		$worktaken = DB::table('works')->join('worktaken','worktaken.worktaken_wid' ,'=', 'works.wid')
						->join('profiles','profiles.profile_uid','=','worktaken.worktaken_uid')->get();
>>>>>>> 7d5c72e45e747f4332a489c6956b56d091c5f1f7

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
