@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>
    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/posts?category={{ $category->slug }}" class="text-decoration-none text-white">
                        <div class="card bg-dark text-white mb-2">
                            <img src="https://picsum.photos/500/400?random={{ $category->name }}" class="card-img"
                                alt="Category Image">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-2 fs-10"
                                    style="background-color: rgba(0, 0, 0, 0.1)">
                                    {{ $category->name }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
