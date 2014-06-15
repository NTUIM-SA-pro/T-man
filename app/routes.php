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

Route::resource('home', 'HomeController');

Route::any('home_error', array(
	'as'=>'home-error',
	'uses'=>'HomeController@home_error'
));

// 登出
Route::get('logout', 'UserController@logout');

// 註冊
Route::post('register', 'UserController@register');

// 登入
Route::post('login', 'UserController@login');

Route::resource('profile', 'ProfileController',
	array('only' => array('show')));



// 使用者登入後
Route::group(array('before' => 'auth'), function() {
	// 除了編輯個人頁面
	Route::resource('user', 'UserController',
		array('except' => array('edit')));

	Route::post('takeTask/{work_id}','WorkController@taketask');

	Route::resource('work', 'WorkController',
		array('only' => array('show')));

	Route::resource('work', 'WorkController');

	Route::post('/profile/{user_id}/uploadphoto','ProfileController@uploadphoto');

	Route::resource('user', 'UserController');

	Route::resource('profile', 'ProfileController');



	

	Route::post('/user/confirmtask','WorkController@confirmtask');

	Route::get('/profile/{user_id}/editphoto', 'ProfileController@editphotopage');
});
