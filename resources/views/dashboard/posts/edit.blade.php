@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 mt-2">Edit Post</h1>
  </div>

  <div class="col-lg-5">
    <form method="post" action="{{ route('dashboard-posts.update', ['post' => $post->slug]) }}" enctype="multipart/form-data">
      @method('put')
      @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus value="{{ old('title', $post->title) }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post->slug) }}">
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category_id">
            @foreach ($categories as $category)
            @if (old('category_id', $post->category_id))
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label fs-6">Image</label>
          @if ($post->image != null)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-2 d-block col-sm-9">
            @else
            <img class="img-preview img-fluid mb-2 d-block col-sm-9">
          @endif
          <input class="form-control" id="image" type="file" name="image" onchange="previewImage()">
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          @error('body')
          <p class="text-danger">{{ $message }}</p>
          @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
            <trix-editor input="body"></trix-editor>
        </div>
        <div class="d-flex mb-4">
          <a href="{{ route('dashboard-posts.index') }}" class="btn btn-danger">Back to my posts</a>
          <button type="submit" class="btn btn-primary ms-auto">Update Post</button>
        </div>
      </form>
  </div>

  <script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("keyup", function() {
      slug.value = title.value.replace(/ /g,"-").toLowerCase();
    });
    // matikan fitur tool file
    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault();
    });

     // untuk preview image ketika upload gambar
    const previewImage = () => {      
      // input image
      const image = document.querySelector('#image');
      // img preview
      const imgPreview = document.querySelector('.img-preview');

      // menggunakan object file reader
      const fileReader = new FileReader();
      fileReader.readAsDataURL(image.files[0]);

      // ketika image di load maka otomatis menambahkan atribut src di img kosongan yang udah kita ambil dengan class img-preview
      fileReader.onload = (e) => {
        imgPreview.src = e.target.result;
      }
    }
</script> 
@endsection