@extends('layout.main')

@section('container')
<div class="row">
    <div class="col">
        <div class="judul">
            <h1>Halaman About</h1>
        </div>
        <div class="about pt-5">
            <h3>Nama : {{ $name }}</h3>
            <p>Email : {{ $email }}</p>
            <img src="{{ asset('img/pemrograman.jpeg') }}" alt="pemrograman" width="300">
        </div>
    </div>
</div>
@endsection