<?php
// Devi Indriawati
// 203040039
// Shift Rabu 09.00 - 10.00
?>
<?php
if (!isset($_GET['id'])) {
    header("Location: ../php/novel.php");
    exit;
}
require '../php/functions.php';
$Id = $_GET['id'];
$Novel = query("SELECT * FROM novel WHERE id = $Id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="shorcut icon" href="../logo2.jpeg">
    <title>Detail Novel</title>
    <style>
        body {
            background-image: url(../assets/img/11.jpg);
            text-align: center;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;

        }

        img {
            width: 260px;
            height: 260px;
            border: 8px;
            box-shadow: 7px 7px 7px 7px rgb(0 0 0 / 50%);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $Novel["img"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $Novel["judul"]; ?></p>
            <p><?= $Novel["penulis"]; ?></p>
            <p><?= $Novel["penerbit"]; ?></p>
            <p><?= $Novel["harga"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../php/novel.php">Kembali ke halaman utama</a></button><br><br>
        <button class="tombol-kembali"><a href="../php/admin.php">Kembali ke halaman utama admin</a></button>
    </div>
</body>

</html>
</body>

</html>