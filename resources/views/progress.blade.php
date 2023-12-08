@extends('layouts.main')

@section('title')
    <title>My Progress</title>
@endsection

@section('content')
    <main>

        <section class="text-center container">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="display-2 fw-light">Learning Path {{ Auth::user()->nama_depan }}</h1>
                    <p class="lead text-body-secondary">Something short and leading about the collection below—its
                        contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply
                        skip over it entirely.</p>
                </div>
            </div>
        </section>

        <div class="album bg-body-tertiary" id="konten">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="card text-center col-lg-8 my-3">
                        <div class="card-header">
                            1
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">My Learning Path 1</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="detail_LP.html" class="btn btn-success">Selesai</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            Last activity : 2 days ago
                        </div>
                    </div>
                    <div class="card text-center col-lg-8 my-3">
                        <div class="card-header">
                            2
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">My Learning Path 2</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="detail_LP.html" class="btn btn-warning">Lanjut belajar</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            Last activity : 7 days ago
                        </div>
                    </div>
                    <div class="card text-center col-lg-8 my-3">
                        <div class="card-header">
                            3
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">My Learning Path 3</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="detail_LP.html" class="btn btn-danger">Mulai belajar</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                            Last activity : 0 days ago
                        </div>
                    </div>
                </div>

                <!-- tempat pagination -->

            </div>
        </div>

    </main>

    <hr>
@endsection
   