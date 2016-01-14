@extends('layouts.master')

@section('title', 'Please Log In')

@section('top-script')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
@stop

@section('nav-links')
    <a href="{{ action('HomeController@showLanding') }}">Home</a>
    <a href="{{ action('PostsController@index') }}">Blog</a>
    <a href="{{ action('PostsController@create') }}">New Post</a>
    <a href="{{ action('HomeController@showLanding') }}#contact">Contact</a>
@stop


@section('content')
    @include('partials.navbar')
    <div class="container">

        <h1>Log In</h1>

        {{ Form::open(['action' => 'HomeController@postLogin']) }}

            {{ Form::label('email', 'Email') }}
            {{ Form::text('email') }}

            {{ Form::label('password', 'Enter Password') }}
            {{ Form::password('password') }}

            {{ Form::submit('Log In') }}

        {{ Form::close() }}

    </div>

@stop
