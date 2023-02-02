

@extends('layouts.main')

@section('konten')
    <main id="main">
        <div class="container"><br><br><br>

            <h1 class="mb-5">{{ $post['title'] }}</h1>
            <h6>By: {{ $post["author"] }}</h6>
            <p class="mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium praesentium at repudiandae
                excepturi animi amet ipsum sint odit, error, incidunt voluptas! Deleniti commodi minus a animi harum consectetur
                eaque eligendi temporibus doloribus, dolorum ea, sint necessitatibus quibusdam cupiditate itaque vero debitis
                deserunt earum! Officia deserunt, quis est facilis illum accusantium.</p>
    
                <a href="/blog"><button class="btn btn-primary">back to blog </button> </a>

            <br><br><br>
        </div>
        
    </main>
@endsection
