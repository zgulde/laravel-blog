@extends('layouts.master')

@section('title', 'portfolio')

@section('content')
    <div class="container">
        <h3>Here is what I've worked on...</h3>
        <ul class="list-group">
            <li>
                <a href="{{ action('HomeController@showSimpleSimon') }}">Simple Simon</a>
            </li>
            <li>
                <a href="{{ action('HomeController@showWeatherMap') }}">Weather Map</a>
            </li>
        </ul>
    </div>
@stop
