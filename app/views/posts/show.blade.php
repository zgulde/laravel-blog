@extends('layouts.master')

@section('title')
    Viewing Post {{{ $post->id }}}
@stop

@section('top-script')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
@stop

@section('bottom-script')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>

    $('#delete-btn').click(function(e){
        e.preventDefault();
        if (confirm('Are you sure you want to delete this post?')) {
            $('.delete-post form').submit();
        }
    });

    </script>
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
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <h2> 
                {{{ $post->title }}} 
                <small class="pull-right">
                    Created
                </small>
            </h2>
            @if($post->image)
                <img src="{{{ $post->image }}}" alt="{{{ $post->title . ' image' }}}" class="pull-left" style="max-width: 40%; margin: 0 15px 1px 0">
            @endif
            <p>{{{ $post->content }}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1 delete-post">
            <a class="btn btn-warning" href=" {{ action('PostsController@edit', $post->id) }} ">Edit</a>
            <a href="#" id="delete-btn" class="btn btn-danger">Delete</a>

            {{ Form::open([ 'action' => ['PostsController@destroy', $post->id], 'method' => 'DELETE' ]) }}
                {{ Form::submit('Delete', [ 'class' => 'btn btn-danger' ]) }}
            {{ Form::close() }}
        </div>
    </div>
</div>

@stop
