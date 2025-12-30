---

## Praktikum 7 – Membuat Pagination

---

**Nama:** FAJAR FAWWAZ ATALLLAH

**NIM:** 312410357

**Kelas:** TI.2A.A.4

**Mata Kuliah:** Pemrograman Web1

**Dosen:** Agung Nugroho, S.Kom., M.Kom.

---


## Halaman HOME / INDEX.PHP
<img width="1916" height="685" alt="Screenshot 2025-12-30 161915" src="https://github.com/user-attachments/assets/b3299b8b-b16e-4271-bf10-a5450cf5625e" />

## HALAMAN TAMBAH BARANG 
<img width="1909" height="915" alt="Screenshot 2025-12-30 161929" src="https://github.com/user-attachments/assets/a75471ba-7efc-49a9-8bf5-fd184a83d941" />

## HALAMAN EDIT BARANG
  <img width="1919" height="836" alt="Screenshot 2025-12-30 161945" src="https://github.com/user-attachments/assets/659fec05-7554-420d-ac7a-48e76044b57b" />


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

## 📌 Catatan
- Pastikan folder gambar/ memiliki izin tulis
- Pagination dibuat menggunakan SQL LIMIT dan OFFSET
- Data terbaru ditampilkan terlebih dahulu

## 👨‍🎓 Tujuan Pembelajaran
- Memahami konsep pagination
- Implementasi CRUD dengan PHP & MySQL
- Pengelolaan file upload
- Penggunaan query SQL dasar
