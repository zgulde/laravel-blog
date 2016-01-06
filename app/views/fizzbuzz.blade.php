@extends('layouts.master')

@section('title', 'fizzbuzz!')

@section('content')
    @foreach ($numbers as $n)
        <p>{{ $n }}</p>
    @endforeach
@stop
