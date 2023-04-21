@extends('dashboard.layouts.main')

@section('container')

<h2 class="my-4">My List Posts</h2>
<a href="/dashboard/posts/create" class="btn btn-success mb-3">Create new post</a>
<div class="table-responsive col-lg-7">
  <table class="table table-striped table-sm ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i data-feather='eye'></i></a>
                <a href="" class="badge bg-warning"><i data-feather='edit'></i></a>
                <form action="{{ route('dashboard-posts.destroy', ['post' => $post->slug]) }}" class="d-inline" method="post">
                  @csrf
                  @method('delete')
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure want to delete it ?')"><i data-feather='x-circle'></i></button>
                </form>
            </td>
          </tr>      
        @endforeach
    </tbody>
  </table>
</div>

@endsection

