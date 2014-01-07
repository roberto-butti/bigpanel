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

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@index'));
Route::get('auth/logout', array('as' => 'auth.logout', 'uses' => 'AuthController@getLogout'));
Route::get('auth/login', array('as' => 'auth.login', 'uses' => 'AuthController@getLogin'));
Route::post('auth/login', array('as' => 'auth.login.post', 'uses' => 'AuthController@postLogin'));

Route::group(array( 'before' => 'auth.admin'), function()
{
  Route::resource('resources', 'ResourcesController');
  Route::resource('projects', 'ProjectsController');
});

Route::resource('allocations', 'AllocationsController');