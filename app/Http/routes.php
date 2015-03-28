<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| 
| Syntax: get('page', 'controller@method_in_controller')
*/

/* -- DEFAULT ROUTES --- */
/*
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index'); 

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/

/* -- LESSON 4 --- */
/* Route::get('/', 'HomeController@index'); */

/* -- LESSON 5 -- */
/*
Route::get('/', 'PagesController@index');
get()
Route::get('about', 'PagesController@about');
*/

/* -- LESSON 6 -- */
/* Various ways of routing pages:
Route::get()
$router->get()
*/

/* Helpers.php contains how to use functions such as get() */
get('songs', 'SongsController@index');
get('songs/{id}', 'SongsController@show');

