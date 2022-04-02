@extends('layout.main')

@section('container')
    <article class="mt-5 mb-2">
            <h3>{{ $post->title }}</h3>
            <p>By: <a href="/post/penulis/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            {!! $post->body !!}
            
        <a href="/posts">Kembali ke halaman posts</a>
    </article>
@endsection