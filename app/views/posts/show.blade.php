@extends('layouts.master')

@section('title')
    Viewing Post {{{ $post->id }}}
@stop

@section('top-script')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
@stop

@section('bottom-script')
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2> {{{ $post->title }}} </h2>
            @if($post->image)
                <img src="{{{ $post->image }}}" alt="{{{ $post->title . ' image' }}}" class="pull-left" style="max-width: 40%; margin: 0 15px 1px 0">
            @endif
            <p>{{{ $post->content }}}</p>
        </div>
    </div>
</div>

@stop
