# 🚗 Sistem Manajemen Parkiran Sederhana

Aplikasi web dasar berbasis PHP dan MySQL untuk mengelola data registrasi kendaraan di area parkir.

## 🌟 Fitur

* **Registrasi Kendaraan:** Tambah data kendaraan baru (Nama, Jenis, Keterangan).
* **Lihat Data:** Menampilkan semua kendaraan yang terdaftar dalam format tabel.
* **Navigasi Utama:** Tautan ke halaman registrasi dan data kendaraan.

## ⚙️ Instalasi

Aplikasi ini memerlukan **PHP** dan **MySQL/MariaDB** (direkomendasikan menggunakan XAMPP/WAMP).

1.  **Database Setup:**
    * Buat database dengan nama: `db_parkiran`.
    * Buat tabel `kendaraan` (pastikan kolom `nama`, `jenis`, dan `keterangan` tersedia).
2.  **Koneksi:** Pastikan parameter koneksi database di `registrasi.php` dan `lihat_data.php` sudah sesuai dengan *credential* lokal Anda (`host=localhost`, `user=root`, `pass=""`, `db=db_parkiran`).
3.  **Akses:** Pindahkan file ke direktori web server Anda dan buka `index.php` di browser.

---
