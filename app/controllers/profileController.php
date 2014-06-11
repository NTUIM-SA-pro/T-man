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
		$works = Work::where('user_id','=',$user_id)->get();

		$worktaken = DB::table('works')->join('worktaken','worktaken.work_id' ,'=', 'works.id')
						->join('profiles','profiles.user_id','=','worktaken.taken_by')->get();
						// ->where('taken_by',$user_id)->get();

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
