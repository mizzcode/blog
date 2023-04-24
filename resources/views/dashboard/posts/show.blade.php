@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-md-8">
            <h2 class="mb-4">{{ $post->title }}</h2>       
            
            <a href="{{ route('dashboard-posts.index') }}" class="btn btn-success mb-2"><i data-feather='arrow-left'></i> Back to my posts</a>
            <a href="{{ route('dashboard-posts.edit', ['post' => $post->slug]) }}" class="btn btn-warning mb-2"><i data-feather='edit'></i> Edit</a>
            <form action="{{ route('dashboard-posts.destroy', ['post' => $post->slug]) }}" class="d-inline" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger mb-2" onclick="return confirm('Are you sure want to delete it ?')"><i data-feather='x-circle'></i> Delete</button>
            </form>
            
            @if ($post->image != null)
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mb-3" alt="{{ $post->category->name }}">
            @else
            <img src="https://source.unsplash.com/1100x500?{{ $post->category->name }}" class="card-img-top mb-3" alt="{{ $post->category->name }}">
            @endif


    <article class="my-3 fs-5">
        {!! $post->body !!}
    </article>
</div>
    </div>
</div>

@endsection