

@extends('layouts.main')

@section('konten')
    <main id="main">
        <div class="container"><br><br><br>

            <h1 class="mb-5">{{ $post->title }}</h1>
            {{{$post->body}}}
            <br><br>
                <a href="/blog"><button class="btn btn-primary">back to blog </button> </a>

            <br><br><br>
        </div>
        
    </main>
@endsection
