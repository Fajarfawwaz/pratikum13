# 📦 Aplikasi CRUD Barang dengan Pagination (PHP & MySQL)

Aplikasi web sederhana berbasis **PHP dan MySQL** untuk mengelola data barang.  
Dibuat sebagai bagian dari **Praktikum Pagination** yang mencakup fitur CRUD (Create, Read, Update, Delete), upload gambar, pencarian, dan pagination.

---

## ✨ Fitur Utama
- ✅ Menampilkan data barang
- ➕ Tambah barang + upload gambar
- ✏️ Edit data barang
- 🗑️ Hapus data barang
- 🔍 Pencarian data (search)
- 📄 Pagination (Previous & Next)
- 🖼️ Menampilkan gambar dari database

---

## 🛠️ Teknologi yang Digunakan
- **PHP (Native)**
- **MySQL**
- **HTML & CSS**
- **XAMPP / Laragon** (local server)

---

## 📂 Struktur Folder
```
pagination/
├── index.php # Halaman utama (read data + pagination)
├── tambah.php # Tambah data barang
├── edit.php # Edit data barang
├── hapus.php # Hapus data barang
├── koneksi.php # Koneksi database
├── style.css # Styling tampilan
├── gambar/ # Folder penyimpanan gambar
└── README.md # Dokumentasi project
```

## ⚙️ Cara Menjalankan Project

- Jalankan Apache & MySQL (XAMPP/Laragon)
- Import database db_pagination
- Letakkan folder project ke:

```
C:\xampp\htdocs\pagination
```

- Akses melalui browser:
```
http://localhost/pagination/index.php
```

## 🧪 Cara Menggunakan
- Klik Tambah Barang untuk menambah data
- Upload gambar barang (jpg/png)
- Gunakan Edit untuk mengubah data
- Gunakan Delete untuk menghapus data
= Gunakan Search untuk mencari barang
- Navigasi halaman menggunakan pagination

📌 Catatan
