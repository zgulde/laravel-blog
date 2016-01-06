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

Route::get('/fizzbuzz/{n?}', function($n = 100)
{
    $fb = [];
    for ($i = 1; $i <= $n; $i++){
        $msg = '';
        if ($i % 3 == 0) $msg .= 'fizz';
        if ($i % 5 == 0) $msg .= 'buzz';
        $fb[] = ($msg == '') ? $i: $msg;
    }
    return implode('<br/>', $fb);
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
    return 'awesome_polished_resume.pdf';
});

Route::get('/portfolio', function()
{
    return 'shiny_flashy_portfolio_page.html';
});

Route::get('/rolldice/{guess}', function($guess)
{
    $data = [
        'roll' => rand(1,6),
        'guess' => $guess
    ];

    return View::make('roll-dice')->with($data);
});
