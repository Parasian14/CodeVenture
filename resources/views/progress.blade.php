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
                    @php($row = 0)
                    @foreach($lps as $lp) 
                        @php($row++)
                        <div class="card text-center col-lg-8 my-3">
                            <div class="card-header">
                                {{ $row }}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $lp->nama }}</h5>
                                <p class="card-text">{{ $lp->deskripsi }}</p>
                                <a href="detail_LP.html" class="btn btn-success">Selesai</a>
                            </div>
                            <div class="card-footer text-body-secondary">
                                Last activity : 2 days ago
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
   