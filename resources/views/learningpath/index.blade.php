@extends('layouts.main')

@section('title')
    <title>Learning Path | Judul Learning Path</title>
@endsection

@section('content')
    <main>

        <section class="text-center container">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="display-2 fw-light">Learning Path XXX</h1>
                    <p class="lead text-body-secondary">Something short and leading about the collection below—its
                        contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply
                        skip over it entirely.</p>
                </div>
            </div>
        </section>

        <div class="album bg-body-tertiary" id="konten">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="card col-lg-8 my-3">
                        <h5 class="card-header">1</h5>
                        <div class="card-body">
                            <h5 class="card-title">Judul Materi</h5>
                            <p class="card-text">Deskripsi materi. Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Accusantium, distinctio.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="materi.html" class="btn btn-danger">Pelajari</a>
                                <small class="text-bg-success fw-semibold rounded p-2">Done!</small>
                            </div>
                        </div>
                    </div>
                    <div class="card col-lg-8 my-3">
                        <h5 class="card-header">2</h5>
                        <div class="card-body">
                            <h5 class="card-title">Judul Materi</h5>
                            <p class="card-text">Deskripsi materi. Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Accusantium, distinctio.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="materi.html" class="btn btn-danger">Pelajari</a>
                                <small class="text-bg-warning fw-semibold rounded p-2">On Progress</small>
                            </div>
                        </div>
                    </div>
                    <div class="card col-lg-8 my-3">
                        <h5 class="card-header">3</h5>
                        <div class="card-body">
                            <h5 class="card-title">Judul Materi</h5>
                            <p class="card-text">Deskripsi materi. Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Accusantium, distinctio.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="materi.html" class="btn btn-danger">Pelajari</a>
                                <small class="text-bg-danger fw-semibold rounded p-2">Not Yet</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- tempat pagination -->

            </div>
        </div>

    </main>

    <hr>
@endsection