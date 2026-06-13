## Nama : Muhammad Hikmal Nur Khariri 
## NIM  : 240605110218

## Deskripsi singkat aplikasi
Aplikasi ini merupakan Sistem Manajemen Blog (CMS) berbasis framework Laravel yang digunakan untuk mengelola dan menampilkan artikel blog secara online. Aplikasi memiliki fitur pengelolaan artikel, penulis, dan kategori artikel yang hanya dapat diakses oleh admin atau penulis yang sudah login ke dalam sistem. Selain itu, aplikasi juga menyediakan halaman pengunjung yang dapat diakses oleh semua pengguna tanpa login untuk membaca artikel yang telah dipublikasikan. Halaman pengunjung dilengkapi fitur menampilkan artikel terbaru, filter artikel berdasarkan kategori, serta halaman detail artikel beserta artikel terkait. Tampilan aplikasi dirancang sederhana, bersih, dan elegan dengan tema yang konsisten antara halaman CMS dan halaman pengunjung menggunakan Bootstrap dan Blade Template Laravel.

## Langkah-langkah menjalankan aplikasi secara lokal
1. Buka file pada aplikasi text editor(Visual Studio Code).
2. Nyalakan laragon/xampp untuk menjalankan Apache dan MySQL.
3. Buat database "db_blog" lalu import file database ".sql". 
4. Buka terminal baru pada Visual Studio Code
5. jalankan:
    php artisan key:generate
    php artisan storage:link
    php artisan serve
5. Tunggu dan setelah keluar link bisa di copy dan dibuka pada web browser
6. Dan aplikasi bisa dijalankan di lokal server

## Tautan video YouTube demonstrasi
https://youtu.be/oL-YxcbY8eE

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
