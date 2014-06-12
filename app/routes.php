<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('home');
// });

// Route::get('users', function()
// {
//     // $users = User::all();

//     // return View::make('users')->with('users', $users);
//     return View::make('hi');
// });

Route::any('home', array(
	'as'=>'home',
	'uses'=>'HomeController@home'
));

Route::any('home_error', array(
	'as'=>'home-error',
	'uses'=>'HomeController@home_error'
));


Route::get('logout','UsersController@logout');
Route::post('register','UsersController@register');
Route::post('login','UsersController@login');

Route::resource('work', 'WorkController');







//{userid}動態拿取userid
Route::get('/user/{userid}/profile',array('as'=>'profile', 'uses'=>'profileController@get_index'));

Route::get('/user/{userid}/tasktaken','profileController@showtakenTask');

Route::get('/user/{userid}',array('as'=>'user-homepage','uses'=>'UsersController@showHomepage'));
//拿你po的專案
Route::get('/user/{userid}/task', array('uses'=>'profileController@task'));

Route::group(array('before'=>'auth'),function(){
	Route::post('createNewWork', 'WorkController@create');
	Route::get('/user/{userid}/profileModify',array('as'=>'profile_modify', 'uses'=>'profileController@get_modify'));
	Route::post('/user/{userid}/profileUpdate', array('uses'=>'profileController@post_update'));
	Route::post('takeTask/{work_id}','WorkController@taketask');
	Route::post('/user/{userid}/confirmtask','WorkController@confirmtask');
});

