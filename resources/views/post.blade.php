@extends('layouts.main')
@section('container')
<article>
    <h2 class="mb-5">{{ $post->title }}</h2>
    {{-- {{ $post->author }} --}}
    {!! $post->body !!} 
    <br>
    <a href="/posts">Back to blog</a>
</article>

@endsection

