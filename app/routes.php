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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/fizzbuzz/{max?}', function($max = 100)
{

    $data =
    [
        'numbers' => array_map(function($num)
        {
            $msg = '';
            if ($num % 3 == 0) $msg .= 'fizz';
            if ($num % 3 == 0) $msg .= 'buzz';
            return ($msg != '') ? $msg: $num;
        }, range(1, $max))
    ];

    return View::make('fizzbuzz')->with($data);
});

Route::get('/test', function()
{
    return View::make('hello');
});

Route::get('/sayHello/{name?}', function($name = 'user')
{
    $data = ['name' => $name];
    return View::make('my-first-view')->with($data);
});

Route::get('/resume', function()
{
    return View::make('resume');
});

Route::get('/portfolio', function()
{
    return View::make('portfolio');
});

Route::get('/rolldice/{guess}', function($guess)
{
    $data = [
        'roll' => rand(1,6),
        'guess' => $guess
    ];

    return View::make('roll-dice')->with($data);
});

Route::get('/projects/weather-map', function()
{
   return View::make('weather-map');
});

Route::get('/projects/simple-simon', function()
{
    return View::make('simple-simon');
});
