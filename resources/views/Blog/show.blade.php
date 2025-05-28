
    
        
@extends('base')

@section('title' ,'mon blog')

@section('content')
    <article>
        <h1>{{ $post->title }}</h1>
        <p>
            {{ $post->Content }}
        </p>
    </article>
@endsection
    