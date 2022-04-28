<h1 align="center">Toko Online Laravel 8</h1>
<p align="center">Proyek UTS Pemrograman Web Lanjut - 2022</p>

## Kelompok 2
- Fitriana
- Maulida Aziza
- Muhammad Hamdi
- Oka Rajeb Abdillah

# Instalasi
### Menggunakan git :
- <code>git clone https://github.com/or-abdillh/toko-online.git</code>
- <code>cd toko-online</code>

### Unduh zip repository
- Gunakan button code pada pojok kanan atas lalu pilih opsi <strong>Download Zip</strong>

# Konfigurasi
Ikuti langkah berikut ini untuk dapat menggunakan aplikasi ini :

### Persiapan Database
- Buat sebuah database baru bernama 'db_toko_online'
- Dumping sql menggunakan file db_toko_online.sql menggunakan mysql-cli atau phpMyAdmin

### Migration dan Seeding
- Jalankan perintah <code>php artisan migrate</code>
- Jalankan perintah <code>php artisan db:seed</code>

### Persipan Aplikasi
- jalankan perintah <code>composer install</code>
- jalankan perintah <code>php artiisan key:generate</code>
- jalankan perintah <code>php artisan serve</code>

### Troubleshooting
Jika gambar pada website tidak tampil lakukan step berikut ini :
- Gunakan perintah pada terminal <code>rm public/storage</code>
- Gunakan perintah pada terminal <code>php artisan storage:link</code>

### Login sebagai admin
- Gunakan email 'admin@gmail.com'
- Gunakan password 'secret'

Last edited on 28/04/2022
