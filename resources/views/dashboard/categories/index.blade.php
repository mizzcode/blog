@extends('dashboard.layouts.main')

@section('container')

<h2 class="my-4">My List Categories</h2>
<a href="{{ route('dashboard-categories.create') }}" class="btn btn-success mb-3">Create new category</a>
<div class="table-responsive col-lg-6">
  <table class="table table-striped table-sm text-center table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <a href="{{ route('dashboard-categories.show', ['category' => $category->slug]) }}" class="badge bg-info"><i data-feather='eye'></i></a>
                <a href="{{ route('dashboard-categories.edit', ['category' => $category->slug]) }}" class="badge bg-warning"><i data-feather='edit'></i></a>
                <form action="{{ route('dashboard-categories.destroy', ['category' => $category->slug]) }}" class="d-inline" method="post">
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

