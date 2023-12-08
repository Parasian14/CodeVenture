@extends('layouts.main')

@section('title')
    <title>Register</title>
@endsection
    
@section('css')
    <link rel="stylesheet" href="assets/CSS/register.css">
@endsection

@section('content')
    <main class="form-signin w-100 m-auto">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="text-center">
                <img class="mb-4" src="assets/LOGO.png" alt="" width="128">
                <h1 class="h3 mb-4 fw-semibold">Register</h1>
            </div>

            <h5 class="mb-3 fw-semibold">Username & Password</h5>
            <div class="form-floating">
                <input type="text" class="form-control atas" id="floatingInput" name = 'username' placeholder="User" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control bawah" id="floatingPassword" name = 'password' placeholder="Password" 
                    pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*\d)[A-Za-z\d]{8,}" required>
                <label for="floatingPassword">Password</label>
                <div id="isiHelp" class="form-text my-3 text-danger"><em>Minimal panjang password 8, kombinasi huruf
                        besar dan kecil, serta
                        angka.</em></div>
            </div>

            <h5 class="mb-3 fw-semibold">Nama</h5>
            <div class="form-floating">
                <input type="text" class="form-control atas" id="floatingInput" name = 'nama_depan' placeholder="Nama Depan" required>
                <label for="floatingInput">Nama Depan</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control bawah" id="floatingInput" name = 'nama_belakang' placeholder="Nama Belakang" required>
                <label for="floatingInput">Nama Belakang</label>
            </div>

            <h5 class="mb-3 fw-semibold">Kontak</h5>
            <div class="form-floating">
                <input type="tel" class="form-control atas" id="floatingInput" name = 'telepon' placeholder="No. Telepon"
                    pattern="[0-9]{10,}" required>
                <label for="floatingInput">No. Telepon</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control bawah" id="floatingInput" name = 'email' placeholder="Email" required>
                <label for="floatingInput">Email</label>
            </div>

            <div class="checkbox my-3">
                <label>
                    <input type="checkbox" value="terms-n-req" required> Saya sudah membaca & setuju dengan <a
                        href="#">syarat dan
                        ketentuan.</a>
                </label>
            </div>
            <button class="btn btn-warning w-100 py-2 fw-semibold" type="submit"> {{ __('Register') }} </button>
            <p class="mt-5 mb-3 text-body-secondary text-center">&copy; Kelompok 9 RPL 2023.</p>
        </form>
    </main>

    <hr>
@endsection
