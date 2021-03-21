<?php
/*
Devi Indriawati 
203040039
https://github.com/Deviindriawati/pw2021_203040039
Teknik informatika A
Pemograman Web
Pertemuan 7 - Request Method   GET & POSH
*/
?>

<?php 
// cek apakah tidak ada data di $_GET
if( !isset($_GET["judul"]) ||
    !isset($_GET["sutradara"]) ||
    !isset($_GET["rilis"]) ||
    !isset($_GET["genre"]) ||
    !isset($_GET["gambar"]) ) {
    // redirect -> memindahkan user ke halaman lain
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Film</title>
</head>
<body>

<ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
    <li>Judul : <?= $_GET["judul"] ?></li>
    <li>Sutradara : <?= $_GET["sutradara"] ?></li>
    <li>Rilis : <?= $_GET["rilis"] ?></li>
    <li>Genre : <?= $_GET["genre"] ?></li>
</ul>

<a href="latihan1.php">Kembali ke Daftar Film</a>

</body>
</html> 