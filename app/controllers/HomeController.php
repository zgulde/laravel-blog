<?php

class HomeController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showWelcome()
    {
        return View::make('hello');
    }

    public function showResume()
    {
        return View::make('resume');
    }

    public function showPortfolio()
    {
        return View::make('portfolio');
    }

    public function showSimpleSimon()
    {
        return View::make('simple-simon');
    }

    public function showWeatherMap()
    {
        return View::make('weather-map');
    }

    public function sayHello($name = 'user')
    {
        $data = ['name' => $name];
        return View::make('my-first-view')->with($data);
    }

    public function showLanding()
    {
        return View::make('main');
    }

    public function rollDice($guess = 0)
    {
        $data = [
            'roll' => rand(1,6),
            'guess' => $guess
        ];

        return View::make('roll-dice')->with($data);
    }

    public function getLogin()
    {
        return View::make('login');
    }

    public function postLogin()
    {

        $email = Input::get('email');
        $password = Input::get('password');

        if (Auth::attempt(['email' => $email, 'password' => $password]) ) {
            return Redirect::intended('/posts');
        } else {
            Session::flash('errorMessage', 'Invalid Login!');
            return Redirect::back()->withInput();
        }
    }

    public function getLogout()
    {
        Auth::Logout();
        return Redirect::action('PostsController@index');
    }
}
