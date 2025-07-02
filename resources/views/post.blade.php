@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-white">
                <h1 class="mb-3 text-white">{{ $post->title }}</h1>
                <p>By. <a href="/posts?author={{ $post->author->username }}"
                        class="text-decoration-none text-white">{{ $post->author->name }}</a> in <a
                        href="/posts?category={{ $post->category->slug }}"
                        class="text-decoration-none text-white">{{ $post->category->name }}</a></p>
                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <img src="https://picsum.photos/1200/400?random={{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class="img-fluid">
                @endif
                <article class="my-3 fs-5 text-white">
                    {!! $post->body !!}
                </article>
                <a href="/posts" class="d-block mt-3 text-white">Back to posts</a>
            </div>
        </div>
    </div>
@endsection
