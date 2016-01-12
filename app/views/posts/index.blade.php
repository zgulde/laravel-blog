@extends('layouts.master')

@section('title', 'Viewing Blog Posts')

@section('top-script')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
@stop

@section('bottom-script')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@stop

@section('nav-links')
    <a href="{{ action('HomeController@showLanding') }}">Home</a>
    <a href="{{ action('PostsController@index') }}" class="nav-current">Blog</a>
    <a href="{{ action('PostsController@create') }}">New Post</a>
    <a href="{{ action('HomeController@showLanding') }}#contact">Contact</a>
@stop

@section('content')
    @include('partials.navbar')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2>
                        <a href="{{{action('PostsController@show', Str::slug($post->title) )}}}">{{{ $post->title }}}</a>
                     </h2>
                    @if($post->image)
                        <img src="{{{ $post->image }}}" alt="{{{ $post->title . ' image' }}}" class="pull-left" style="max-width: 20%; margin: 0 15px 1px 0">
                    @endif
                    <p> {{{ $post->content }}} </p>
                    <p>Created {{{ $post->created_at->toFormattedDateString() }}} </p>
                </div>
            </div>
        @endforeach
    </div>
@stop
