@extends('layouts.master')

@section('top-script')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
@stop

@section('title', '404 Page Not Found')

@section('nav-links')
    <a href="{{ action('HomeController@showLanding') }}">Home</a>
    <a href="{{ action('PostsController@index') }}">Blog</a>
    <a href="{{ action('HomeController@showLanding') }}#contact">Contact</a>
@stop

@section('content')
    @include('partials.navbar')
    <div class="container">
        <h1>Oops, something went wrong.</h1>
    </div>
@stop
