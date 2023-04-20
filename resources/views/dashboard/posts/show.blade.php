@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-md-8">
            <h2 class="mb-4">{{ $post->title }}</h2>       
            
            <a href="/dashboard/posts" class="btn btn-success mb-2"><i data-feather='arrow-left'></i> Back to my posts</a>
            <a href="" class="btn btn-warning mb-2"><i data-feather='edit'></i> Edit</a>
            <a href="" class="btn btn-danger mb-2"><i data-feather='x-circle'></i> Delete</a>
            
            <img src="https://source.unsplash.com/1100x500?{{ $post->category->name }}" class="card-img-top mb-3" alt="{{ $post->category->name }}">

    <article class="my-3 fs-5">
        {!! $post->body !!}
    </article>
</div>
    </div>
</div>

@endsection