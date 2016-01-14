@extends('layouts.master')

@section('title', 'Edit Post')

@section('top-script')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
@stop

@section('bottom-script')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
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
        <h2>Editing <strong>{{{ $post->title }}}</strong> </h2>
        {{ Form::model($post, [ 'action' => ['PostsController@update', $post->id], 'method' => 'PUT' ]) }}
            {{ Form::token() }}

            <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, ['class' => 'form-control']) }}
            </div>
            <div class="form-group">
                {{ Form::label('file', 'Image (optional)', ['class' => 'btn btn-default']) }}
                {{ Form::file('file',['style' => 'display: none;']) }}
                {{ Form::button('Remove', ['id' => 'remove-img', 'class' => 'btn btn-danger']) }}
            </div>
            <div class="form-group">
                {{ Form::label('content', 'Content') }}
                {{ Form::textarea('content', null, ['class' => 'form-control']) }}
            </div>
            <input type="submit" class="btn btn-primary">
        {{ Form::close() }}
    </div>
@stop
