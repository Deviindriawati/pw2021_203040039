<?php
// Devi Indriawati
// 203040039
// Rabu 09.00 - 10.00
?>

<?php
// mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if(!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

//Mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$Novel = query("SELECT * FROM novel WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Novel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../pw2021_203040039/latihan4c/css/style.css">
    </head>
    <body>
    <div class="container">
    <div class="img">
    <img src="../assets/img/<?= $nvl['img']; ?>" alt="">
    </div>
    <div class="keterangan">
    <p><?= $nvl[Judul]; ?></p>
    <p><?= $nvl[Penulis]; ?></p>
    <p><?= $nvl[Penerbit]; ?></p>
    <p><?= $nvl[Harga]; ?></p>
    </div>
    <button class="tombol-kembali"><a href="../index.php">Kembali</a><button>
    </div>

</body>
</html>