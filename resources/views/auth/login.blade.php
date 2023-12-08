@extends('layouts.main')

@section('title')
    <title>Login</title>
@endsection

@section('css')
    <link rel="stylesheet" href="assets/CSS/login.css">
@endsection

@section('content')
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="text-center">
                <img class="mb-4" src="assets/LOGO.png" alt="" width="128">
                <h1 class="h3 mb-3 fw-semibold">Sign In</h1>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="User" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <p class="text-center">Belum punya akun?<a href="{{ route('register') }}"> Daftar sekarang.</a></p>
            <button class="btn btn-warning w-100 py-2 fw-semibold" type="submit">Login</button>
            <p class="mt-5 mb-3 text-body-secondary text-center">&copy; Kelompok 9 RPL 2023.</p>
        </form>
    </main>    

    <hr>
@endsection