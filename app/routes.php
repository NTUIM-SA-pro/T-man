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

//首頁
Route::any('home', array(
	'as' => 'home',
	'uses' => 'HomeController@home'
));

//登出
Route::get('logout', 'UserController@logout');

//註冊
Route::post('register', 'UserController@register');

//登入
Route::post('login', 'UserController@login');

//{userid}動態拿取userid
Route::get('/user/{userid}/profile', array(
	'as' => 'profile',
	'uses' => 'ProfileController@get_index'
));

Route::get('/user/{userid}', array(
	'as' => 'user-homepage',
	'uses' => 'UserController@showHomepage'
));

//拿你po的專案
Route::get('/user/{userid}/task', array(
	'uses' => 'ProfileController@task'
));

//使用者登入後
Route::group(array('before' => 'auth'), function() {
	Route::resource('work', 'WorkController');

	Route::get('/user/{userid}/profileModify', array(
		'as'=>'profile_modify',
		'uses'=>'ProfileController@get_modify'
	));

	Route::post('/user/{userid}/profileUpdate', array(
		'uses'=>'ProfileController@post_update'
	));

	Route::post('takeTask/{work_id}','WorkController@taketask');
});
