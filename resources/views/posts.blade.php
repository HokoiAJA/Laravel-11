@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center text-white">{{ $title }}</h1>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-dark" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mb-3">
        @if ($posts->count())
            <div class="card mb-3 bg-dark text-white">
                @if ($posts[0]->image)
                    <div style="max-height: 400px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                            class="img-fluid">
                    </div>
                @else
                    <img src="https://picsum.photos/1200/400?random={{ $posts[0]->category->name }}" class="card-img-top"
                        alt="{{ $posts[0]->category->name }}">
                @endif

                <div class="card-body text-center">
                    <h3 class="card-title text-white"><a href="/posts/{{ $posts[0]->slug }}"
                            class="text-decoration-none text-white">{{ $posts[0]->title }}</a></h3>
                    <p>
                        <small class="text-light">
                            By. <a href="/posts?author={{ $posts[0]->author->username }}"
                                class="text-decoration-none text-white">{{ $posts[0]->author->name }}</a> in
                            <a href="/posts?category={{ $posts[0]->category->slug }}"
                                class="text-decoration-none text-white">{{ $posts[0]->category->name }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text text-white">{{ $posts[0]->excerpt }}</p>
                    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                </div>
            </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4">
                    <div class="card bg-dark text-white">
                        <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a
                                href="/posts?category={{ $post->category->slug }}"
                                class="text-white text-decoration-none">{{ $post->category->name }}</a>
                        </div>
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                class="img-fluid">
                        @else
                            <img src="https://picsum.photos/500/400?random={{ $post->category->name }}"
                                class="card-img-top" alt="{{ $post->category->name }}">
                        @endif

                        <div class="card-body">
                            <h5 class="card-title text-white"><a href="/posts/{{ $post->slug }}"
                                    class="text-decoration-none text-white">{{ $post->title }}</a></h5>
                            <p>
                                <small class="text-light">
                                    By. <a href="/posts?author={{ $post->author->username }}"
                                        class="text-decoration-none text-white">{{ $post->author->name }}</a> in <a
                                        href="/posts?category={{ $post->category->slug }}"
                                        class="text-decoration-none text-white">{{ $post->category->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text text-white">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@else
    <p class="text-center fs-4 text-white">No post found.</p>
    @endif
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>

@endsection
