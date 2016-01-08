@extends('layouts.master')

@section('title')
    Viewing Post {{{ $post->id }}}
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
