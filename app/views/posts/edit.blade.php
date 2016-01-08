@extends('layouts.master')

@section('title', 'Edit Post')

@section('content')
    <div class="container">
        <form action="{{ action('PostsController@update', $post->id) }}" method="PUT">
            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" name="title" type="text" class="form-control" value="{{{ $post->title }}}">
            </div>
            <div class="form-group">
                <label for="image">Image (optional)</label>
                <input id="file" type="file">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" rows="10" name="content" id="content">{{{ $post->content }}}</textarea>
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
@stop
