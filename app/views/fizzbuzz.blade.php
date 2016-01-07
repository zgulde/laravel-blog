@extends('layouts.master')

@section('title', 'fizzbuzz!')



@section('content')
    <div class="container">
    @foreach ($numbers as $n)
        <p>{{ $n }}</p>
    @endforeach
    </div>
@stop
