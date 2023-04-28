

@extends('layout.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-5">{{ $post->title }}</h2>       
                
                <p>By <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                
                @if ($post->image != null)
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mb-3" alt="{{ $post->category->name }}">
                @else
                <img src="https://source.unsplash.com/1100x500?{{ $post->category->name }}" class="card-img-top mb-3" alt="{{ $post->category->name }}">
                @endif

        <article class="my-3 fs-5">
            {!! $post->body !!}
        </article>

        <a href="/blog" class="btn btn-outline-danger mt-5 d-block mb-4">Back To Blog</a>
    </div>
        </div>
    </div>
@endsection