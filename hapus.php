<?php
include "koneksi.php";

// ambil id
$id = $_GET['id'];

// ambil data (untuk hapus gambar)
$data = mysqli_query($koneksi, "SELECT gambar FROM tabel_barang WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

// hapus gambar dari folder
if ($row['gambar'] != "" && file_exists("gambar/" . $row['gambar'])) {
    unlink("gambar/" . $row['gambar']);
}

// hapus data dari database
mysqli_query($koneksi, "DELETE FROM tabel_barang WHERE id='$id'");

// kembali ke index
header("Location: index.php");
exit;
