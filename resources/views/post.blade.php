@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $post->title }}</h2>
    
            <p>By. <a href="/authors/{{ $post->author->username}}" class="text-decoration-none">{{ $post->author->name }}</a> In <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            <img class="card-img-top" src="https://source.unsplash.com/1200x400?{{ $post->Category->name }}" alt="{{ $post->Category->name }}" class="img-fluid">

            <article class="my-3 fs-5">
            {!! $post->body !!} 
            </article>

            
            <a href="/posts" class="d-block mt-3">Back to blog</a>

        </div>
    </div>
</div>


 


@endsection

