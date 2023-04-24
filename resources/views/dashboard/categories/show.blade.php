@extends('dashboard.layouts.main')

@section('container')
<h1 class="my-5">My Category</h1>

    <div class="container">
        <div class="row">
            
            <div class="col-md-4 mb-4">
                <a href="/blog?category={{ $category->slug }}">
                <div class="card text-bg-dark">

                    @if ($category->image != null) 
                        <img src="{{ asset('storage/' . $category->image) }}" class="card-img" alt="{{ $category->name }}">
                    @else
                        <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                    @endif

                    <div class="card-img-overlay d-flex align-items-center justify-content-center">
                      <h5 class="card-title fs-2">{{ $category->name }}</h5>
                    </div>
                  </div>
                </a>
            </div>
            
            
        </div>
    </div>
@endsection