@extends('template')
@section('title')
    Meu Blog
@stop
@section('content')
    <h1>Blog - Posts</h1>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post }}</li>
        @endforeach
    </ul>
@stop