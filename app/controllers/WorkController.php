<?php

class WorkController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $works = Work::all();
        return View::make('works')->with('works', $works);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$workname = Input::get('workName');
		$img = Input::file('image');
		$name = $img->getClientOriginalName();

		preg_match('/.*(\.\w*)/', $name,$match);
		$des = Input::get('description');
		
		$user_id = Auth::id();
		// echo $user_id;
		$reward = Input::get('reward');
		$status = 0;
		$date = Input::get('date');

		$destinationPath = 'public/uploads';
		$filepath = 'uploads';
		$filename = str_random(12).$match[1];
		$upload_success = $img->move($destinationPath, $filename);

		$work = Work::create(
			array(
				'name'=>$workname, 
				'description'=>$des,
				'reward'=>$reward, 
				'img'=> $filepath.'/'.$filename, 
				'status'=>$status,
				'user_id'=>$user_id,
				'dueTime'=>$date
				));
		if($work && $upload_success ){
			return Redirect::to("/user/".$user_id."/task");
		}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
