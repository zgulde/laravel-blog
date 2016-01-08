@extends('layouts.master')

@section('title', 'Viewing Blog Posts')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2> {{{ $post['title'] }}} </h2>
                    @if($post['image'])
                        <img src="{{{ $post['image'] }}}" alt="{{{ $post['title'] . ' image' }}}" class="pull-left" style="max-width: 20%; margin: 0 15px 1px 0">
                    @endif
                    <p> {{{ $post['content'] }}} </p>
                    <a href="/posts/{{{ $post['id'] }}}">View Post</a>
                </div>
            </div>
        @endforeach
    </div>
@stop
