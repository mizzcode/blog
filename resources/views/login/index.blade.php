@extends('layout.main')

@section('container')
    <div class="login">
        <h1 class="text-center">Welcome</h1>
        <form class="needs-validate login" action="/login" method="post">
            @csrf
            <div class="form-group">
                <label class="form-label" for="username">Username</label>
                <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" autofocus required>
                @error('username')
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
            <div class="form-group me">
                <input class="form-check-input" type="checkbox" name="remember">
                <label class="form-check-label"for="checkbox"><small>Remember Me</small></label>
            </div>
            <input class="btn btn-success w-100" type="submit" value="Login">
        </form>
        <small class="d-block text-center mt-4">Not a member yet? <a href="/register" class="text-decoration-none">Register With Us</a></small>
    </div>
@endsection