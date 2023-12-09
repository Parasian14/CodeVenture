@extends('layouts.main')

@section('title')
    <title> {{ $lp->nama }} | {{ $materi->judul }}</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/CSS/materi.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/CSS/sidebar_materi.css') }}">
@endsection

@section('content')
    <section>
        <div class="row">
            <div class="col-md-8">
                <div class="text-center">
                    <h1 class="display-4 fw-bold">{{ $materi->judul }}</h1>

                    <img src="{{ $materi->image }}" class="header-berita my-3" alt="Header Berita">
                </div>
                <div class="ms-5">
                    <p class="lead fs-2 mt-4">Deskripsi Materi.</p>
                    <div class="fs-5">{!! $materi->isi !!}</div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ url()->previous() }}" class="btn btn-danger btn-lg mt-5 ms-5">Kembali</a>
                    <div class="btn-group mt-5">
                        @php
                            $user_lp_materis = $user_materis->whereIn('materis_id',$materis->pluck('id')->toArray());
                            $curr = $user_lp_materis->where('materis_id',$materi->id);
                            $next = $user_lp_materis->where('id', '>', $curr->first()->id)->first();
                            $prev = $user_lp_materis->where('id', '<', $curr->first()->id)->first();
                            $next_judul = $next==null? null : $materis->where('id',$next->materis_id)->first()->judul;
                            $prev_judul = $prev==null? null : $materis->where('id',$prev->materis_id)->first()->judul;
                        @endphp
                        <a href="{{ $prev_judul==null? route('LearningPath.show',['lp_nama'=>$lp->nama]) : route('Materi.show',['materi_judul'=>$prev_judul, 'lp_nama'=>$lp->nama]) }}" class="btn btn-outline-success btn-lg"><i class="bi bi-chevron-left"></i></a>
                        <a href="{{ $next_judul==null? route('LearningPath.show',['lp_nama'=>$lp->nama]) : route('Materi.show',['materi_judul'=>$next_judul, 'lp_nama'=>$lp->nama, 'materi'=>$materi]) }}" class="btn btn-outline-success btn-lg"><i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>

            </div>
            <div class="my-5 col md-4 d-none d-md-inline-block">
                <h3 class="text-center">Materi {{ $lp->nama }}</h3>

                <div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-3 align-items-center justify-content-center">
                    <div class="list-group">
                        @foreach($materis as $m)
                            <a href="{{ route('Materi.show',['materi_judul'=>$m->judul, 'lp_nama'=>$lp->nama]) }}" class="list-group-item list-group-item-action d-flex gap-3 py-3"
                                aria-current="true">
                                <div class="d-flex gap-2 w-100 justify-content-between">
                                    <div>
                                        <h5 class="mb-0">{{ $m->judul }}</h5>
                                        <p class="mb-0 opacity-75">{{ $m->deskripsi }}</p>
                                    </div>
                                    <svg class="bi" width="16" height="16">
                                        @php($status = $user_materis->where('materis_id', $m->id)->first()->status)
                                        @if($status == 'done')
                                            <use xlink:href="#done" />
                                        @elseif($status == 'open')
                                            <use xlink:href="#onprogress" />
                                        @else
                                            <use xlink:href="#notyet" />
                                        @endif
                                    </svg>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection