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

Route::get('/', 'HomeController@showWelcome');

Route::get('/sayHello/{name?}', 'HomeController@sayHello');

Route::get('/rollDice/{guess?}', 'HomeController@rollDice');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/portfolio/weather-map', 'HomeController@showWeatherMap');

Route::get('/portfolio/simple-simon', 'HomeController@showSimpleSimon');

Route::resource('posts', 'PostsController');

Route::post('/test', function(){
    $user = new User();
    $user->email = Input::get('email');
    $user->password = Input::get('password');
    $user->first_name = Input::get('first_name');
    $user->last_name = Input::get('last_name');
    $user->username = Input::get('username');
    $user->location = Input::get('location');
    $user->save();
    return 'success!';
});
