@extends('layouts.main')
@section('content')

    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="display-2 fw-light">Learning Path</h1>
                    <p class="lead text-body-secondary">Something short and leading about the collection below—its
                        contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply
                        skip over it entirely.</p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-body-tertiary" id="konten">
            <div class="container">

                <div class="mb-4">
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <form method = 'post' action = "{{ route('learning_search') }}" class="d-flex" role="search">
                            @csrf
                            <input class="form-control me-2 border-secondary-subtle" type="search" name = "search" placeholder="Search"
                                aria-label="Search">
                            <button class="btn btn-sm btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($lps as $lp)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ $lp->image }}" class="tamnel" alt="tamnel">
                                <div class="card-body text-center">
                                    <h5>{{ $lp->nama }}</h5>
                                    <p class="card-text">{{ $lp->deskripsi }}</p>
                                    <div class="btn-group text-center">
                                        <a href="{{ route('LearningPath.show',['lp_nama'=>$lp->nama]) }}" class="btn btn btn-danger">Pelajari</a>
                                    </div>
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
    