<?php
// Devi Indriawati
// 203040039
// Shift Rabu 09.00 - 10.00
?>
<?php
require 'php/functions.php';
$Novel = query("SELECT * FROM novel")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css/oke.css">
    <title>Home Novel</title>
</head>

<body>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <div class="container">
        <h1 class="centered white-text">Novel</h1>

        <a href="php/login.php" class="waves-effect waves-light blue btn-small">Login Halaman Admin</a>

        <table class="centered highlight - white-text grey darken-3">
            <tr class="z-depth-5 red darken-3 white-text">
                <th>No</th>
                <th style="text-align: center;">Judul</th>
                <th style="text-align: center;">Penulis</th>
                <th style="text-align: center;">Penerbit</th>
                <th style="text-align: center;">Harga</th>
                <th style="text-align: center;">Foto</th>
                <th style="text-align: center;">Detail</th>
            </tr>
            <?php $i = 1?>
            <?php foreach ($Novel as $nvl): ?>
            <tr>
                <td><?=$i?></td>
                <td><?=$nvl["judul"];?></td>
                <td><?=$nvl["penulis"];?></td>
                <td><?=$nvl["penerbit"];?></td>
                <td><?=$nvl["harga"];?></td>
                <td><img width="100px" src="assets/img/<?=$nvl["img"];?>" alt=""></td>
                <td>
                    <p class="Nama">
                        <a href="php/detaill.php?id=<?=$nvl['id'];?>">Lihat Produk</a>
                </td>
            </tr>
            <?php $i++?>
            <?php endforeach;?>
    </div>
</body>

</html>