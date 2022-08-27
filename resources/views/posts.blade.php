
@extends('layouts.main')

@section('container')
@foreach ($posts as $post)
<article class="mb-5">
    <h1>
        <a href="/posts/{{ $post->slug }}">{{ $post->title }}</h1></a>
    <h5>By: {{ $post->author }}</h5>
    <p>{{ $post->excerpt }}</p>
</article>

@endforeach
@endsection

