@php
    use Illuminate\Support\Str;
@endphp
@extends('pengunjung.layouts.app')

@section('title', 'Kategori Artikel')

@section('content')

    <div class="row">

        <div class="col-lg-12">

            <div class="mb-4">

                <h3 class="fw-bold">

                    Kategori:
                    {{ $kategoriDipilih->nama_kategori }}

                </h3>

            </div>

            @forelse($artikel as $item)

                <div class="card border-0 shadow-sm mb-4">

                    <img src="{{ asset('storage/gambar/' . $item->gambar) }}" class="card-img-top" style="height: 280px;
                                                object-fit: cover;">

                    <div class="card-body">

                        <h4 class="fw-bold">

                            {{ $item->judul }}

                        </h4>

                        <div class="small text-muted mb-3">

                            {{ $item->hari_tanggal }}

                        </div>

                        <p>

                            {{ Str::limit(strip_tags($item->isi), 150) }}

                        </p>

                        <a href="{{ route('artikel.detail', $item->id) }}" class="btn btn-sm btn-dark">

                            Baca Selengkapnya

                        </a>

                    </div>

                </div>

            @empty

                <div class="alert alert-light border">

                    Tidak ada artikel pada kategori ini.

                </div>

            @endforelse

        </div>

    </div>

@endsection