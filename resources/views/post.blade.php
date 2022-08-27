@extends('layouts.main')
@section('container')
<article>
    <h2 class="mb-5">{{ $post->title }}</h2>
    
    <p>By. <a href="/authors/{{ $post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a> <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    {!! $post->body !!} 
    <br>
    <a href="/posts" class="d-block mt-3">Back to blog</a>
</article>

@endsection

