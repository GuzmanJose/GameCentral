<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MyWelcome@welcome');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    
    Route::auth();
    Route::get('avatar', 'AvatarController@myAvatar');
    Route::get('/home', 'HomeController@index');
    Route::get('/home', 'AvatarController@showAvatar');
    Route::post('/home', 'AvatarController@createAvatar');
    Route::get('/comments', 'CommentsController@index');
    Route::get('/comments', 'CommentsController@showComments');
    Route::post('comments', 'CommentsController@publish');
    Route::get('allUsers', 'AllusersController@index');
    Route::get('allUsers/{user}', 'AllusersController@show');

  
});
