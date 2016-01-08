@extends('layouts.master')

@section('title', 'Create A New Post')

@section('content')
<div class="container">
    <h1>New Post</h1>
    <form action="{{ action('PostsController@store') }}" method="POST">
        <div class="form-group">
            <label for="title">Title</label>
            <input id="title" name="title" type="text" class="form-control" value="{{{ Input::old('title') }}}">
        </div>
        <div class="form-group">
            <label for="image">Image (optional)</label>
            <input id="file" type="file">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" rows="10" name="content" id="content">{{{ Input::old('content') }}}</textarea>
        </div>
        <input type="submit" class="btn btn-primary">
    </form>
</div>
@stop
