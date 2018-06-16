@extends('theme::layout')

@section('content')
    @each('theme::post-block', $posts, 'post')

    {{ $posts->links() }}
@endsection
