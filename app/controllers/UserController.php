<?php
class UserController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function showProfile($id)
    {
        $user = User::find($id);

        return View::make('users', array('users' => $user));
    }
    public function test()
    {

    	$data = Input::get('test1');
    	// $test = $data -> test1;
    return $data;
    }

}
?>