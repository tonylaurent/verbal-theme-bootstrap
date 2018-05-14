@extends('theme::layout')

@section('title', config('blog.name'))
@section('description', config('blog.description'))

@section('content')
    @each('theme::post-block', $posts, 'post')
@endsection
