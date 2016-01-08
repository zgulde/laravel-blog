@extends('layouts.master')

@section('title', 'Viewing Blog Posts')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2>
                        <a href="{{{action('PostsController@show', $post->id)}}}">{{{ $post->title }}}</a>
                     </h2>
                    @if($post['image'])
                        <img src="{{{ $post->image }}}" alt="{{{ $post->title . ' image' }}}" class="pull-left" style="max-width: 20%; margin: 0 15px 1px 0">
                    @endif
                    <p> {{{ $post->content }}} </p>
                    <p>Created {{{ $post->created_at->toFormattedDateString() }}} </p>
                </div>
            </div>
        @endforeach
    </div>
@stop
