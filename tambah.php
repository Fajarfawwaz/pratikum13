<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $nama  = $_POST['nama_barang'];
    $harga = $_POST['harga'];

    // upload gambar
    $gambar = $_FILES['gambar']['name'];
    $tmp    = $_FILES['gambar']['tmp_name'];

    if ($gambar != "") {
        move_uploaded_file($tmp, "gambar/" . $gambar);
    }

    mysqli_query($koneksi,
        "INSERT INTO tabel_barang (nama_barang, harga, gambar)
         VALUES ('$nama', '$harga', '$gambar')"
    );

    // arahkan ke halaman terakhir
    $q = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tabel_barang");
    $total_data = mysqli_fetch_assoc($q)['total'];
    $per_page = 5;
    $last_page = ceil($total_data / $per_page);

    header("Location: index.php?page=$last_page");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">Tambah Barang</div>

<div class="container">

    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>
                    <input type="text" name="nama_barang" required>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <input type="number" name="harga" required>
                </td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>
                    <input type="file" name="gambar">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="simpan" class="btn">Simpan</button>
                    <a href="index.php" class="delete">Batal</a>
                </td>
            </tr>
        </table>
    </form>

</div>

</body>
</html>
