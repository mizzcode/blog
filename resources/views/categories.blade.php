@extends('layout.main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4 mb-4">
                <a href="/blog?category={{ $category->slug }}">
                <div class="card text-bg-dark">
                    <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center">
                      <h5 class="card-title fs-2">{{ $category->name }}</h5>
                    </div>
                  </div>
                </a>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection