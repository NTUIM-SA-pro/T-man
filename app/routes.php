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


Route::any('home_error', array(
	'as'=>'home-error',
	'uses'=>'HomeController@home_error'
));

//登出
Route::get('logout', 'UserController@logout');


//註冊
Route::post('register', 'UserController@register');

//登入
Route::post('login', 'UserController@login');

//除了編輯個人頁面
Route::resource('user', 'UserController',
	array('except' => array('edit')));

Route::resource('profile', 'ProfileController');

//使用者登入後
Route::group(array('before' => 'auth'), function() {
	Route::resource('work', 'WorkController');

	Route::resource('user', 'UserController');

	Route::post('takeTask/{work_id}','WorkController@taketask');
	Route::post('/user/confirmtask','WorkController@confirmtask');
});

Route::get('/user/{userid}/tasktaken','ProfileController@showtakenTask');
