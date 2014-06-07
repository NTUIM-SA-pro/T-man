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

Route::any('/home', array(
	'as'=>'home',
	'uses'=>'UsersController@home'
));
// Route::get('/', array(
// 	'as'=>'home',
// 	'uses'=>'HomeController@mail'
// ));


// Route::get('users', function()
// {
//     $users = User::all();

//     return View::make('users')->with('users', $users);
// });
Route::get('logout','UsersController@logout');
// Route::resource('users', 'UsersController');
Route::post('register','UsersController@register');
Route::post('login','UsersController@login');

Route::resource('work', 'WorkController');

Route::get('newwork',array('as'=>'newwork' ,function()
{
	return View::make('work');
}));

Route::post('createNewWork', 'WorkController@create');


Route::get('test','UsersController@test');

