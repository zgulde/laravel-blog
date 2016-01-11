@extends('layouts.master')

@section('title', 'Create A New Post')

@section('top-script')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
@stop

@section('bottom-script')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@stop

@section('nav-links')
    <a href="{{ action('HomeController@showLanding') }}">Home</a>
    <a href="{{ action('PostsController@index') }}">Blog</a>
    <a href="{{ action('PostsController@create') }}" class="nav-current">New Post</a>
    <a href="{{ action('HomeController@showLanding') }}#contact">Contact</a>
@stop

@section('content')
@include('partials.navbar')
<div class="container">
    <h1>New Post</h1>
    <form action="{{ action('PostsController@store') }}" method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" name="title" type="text" class="form-control" value="{{{ Input::old('title') }}}">
        </div>
        <div class="form-group">
            <label for="file" class="btn btn-default">Image (optional)</label>
            <input id="file" type="file" style="display: none;">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" rows="10" name="content" id="content">{{{ Input::old('content') }}}</textarea>
        </div>
        <input type="submit" class="btn btn-primary">
    </form>
</div>
@stop
