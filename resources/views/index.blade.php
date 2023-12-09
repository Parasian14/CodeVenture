@extends('layouts.main')

@section('title')
    <title>CodeVenture | Home</title>
@endsection

@section('content')

    <div class="container-fluid banner" id="intro">
        <div class="container banner-content col-lg-8">
            <div class="text-center">
                <p class="display-1 fw-semibold">
                    Codeventure
                </p>
                <figcaption class="blockquote">
                    <small class="lead text-light"><em>Adventure in Every Line of Code</em></p>
                </figcaption>
                <blockquote class="blockquote">
                    <p class="lead fw-light">Selamat datang di Codeventure, tempat seru buat kamu yang pengen jago di
                        dunia IT!
                        Di sini, kita
                        punya rute belajar yang oke banget buat pemula atau yang udah pengalaman. Mau jadi coder hkamul,
                        jago jaringan, atau ahli keamanan siber? Tenang, kita punya panduan lengkapnya. Dengan kursus
                        seru,
                        proyek praktis, dan bimbingan dari para ahli, kamu bakal dapet ilmu dan skill yang dibutuhin
                        buat
                        sukses di dunia IT yang terus berkembang. Ayo, gabung sama kita di Codeventure, dan mari kita
                        jalanin petualangan IT bareng!</p>
                </blockquote>
            </div>
        </div>
    </div>

    <section class="bg-warning">
        <div class="container-lg">
            <div class="text-center text-light mb-1">
                <h1 class="fw-bold fs-1">Learning Path</h1>
                <p class="lead fs-2">Telusuri learning path yang kami miliki</p>
            </div>
            <!-- Coba ganti jadi button tanpa nambah gap di foto -->
            <div class="row g-0 justify-content-center justify-content-md-evenly">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach($lps as $lp)
                        <div class="col">
                            <div class="card">
                                <img src="{{ $lp->image }}" class="card-img-top"
                                    alt="Learning Path">
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $lp->nama }}</h5>
                                    <p class="card-text text-center">{{ $lp->deskripsi }}</p>
                                    <div class="text-center mb-2">
                                        <a href="{{ route('LearningPath.show',['lp_nama'=>$lp->nama]) }}" class="btn btn-lg btn-danger">Pelajari</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-5">
                    <a href="/learning_path" class="btn btn-lg btn-danger">Telusuri lebih lanjut</a>
                </div>
            </div>
    </section>

@endsection  