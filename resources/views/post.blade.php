@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post['title'] }}</h2>
        <h5>By: {{ $post['author'] }}</h5>
        <p>{{ $post['body'] }}</p>
    </article>
    <a href="/posts" class="d-block mt-3">Kembali ke daftar blog</a>
@endsection