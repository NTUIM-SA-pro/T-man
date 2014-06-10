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



Route::get('logout','UserController@logout');
Route::post('register','UserController@register');
Route::post('login','UserController@login');

Route::resource('work', 'WorkController');







//{userid}動態拿取userid
Route::get('/user/{userid}/profile',array('as'=>'profile', 'uses'=>'ProfileController@get_index'));



Route::get('/user/{userid}',array('as'=>'user-homepage','uses'=>'UserController@showHomepage'));
//拿你po的專案
Route::get('/user/{userid}/task', array('uses'=>'ProfileController@task'));

Route::group(array('before'=>'auth'),function(){
	Route::post('createNewWork', 'WorkController@create');
	Route::get('/user/{userid}/profileModify',array('as'=>'profile_modify', 'uses'=>'ProfileController@get_modify'));
	Route::post('profileUpdate', array('uses'=>'ProfileController@post_update'));
	Route::post('takeTask/{work_id}','WorkController@taketask');
});

