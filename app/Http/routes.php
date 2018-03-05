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


/*
 * admin root
 */

Route::group(['middleware' => ['auth','adminAuth']], function (){
Route::get('manage-articles', 'articleAjaxController@managearticleAjax');
Route::resource('article-ajax', 'articleAjaxController');
});


/*
 * user root
 */

//get home page with articles
Route::get('/', 'HomeController@index');


//get article by is
Route::get('/article/{id?}', 'HomeController@getArticleById');


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
