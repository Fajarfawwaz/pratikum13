<?php
include "koneksi.php";

// pagination
$per_page = 5;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
$offset = ($page - 1) * $per_page;

// search
$search = isset($_GET['search']) ? $_GET['search'] : "";
$where = "";
if ($search != "") {
    $where = "WHERE nama_barang LIKE '%$search%'";
}

// ambil data (data terbaru di atas)
$query = mysqli_query(
    $koneksi,
    "SELECT * FROM tabel_barang $where ORDER BY id DESC LIMIT $offset, $per_page"
);

// total data
$total = mysqli_query(
    $koneksi,
    "SELECT COUNT(*) AS total FROM tabel_barang $where"
);
$total_data = mysqli_fetch_assoc($total)['total'];
$total_page = ceil($total_data / $per_page);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">Membuat Database Sederhana</div>

<div class="navbar">
    <a href="index.php" class="active">Home</a>
    <a href="#">Login</a>
</div>

<div class="container">

    <!-- TOMBOL TAMBAH -->
    <a href="tambah.php" class="btn">Tambah Barang</a>

    <!-- SEARCH -->
    <form method="GET" class="search-box">
        Cari data:
        <input type="text" name="search" value="<?= $search ?>">
        <button type="submit">Cari</button>
    </form>

    <!-- TABEL -->
    <table>
        <tr>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        <?php if (mysqli_num_rows($query) > 0) { ?>
            <?php while ($row = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td>
                    <?php if ($row['gambar'] != "") { ?>
                        <img src="gambar/<?= $row['gambar']; ?>" width="60">
                    <?php } else { ?>
                        -
                    <?php } ?>
                </td>
                <td><?= $row['nama_barang']; ?></td>
                <td>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>" class="edit">Edit</a>
                    <a href="hapus.php?id=<?= $row['id']; ?>"
                       class="delete"
                       onclick="return confirm('Yakin hapus data?')">
                       Delete
                    </a>
                </td>
            </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="4">Data tidak ditemukan</td>
            </tr>
        <?php } ?>
    </table>

    <!-- PAGINATION -->
    <div class="pagination">

        <?php if ($page > 1) { ?>
            <a href="?page=<?= $page - 1 ?>&search=<?= $search ?>">«</a>
        <?php } ?>

        <?php for ($i = 1; $i <= $total_page; $i++) { ?>
            <a href="?page=<?= $i ?>&search=<?= $search ?>"
               class="<?= ($i == $page) ? 'active' : '' ?>">
               <?= $i ?>
            </a>
        <?php } ?>

        <?php if ($page < $total_page) { ?>
            <a href="?page=<?= $page + 1 ?>&search=<?= $search ?>">»</a>
        <?php } ?>

    </div>

</div>

</body>
</html>
