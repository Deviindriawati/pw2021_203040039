<?php
// Devi Indriawati
// 203040039
// Shift Rabu 09.00 - 10.00
?>
<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
$Novel = query("SELECT * FROM novel");
if (isset($_GET["cari"])) {
    $Novel = cari($_GET["keyword"]);
}
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $Novel = query(
        "SELECT * FROM novel WHERE
        judul LIKE '%$keyword%' OR
        penulis LIKE '%$keyword%' OR
        penerbit LIKE '%$keyword%' OR
        harga LIKE '%$keyword%'
        "
    );
} else {
    $Novel = query("SELECT * FROM novel");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="../css/oke.css">
    <title>Home Novel</title>
    <style>
        .container {
            font-size: smaller;
            font-family: monospace;
        }

        .tr {
            font-weight: bold;
            font-size: small;
            font-family: Impact, 'Arial Narrow Bold', sans-serif;
        }

        .body {
            font-size: small;
        }
    </style>
</head>

<body>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <div class="container">
        <h1 class="centered white-text center">Admin Novel</h1>
        <div class="add">
            <a href="tambah.php" class="waves-effect waves-light purple lighten-3 btn-small">Tambah Data</a>
            <form action="" method="GET">
                <input class="white-text" type="text" name="keyword" autofocus placeholder="masukkan keyword.." autocomplete="off">
                <button class="waves-effect waves-light pink btn-small" type="submit" name="cari">Search</button>
            </form>
        </div>
        <table class="highlight centered brown-text">
            <tr class="brown white-text">
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Detail</th>
                <th>Opsi</th>
            </tr>
            <?php if (empty($Novel)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Novel tidak ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1 ?>
                <?php foreach ($Novel as $nvl) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $nvl["judul"]; ?></td>
                        <td><?= $nvl["penulis"]; ?></td>
                        <td><?= $nvl["penerbit"]; ?></td>
                        <td><?= $nvl["harga"]; ?></td>
                        <td><img width="100px" src="../assets/img/<?= $nvl["img"]; ?>" alt=""></td>
                        <td>
                            <p class="Nama">
                                <a href="../php/detaill.php?id=<?= $nvl['id']; ?>">Lihat Produk</a>
                        </td>
                        <td>
                            <a href="ubah.php?id=<?= $nvl['id'] ?>" class="waves-effect waves-light pink btn-small">Ubah</a>
                            <a href="hapus.php?id=<?= $nvl['id'] ?>" class="waves-effect waves-light purple lighten-3 btn-small">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="logout">
                <a href="logout.php" class="waves-effect waves-light blue btn-small">Logout</a>
            </div>

    </div>
</body>

</html>