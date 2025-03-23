Admin Panel Sales Task - React & Laravel

Admin panel ini adalah aplikasi berbasis web yang menggunakan React.js sebagai frontend dan Laravel sebagai backend, serta MySQL sebagai database. Aplikasi ini memungkinkan pengguna untuk mengelola produk, transaksi, dan melihat laporan penjualan.

🚀 Fitur Utama

CRUD Produk (Tambah, Edit, Hapus, Lihat daftar produk)

Manajemen transaksi penjualan

Laporan penjualan dalam bentuk tabel

Sorting dan pencarian data

Dashboard dengan ringkasan total order dan produk terlaris

📌 Instalasi dan Menjalankan Proyek

1️⃣ Backend (Laravel)

Persyaratan

PHP 8+

Composer

MySQL atau MariaDB

Langkah-langkah

# Import Database
$ Import database yang telah diberikan ke dalam database local (sales_data_task.sql).

# Clone repository
$ git clone https://github.com/username/repository-name.git
$ cd repository-name/backend

# Install dependencies
$ composer install

# Konfigurasi file .env
$ cp .env.example .env
$ php artisan key:generate

# Setup database
$ php artisan migrate --seed

# Jalankan server backend
$ php artisan serve

Backend akan berjalan di http://127.0.0.1:8000.

2️⃣ Frontend (React.js)

Persyaratan

Node.js (disarankan versi 16+)

NPM atau Yarn

Langkah-langkah

# Pindah ke folder frontend
$ cd ../frontend

# Install dependencies
$ npm install

# Jalankan aplikasi React
$ npm start

Frontend akan berjalan di http://localhost:3000.

⚙️ Konfigurasi API Endpoint

Pastikan file .env di backend sudah diatur dengan database yang sesuai.
Di frontend, jika perlu mengubah endpoint API, sesuaikan di src/config.js:

export const API_URL = "http://127.0.0.1:8000";

📜 Struktur Folder

📦 repository-name
├── 📂 backend   # Laravel Backend
│   ├── app
│   ├── database
│   ├── routes
│   ├── .env.example
│   ├── artisan
│   ├── composer.json
│   └── ...
├── 📂 frontend  # React Frontend
│   ├── src
│   ├── public
│   ├── package.json
│   ├── .env
│   └── ...
└── README.md

🎯 Lisensi

Aplikasi ini dibuat sebagai tugas untuk saya dari PT Qtasnim.

Mohon maaf ada keterbatasan fitur CRUD karena waktu yang sangat singkat diweekend ini🙏.

💡 Jika ada pertanyaan atau masalah, jangan ragu untuk menghubungi saya. Terimakasih! 🚀
