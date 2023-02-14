

@extends('layouts.main')

@section('konten')
    <main id="main">
        <div class="container"><br><br><br>

            <img src="https://source.unsplash.com/900x400?{{ $post->category->name}}" class="card-img-top" alt="...">
            <br><br>
            <h1 class="mb-5">{{ $post->title }}</h1>
            <p>By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>  in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}   </a></p>
            {!! $post->body !!}
            <br><br>
                <a href="/blog"><button class="btn btn-primary">back to blog </button> </a>

            <br><br><br>
        </div>
        
    </main>
@endsection
