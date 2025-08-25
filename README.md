# 🚗 OnlyCars

Website resmi komunitas mobil **OnlyCars**.  
Platform ini berfungsi sebagai pusat informasi dan dokumentasi, berisi:

- 📅 **Event** komunitas (jadwal & detail kegiatan)
- 🖼️ **Gallery** dokumentasi foto kegiatan
- 👕 **Merchandise** resmi OnlyCars
- 👥 Sistem autentikasi untuk anggota komunitas

---

## ✨ Fitur
- Landing Page OnlyCars dengan komponen yang ada
- Manajemen event (CRUD untuk admin, daftar & lihat untuk user)
- Gallery dengan tampilan kartu gambar yang interaktif
- Katalog merchandise komunitas

---

## 🛠️ Tech Stack
- [Laravel 12](https://laravel.com) — Framework utama
- [Blade](https://laravel.com/docs/blade) — Template engine
- [Tailwind CSS](https://tailwindcss.com) — Styling
- [sqlite](https://www.sqlite.org) — Database
- [npm / Vite](https://vitejs.dev) — Build asset frontend

---

## ⚙️ Installation

Ikuti langkah-langkah berikut untuk menjalankan proyek di local environment:

# 1. Clone Repository
- git clone https://github.com/username/onlycars.git
- cd onlycars

# 2. Install Dependencies
- composer install
- npm install
- npm run dev

# 3. Copy Environment File
- cp .env.example .env

# 4. Generate Application Key
- php artisan key:generate

# 5. Setup Database (sesuaikan di .env)
- php artisan migrate --seed

# 6. Storage Link (untuk akses file images publik)
- php artisan storage:link

# 7. Jalankan Server
- php artisan serve
