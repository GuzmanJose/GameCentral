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
Route::get('OutputJson', 'outputJsonController@outPut');
Route::get('portfolio', 'portfolioController@getPortfolio');  // Experimental!!!!!!
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

    Route::get('/home', 'HomeController@index');
    
    Route::get('avatar', 'AvatarController@myAvatar');
    Route::post('/home', 'AvatarController@createAvatar');

    Route::get('/comments', 'CommentsController@index');
    Route::get('/comments', 'CommentsController@showComments');
    Route::post('comments', 'CommentsController@publish');

    Route::get('allUsers', 'AllusersController@index');
    Route::get('allUsers/{id}', 'AllusersController@show');
    Route::post('allUsers/{id}', 'AllusersController@postUserComments');


    Route::get('allIssues', 'AllIssuesController@index');
    Route::get('allIssues', 'AllIssuesController@showAvatar');
    Route::get('uploadIssue', 'AllIssuesController@indexUploadIssue');

    Route::get('allGames', 'AllGamesController@showAvatar');
    Route::get('uploadGame', 'AllGamesController@indexUploadGame');

    Route::get('myGames', 'myGamesController@index');
    Route::get('myIssues', 'myIssuesController@index');


    Route::post('/game', 'gameController@storeGame');
    Route::get('game/{id}', 'gameController@showGame');
    Route::post('game/{id}', 'gameController@postUserCommentsGames');

    
    Route::post('/issue', 'issueController@storeIssue');
    Route::get('issue/{id}', 'issueController@showIssue');
    Route::post('issue/{id}', 'issueController@postUserCommentsIssues');
    
  
});
