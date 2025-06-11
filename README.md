# 🛒 E-Commerce CodeIgniter 4

Aplikasi E-Commerce sederhana berbasis **CodeIgniter 4** yang menyediakan dua role pengguna: **Admin** dan **Pembeli**. Admin dapat menambahkan produk, sedangkan pembeli dapat melakukan transaksi pembelian barang, menyelesaikan belanja, dan mengisi alamat serta ongkir menggunakan integrasi **RajaOngkir API**.

---

## 📦 Fitur Utama

* Login berbasis role (Admin dan Pembeli)
* Manajemen produk (oleh Admin)
* Pembelian produk (oleh Pembeli)
* Keranjang belanja
* Checkout dengan pengisian alamat
* Perhitungan ongkir menggunakan **RajaOngkir API**

---

## 🛠️ Cara Instalasi

1. **Clone / Download Repository**

   ```bash
   git clone https://github.com/timotiuskw/e-commerce-codeigniter.git
   ```

   > Atau ekstrak file ZIP ke dalam folder `htdocs` XAMPP Anda

2. **Buat Database**

   * Buka `phpMyAdmin`
   * Buat database baru dengan nama:

     ```
     ci4-e-commerce
     ```

3. **Import Struktur Database**

   * Import file `db.sql` yang tersedia dalam folder proyek
   * File ini berisi tabel dan dummy data berikut:

     * Akun admin dan pembeli

4. **Jalankan Aplikasi**

   * Buka browser dan akses:

     ```
     http://localhost/e-commerce-codeigniter
     ```
   * Anda akan diarahkan secara otomatis ke halaman login.

---

## 🔐 Akun Default

| Role    | Username | Password |
| ------- | -------- | -------- |
| Admin   | admin    | admin    |
| Pembeli | pembeli  | pembeli  |

---

## ▶️ Alur Penggunaan Aplikasi

1. **Login sebagai Admin**

   * Tambahkan produk dari menu Admin

2. **Logout dan Login sebagai Pembeli**

   * Klik tombol **"Beli"** pada produk yang ingin dibeli
   * Pergi ke menu **Keranjang**
   * Klik tombol **"Selesai Belanja"**

3. **Checkout**

   * Anda akan diarahkan ke halaman untuk mengisi **alamat pengiriman**
   * Pilih **kota tujuan** dan **kurir**
   * Ongkir dihitung secara **otomatis menggunakan API RajaOngkir**
