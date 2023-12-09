@extends('layouts.main')

@section('title')
    <title>Profil</title>
@endsection

@section('content')
    <main class="d-flex flex-row col-md-9 ms-sm-5 col-lg-10 align-content-between">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
            <a href="/"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="assets/Resources/logo.png" class="me-2 rounded-circle" width="50" height="50" alt="Profile Picture">
                <span class="fs-4">{{ Auth::user()->nama_depan }} {{ Auth::user()->nama_belakang }}</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="profil.html" class="nav-link aktif bg-warning text-light" aria-current="page">
                        <svg class="bi pe-none me-2" width="24" height="24">
                            <use xlink:href="#profil" />
                        </svg>
                        Profil
                    </a>
                </li>
                <li>
                    <a href="{{ route('Progress.index') }}" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="24" height="24">
                            <use xlink:href="/progress" />
                        </svg>
                        Progress
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="24" height="24">
                            <use xlink:href="#logout" />
                        </svg>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
        <div class="ms-5 mt-5 col-6">
            <form method="post" action="{{ route('profil.update') }}" class="d-flex flex-column justify-content-start">
                @csrf
                @method('patch')
                <h3>Nama</h3>
                <div class="mb-3">
                    <label for="nama_depan" class="form-label">Nama Depan</label>
                    <input type="text" class="form-control" id='nama_depan' name = 'nama_depan' value="{{ $user->nama_depan }}">
                </div>
                <div class="mb-3">
                    <label for="namaBelakang" class="form-label">Nama Belakang</label>
                    <input type="text" class="form-control" id="namaBelakang" name = "nama_belakang" value="{{ $user->nama_belakang }}">
                </div>
                <h3>Kontak</h3>
                <div class="mb-3">
                    <label for="notel" class="form-label">No. Telepon</label>
                    <input type="tel" class="form-control" pattern="[0-9]{10,}" id="notel" name = "telepon"
                    value="{{ $user->telepon }}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name = "email" value="{{ $user->email }}">
                </div>
                <div class="col-4">
                    <button class="btn btn-success w-100 py-2 fw-semibold" type="submit">Save</button>
                </div>
            </form>
        </div>
    </main>
@endsection