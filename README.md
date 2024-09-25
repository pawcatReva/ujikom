# Herby

## Konsep Website
Website yang saya buat ini merupakan sebuah website tempat membeli tumbuhan atau rempah-rempah.

## Fitur Yang tersedia
- Topbar
   - Email/mail
   - Nomor Kontak
   - Tempat lokasi
   - Facebook
   - Instagram
   - Youtube
- Halaman Utama
   - Halaman Beranda (Home)
   - Tentang (about)
   - Belanja (Shopping)
   - Keranjang
   - Akun (account)

- Multi user
   - User/pengguna Herby
      - Register (membuat akun sebaga pembeli)
      - Login setelah register
      - Logout (sebagai pembeli)
      - Membeli produk
      - Membuat pesanan
      - Mengelola akun
    
  - Administrator
     - Login (sebagai admin)
     - Logout (sebagai admin)
     - Pengguna yang dapat dikelola
     - Membuat laporan stok barang
     - Pesanan yang dapat dikelola

## Akun Default Untuk Pengujian
- Administrator
     - Email : admin@gmail.com
     - Password : password123
- Pengguna Herby
     - Register terlebih dahulu (opsional)
         - Login
             - Memakai email yang sudah didaftarkan ketika register
             - Memasukan password yang sudah di buat ketika register
     - login
         - Email : yamada@gmail.com
         - Password : 1234567890
## ERD
![Alt text](https://github.com/pawcatReva/ujikom/blob/main/erdujikom.png)
Abaikan tabel personal_access_tokens, users, failed_jobs, 
migrations, password_resets karena itu bawaan.

## Teknologi yang Digunakan
  - Laravel 8
  - Boostrap 5

## Instalasi
  - Clone repository

```
git composer https://github.com/pawcatReva/ujikom.git
composer install
cp .env.example .env
```

## Konfigurasi Database Pada File .env
```
APP_DEBUG=true
DB_DATABASE=ujikom
DB_USERNAME=root
DB_PASSWORD=
```

## Melakukan Migrasi dan Menyambungkan Storage
```
php artisan key:generate
php artisan storage:link
php artisan migrate --seed
```

## Mulai Situs Web
```
php artisan serve
```
### UKK Herby dibuat oleh [Revalina Aryanti](https://www.instagram.com/fh_rev/)
