@extends('layouts.main')

@section('title')
    <title>Learning Path | {{ $lp->nama }}</title>
@endsection

@section('content')
    <main>

        <section class="text-center container">
            <div class="row">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="display-2 fw-light">{{ $lp->nama }}</h1>
                    <p class="lead text-body-secondary">{{ $lp->deskripsi }}</p>
                </div>
            </div>
        </section>
        <div class="album bg-body-tertiary" id="konten">
            <div class="container">
                <div class="row justify-content-center">
                    @php($row = 0) 
                    @foreach($materis as $materi)
                        @php($row++)
                        <div class="card col-lg-8 my-3">
                            <h5 class="card-header">{{ $row }}</h5>
                            <div class="card-body">
                                <h5 class="card-title">{{ $materi->judul }}</h5>
                                <p class="card-text">{{ $materi->deskripsi }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('Materi.show',['materi_judul'=>$materi->judul, 'lp_nama'=>$lp->nama]) }}" class="btn btn-danger">Pelajari</a>
                                    <small class="text-bg-success fw-semibold rounded p-2">Done!</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- tempat pagination -->

            </div>
        </div>

    </main>

    <hr>
@endsection