@extends('base')

@section('title' ,'mon blog')

@section('content')
    <h1>Mon Blog</h1>
    @foreach($posts as $post)
    <article>
        <h2>{{ $post->title }}</h2>
        <p>
            {{ $post->Content }}
        </p>
        <p>
            <a href="{{ route('blog.show',['slug'=>$post->slug,'id'=>$post->id]) }}" class="btn btn-primary">Lire la Suite</a>
        </p>
    </article>
    @endforeach
@endsection
        
 