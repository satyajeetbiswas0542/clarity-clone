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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::group(array('prefix' => 'api/v1'), function() {
    //Route::resource('users', 'UserController');
		Route::get('/test/{userid}', 'API\DashboardController@testAPICall');
});

Route::group(['middleware' => ['web']], function () {
  	Route::get('/dashboard', 'DashboardController@index');
});

Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
