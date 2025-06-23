@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post['title'] }}</h2>
        <p>{{ $post['body'] }}</p>
    </article>
    <a href="/posts" class="d-block mt-3">Kembali ke daftar blog</a>
@endsection