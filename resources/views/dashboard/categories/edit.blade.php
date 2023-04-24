@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2 mt-2">Edit Category</h1>
  </div>

  <div class="col-lg-6">
    <form method="post" action="{{ route('dashboard-categories.update', ['category' => $category->slug]) }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Name Category</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus value="{{ old('name', $category->name) }}">
          @error('name')  
          <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $category->slug) }}" readonly>
          @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        </div>
        <div class="mb-3">
          <label for="image" class="form-label fs-6">Image</label>

            @if ($category->image != null)
            <img src="{{ asset('storage/' . $category->image) }}" class="img-preview img-fluid mb-2 d-block col-sm-5">
            @else
            <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="img-preview img-fluid mb-2 d-block col-sm-5">
            @endif

          <input class="form-control" id="image" type="file" name="image" onchange="previewImage()">
        </div>
        <div class="d-flex mb-4">
          <a href="{{ route('dashboard-categories.index') }}" class="btn btn-danger">Back to my categories</a>
          <button type="submit" class="btn btn-primary ms-auto">Update Category</button>
        </div>
      </form>
  </div>

  <script>
    // untuk membuat slug dari name otomatis ketika name di ketik
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');

    name.addEventListener("keyup", function() {
      slug.value = name.value.replace(/ /g,"-").toLowerCase();
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