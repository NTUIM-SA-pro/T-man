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
		$name = Input::get('workName');
		$id = 1;
		$host= 1;
		// $img = Input::get('image');
		$des = Input::get('description');
		$reward = Input::get('reward');
		$status = 1;
		$date = Input::get('date');

		$work = Work::create(
			array(
				'host'=>$host,
				'img'=>'TEDRDTRDTD', 
				'name'=>$name, 
				'descroption'=>$des,
				'reward'=>$reward, 'status'=>$status,
				'emergency'=>$date));
		if($work){
			return Redirect::route('newwork');
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
