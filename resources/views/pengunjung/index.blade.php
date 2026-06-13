@php
    use Illuminate\Support\Str;
@endphp

@extends('pengunjung.layouts.app')

@section('title', 'Beranda Blog')

@section('content')

    <div class="row">

        <div class="col-lg-12">

            @forelse($artikel as $item)

                <div class="card card-custom mb-4">

                    <img src="{{ asset('storage/gambar/' . $item->gambar) }}" class="card-img-top" style="height: 420px;
                                object-fit: cover;">

                    <div class="card-body p-4">

                        <h2 class="article-title mb-3">

                            {{ $item->judul }}

                        </h2>

                        <div class="article-meta mb-3">

                            {{ $item->hari_tanggal }}
                            |
                            {{ $item->penulis->nama_depan }}
                            {{ $item->penulis->nama_belakang }}

                        </div>

                        <p class="article-text">

                            {{ Str::limit(strip_tags($item->isi), 180) }}

                        </p>

                        <a href="{{ route('artikel.detail', $item->id) }}" class="btn btn-custom">

                            Baca Selengkapnya

                        </a>

                    </div>

                </div>

            @empty

                <div class="alert alert-light border">

                    Belum ada artikel.

                </div>

            @endforelse

        </div>

    </div>

@endsection