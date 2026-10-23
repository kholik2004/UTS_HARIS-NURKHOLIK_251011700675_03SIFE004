# Proyek UTS Portal Lowongan Kerja — NIM 251011700675

Aplikasi frontend Laravel 13 untuk tema NIM 5. Fitur: daftar lowongan, pencarian berdasarkan posisi/perusahaan/lokasi, halaman detail, migration, seeder, Blade, dan Bootstrap lokal.

## Menjalankan dengan Laragon

1. Jalankan **Start All** di Laragon.
2. Pastikan `.env` memakai koneksi MySQL Laragon (`DB_HOST=127.0.0.1`, `DB_PORT=3306`, `DB_DATABASE=db_uts_251011700675`, `DB_USERNAME=root`). Password dibiarkan kosong jika Laragon Anda memakai setelan bawaan.
3. Jalankan `php artisan config:clear` lalu `php artisan migrate --seed`.
4. Jalankan `php artisan serve` dan buka `http://127.0.0.1:8000/jobs`.

Bootstrap dimuat dari `public/Bootstrap/css/bootstrap.min.css` dan `public/Bootstrap/js/bootstrap.bundle.min.js`.
