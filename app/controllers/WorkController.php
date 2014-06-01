<?php

class WorkController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $work = Work::all();

        return View::make('work')->with('work', $work);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$name = Input::get('workName');
		$host= 'Panther';
		$img = Input::file('image');
		$destinationPath = 'upload/image/';
		$imgName = $img->getClientOriginalName();
		$des = Input::get('description');
		$reward = Input::get('reward');
		$status = 1;
		$date = Input::get('date');

		$upload_success = Input::file('image')->move($destinationPath, $imgName);

		if( $upload_success )
		{
			$path = $img->getRealPath();

			$work = Work::create(
			array(
				'host'=>$host,
				'img'=>$img, 
				'name'=>$name, 
				'descroption'=>$des,
				'reward'=>$reward, 'status'=>$status,
				'emergency'=>$date
			));
			
			if($work)
			{
				return Redirect::route('home');
			}
		}
		else
		{
			return 'upload fail';
		}
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