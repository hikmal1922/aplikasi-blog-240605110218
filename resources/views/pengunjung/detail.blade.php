@extends('pengunjung.layouts.app')

@section('title', $artikel->judul)

@section('content')

    <div class="row">

        <div class="col-lg-8">

            <div class="card border-0 shadow-sm">

                <img src="{{ asset('storage/gambar/' . $artikel->gambar) }}" class="card-img-top" style="max-height: 400px;
                    object-fit: cover;">

                <div class="card-body p-4">

                    <h2 class="fw-bold mb-3">

                        {{ $artikel->judul }}

                    </h2>

                    <div class="small text-muted mb-4">

                        {{ $artikel->hari_tanggal }}
                        |
                        {{ $artikel->penulis->nama_depan }}
                        {{ $artikel->penulis->nama_belakang }}

                    </div>

                    <div style="line-height: 1.9;
                        color: #555555;">

                        {!! nl2br(e($artikel->isi)) !!}

                    </div>

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="card border-0 shadow-sm">

                <div class="card-body">

                    <h5 class="fw-bold mb-3">

                        Artikel Terkait

                    </h5>

                    @forelse($artikelTerkait as $item)

                        <div class="mb-3">

                            <a href="{{ route('artikel.detail', $item->id) }}" class="text-decoration-none">

                                <div class="fw-semibold" style="color: #333333;">

                                    {{ $item->judul }}

                                </div>

                            </a>

                        </div>

                    @empty

                        <div class="text-muted small">

                            Tidak ada artikel terkait.

                        </div>

                    @endforelse

                </div>

            </div>

        </div>

    </div>

@endsection