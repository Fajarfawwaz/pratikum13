<?php
include "koneksi.php";

// ambil id
$id = $_GET['id'];

// ambil data lama
$data = mysqli_query($koneksi, "SELECT * FROM tabel_barang WHERE id='$id'");
$row = mysqli_fetch_assoc($data);

// proses update
if (isset($_POST['update'])) {
    $nama  = $_POST['nama_barang'];
    $harga = $_POST['harga'];

    // cek gambar baru
    if ($_FILES['gambar']['name'] != "") {
        $gambar = $_FILES['gambar']['name'];
        $tmp    = $_FILES['gambar']['tmp_name'];

        move_uploaded_file($tmp, "gambar/" . $gambar);

        mysqli_query($koneksi,
            "UPDATE tabel_barang 
             SET nama_barang='$nama', harga='$harga', gambar='$gambar'
             WHERE id='$id'"
        );
    } else {
        // tanpa ganti gambar
        mysqli_query($koneksi,
            "UPDATE tabel_barang 
             SET nama_barang='$nama', harga='$harga'
             WHERE id='$id'"
        );
    }

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">Edit Barang</div>

<div class="container">
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>
                    <input type="text" name="nama_barang"
                           value="<?= $row['nama_barang']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <input type="number" name="harga"
                           value="<?= $row['harga']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Gambar Lama</td>
                <td>
                    <?php if ($row['gambar'] != "") { ?>
                        <img src="gambar/<?= $row['gambar']; ?>" width="80">
                    <?php } else { ?>
                        -
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Gambar Baru</td>
                <td>
                    <input type="file" name="gambar">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="update" class="btn">Update</button>
                    <a href="index.php" class="delete">Batal</a>
                </td>
            </tr>
        </table
