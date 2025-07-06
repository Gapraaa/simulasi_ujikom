
# simulasi_ujikom

**Simulasi Ujikom** adalah aplikasi berbasis **Laravel** untuk melakukan simulasi ujian kompetensi (Ujikom). Proyek ini membantu publik (siswa, peserta) berlatih menghadapi Ujikom dengan interface yang user-friendly dan fitur lengkap.

## 🚀 Teknologi

- Laravel (PHP Framework)
- Blade (templating)
- Tailwind CSS (UI styling)
- Vite (asset bundler)
- PHPUnit (testing)

## 🔧 Instalasi

1. Clone repo:
   ```bash
   git clone https://github.com/Gapraaa/simulasi_ujikom.git
   cd simulasi_ujikom
   ```
2. Install dependencies:
   ```bash
   composer install
   npm install
   npm run dev
   ```
3. Copy environment file & setup:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Konfigurasi `.env`: sesuaikan `DB_*` untuk koneksi database.
5. Buat tabel dan jalankan seed (opsional):
   ```bash
   php artisan migrate --seed
   ```
6. Jalankan server lokal:
   ```bash
   php artisan serve
   ```
   Akses di `http://localhost:8000`

## ⚙️ Fitur Utama

- Manajemen soal (import, tambah, edit, delete)
- Simulasi ujian berbasis waktu
- Nilai dan analisis hasil otomatis
- Tampilan responsif untuk desktop/mobile

## 🎯 Penggunaan

1. Login (opsional, atau guest).
2. Pilih paket soal/simulasi.
3. Lakukan ujian dengan timer.
4. Selesai, tampilkan hasil & pembahasan (jika tersedia).

## 🛠 Struktur Direktori

- `app/`, `routes/`, `public/`: struktur Laravel standar
- `resources/`: file Blade dan assets (CSS/JS)
- `tests/`: unit / feature test (PHPUnit)

## 🤝 Kontribusi

Kami sangat welcome kontribusimu! Silakan buat *issue* untuk bug/kebutuhan baru, atau kirim *pull request* sesuai panduan kontributor.

## 📄 Lisensi

[MIT License](LICENSE) – Bebas digunakan dan dikembangkan (include attribution).
