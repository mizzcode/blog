@extends('layout.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center">
      <div class="col-md-4">
    <form class="d-flex mb-4 float-end" role="search" action="/blog">
      @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
        @elseif (request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
      @endif
      <input class="form-control me-2" type="search" placeholder="Search..." name="search" value="{{ request('search') }}">
      <button class="btn btn-primary" type="submit">Search</button>
    </form>
      </div>
    </div>

    @if ($posts->count())
    <div class="card mb-5">
        <img src="https://source.unsplash.com/1000x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">

          <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-black">{{ $posts[0]->title }}</a></h3>

          <p>
            <small class="text-body-secondary">
                By <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
            </small>
            
        </p>

          <p class="card-text">{{ $posts[0]->excerpt }}.</p>
          <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-outline-info">Read More</a>
        </div>
      </div>

    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-4">
          <div class="card">
            <div class="position-absolute text-white bg-dark rounded p-1" style="background-color: rgba(0, 0, 0, 0.7)">
              <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
            </div>
            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p>
                <small class="text-body-secondary">
                    By <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                </small>
            </p>
              <p class="card-text">{{ $post->excerpt }}</p>
              <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-outline-info">Read More</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    @else
      <p class="text-center fs-4">404 | Posts Not Found</p>
    @endif

    <div class="d-flex justify-content-center">
      {{ $posts->links() }}
    </div>
    
@endsection