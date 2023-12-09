@extends('layouts.main')

@section('title')
    <title>Rekomendasi Kami</title>
@endsection
@section('content')
    <div class="container-lg">
        <div class="text-center">
            <div class="my-3">
                <h1>Rekomendasi Kami</h1>
                <h4 class="text-success">Apa saja yang pernah Anda pelajari?</h4>
            </div>
            <form action="{{ route('Progress.store')}}" method="post">
                @csrf
                <div class="row row-cols-1 row-cols-sm-4 row-cols-md-4 g-1">
                    @foreach($materis as $materi)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name = "{{ $materi->id }}" id="inlineCheckbox1" value="checked">
                            <label class="form-check-label" for="inlineCheckbox1">
                                <h5>{{ $materi->judul }}</h5>
                            </label>
                        </div>
                    @endforeach
                </div>
                <button class="btn btn-lg btn-success fw-bolder mb-2" type="submit">Berikan Saya Rekomendasi!</button>
            </form>
        </div>
    </div>

    <hr>
@endsection