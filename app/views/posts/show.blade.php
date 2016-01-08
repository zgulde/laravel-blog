@extends('layouts.master')

@section('title')
    Viewing Post {{{ $id }}}
@stop

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2> {{{ $title }}} </h2>
            @if($image)
                <img src="{{{ $image }}}" alt="{{{ $title . ' image' }}}" class="pull-left" style="max-width: 60%; margin: 0 15px 1px 0">
            @endif
            <p>{{{ $content }}}</p>
        </div>
    </div>
</div>

@stop
