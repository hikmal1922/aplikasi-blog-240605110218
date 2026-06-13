<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\KategoriArtikel;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    public function index()
    {
        $artikel = Artikel::with('kategori', 'penulis')
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();

        $kategori = KategoriArtikel::orderBy('nama_kategori', 'asc')
            ->get();

        return view('pengunjung.index', compact('artikel', 'kategori'));
    }
    public function kategori($id)
    {
        $kategoriDipilih = KategoriArtikel::findOrFail($id);

        $artikel = Artikel::with('kategori', 'penulis')
            ->where('id_kategori', $id)
            ->orderBy('id', 'desc')
            ->get();

        $kategori = KategoriArtikel::orderBy('nama_kategori', 'asc')
            ->get();

        return view('pengunjung.kategori', compact(
            'artikel',
            'kategori',
            'kategoriDipilih'
        ));
    }
    public function detail($id)
    {
        $artikel = Artikel::with('kategori', 'penulis')
            ->findOrFail($id);

        $artikelTerkait = Artikel::where('id_kategori', $artikel->id_kategori)
            ->where('id', '!=', $artikel->id)
            ->limit(5)
            ->get();

        return view('pengunjung.detail', compact(
            'artikel',
            'artikelTerkait'
        ));
    }
}
