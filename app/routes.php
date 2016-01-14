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

Route::get('/', 'HomeController@showLanding');

Route::get('/sayHello/{name?}', 'HomeController@sayHello');

Route::get('/rollDice/{guess?}', 'HomeController@rollDice');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/weather-map', 'HomeController@showWeatherMap');

Route::get('/simple-simon', 'HomeController@showSimpleSimon');

Route::resource('posts', 'PostsController');

Route::get('/login', 'HomeController@getLogin');

Route::post('/login', 'HomeController@postLogin');

Route::get('/logout', 'HomeController@getLogout');
