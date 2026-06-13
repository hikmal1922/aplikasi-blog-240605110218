<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f4f8;
            font-family: 'Segoe UI', sans-serif;
        }

        /* =========================
           TOPBAR
        ========================== */

        .topbar {
            background-color: #24364b;
            height: 72px;
            display: flex;
            align-items: center;
            padding-left: 24px;
            color: white;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 999;
        }

        .topbar-title {
            font-size: 15px;
            font-weight: 500;
            margin: 0;
        }

        .topbar-subtitle {
            font-size: 11px;
            color: #aaaaaa;
            margin: 0;
        }

        /* =========================
           SIDEBAR
        ========================== */

        .sidebar {
            width: 240px;
            background-color: white;
            min-height: 100vh;
            border-right: 1px solid #e6e6e6;
            position: fixed;
            top: 72px;
            left: 0;
            overflow-y: auto;
        }

        .sidebar-header {
            padding: 18px 18px 10px;
            border-bottom: 1px solid #f0f0f0;
        }

        .sidebar-title {
            font-size: 12px;
            color: #9aa3ad;
            font-weight: 700;
            text-transform: uppercase;
        }

        .menu-item {
            display: block;
            padding: 14px 18px;
            text-decoration: none;
            color: #444444;
            transition: 0.2s;
            font-size: 15px;
        }

        .menu-item:hover {
            background-color: #eef5ef;
            color: #198754;
        }

        .menu-active {
            background-color: #dfece1;
            color: #198754;
            font-weight: 600;
        }

        .kategori-item {
            display: block;
            padding: 12px 18px 12px 35px;
            text-decoration: none;
            color: #555555;
            font-size: 14px;
            transition: 0.2s;
        }

        .kategori-item:hover {
            background-color: #f5f5f5;
            color: #198754;
        }

        .kategori-active {
            color: #198754;
            font-weight: 600;
        }

        /* =========================
           CONTENT
        ========================== */

        .main-content {
            margin-left: 240px;
            margin-top: 72px;
            padding: 30px;
        }

        .card-custom {
            border: none;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .article-title {
            font-size: 30px;
            font-weight: 700;
            color: #24364b;
        }

        .article-meta {
            color: #777777;
            font-size: 14px;
        }

        .article-text {
            color: #555555;
            line-height: 1.9;
            font-size: 16px;
        }

        .btn-custom {
            background-color: #24364b;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 8px 18px;
        }

        .btn-custom:hover {
            background-color: #1b2938;
            color: white;
        }

        @media(max-width: 992px) {

            .sidebar {
                position: relative;
                width: 100%;
                min-height: auto;
                top: 0;
            }

            .main-content {
                margin-left: 0;
                margin-top: 72px;
            }
        }
    </style>

</head>

<body>

    <!-- =========================
         TOPBAR
    ========================== -->

    <div class="topbar">

        <div>

            <div class="topbar-title">

                Sistem Manajemen Blog (CMS)

            </div>

            <div class="topbar-subtitle">

                db_blog

            </div>

        </div>

    </div>

    <!-- =========================
         SIDEBAR
    ========================== -->

    <div class="sidebar">

        <div class="sidebar-header">

            <div class="sidebar-title">

                MENU UTAMA

            </div>

        </div>

        <!-- HALAMAN UTAMA -->

        <a href="{{ route('home') }}" class="menu-item {{ request()->routeIs('home') ? 'menu-active' : '' }}">

            Halaman Utama

        </a>

        <!-- KATEGORI -->

        <div class="sidebar-header">

            <div class="sidebar-title">

                KATEGORI ARTIKEL

            </div>

        </div>

        @php
            $sidebarKategori = \App\Models\KategoriArtikel::orderBy('nama_kategori', 'asc')->get();
        @endphp

        @foreach($sidebarKategori as $kategori)

            <a href="{{ route('kategori.filter', $kategori->id) }}" class="kategori-item
                    {{ request()->is('kategori/' . $kategori->id) ? 'kategori-active' : '' }}">

                {{ $kategori->nama_kategori }}

            </a>

        @endforeach

    </div>

    <!-- =========================
         CONTENT
    ========================== -->

    <div class="main-content">

        @yield('content')

    </div>

</body>

</html>