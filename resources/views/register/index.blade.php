@extends('layout.main')

@section('container')
<div class="register">
    <h1 class="text-center mb-sm-4">Welcome</h1>
    <form class="needs-validate login" action="/register" method="post">
        @csrf
        <div class="form-group">
            <label class="form-label" for="username">Nama Lengkap</label>
            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group username">
            <label class="form-label" for="username">Username</label>
            <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" value="{{ old('username') }}" required>
            @error('username')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="email">Email</label>
            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group pw">
            <label class="form-label" for="password">Password</label>
            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <input class="btn btn-success w-100" type="submit" value="Register">
    </form>
    <small class="d-block text-center mt-4 mb-sm-3">Already have an account? <a href="/login" class="text-decoration-none">Login</a></small>
</div>
@endsection