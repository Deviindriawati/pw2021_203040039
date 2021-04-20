<?php
// Devi Indriawati
// 203040039
// Shift Rabu 09.00 - 10.00
?>
<?php 
require 'php/functions.php';
$Novel = query("SELECT * FROM novel");

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $Novel = query("SELECT * FROM novel WHERE
            `judul` LIKE '%$keyword%' OR
            `penulis` LIKE '%$keyword%' OR
            `penerbit` LIKE '%$keyword%' OR
            `harga` LIKE '%$keyword%' ");
} else {
    $Novel = query("SELECT * FROM novel");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Novel</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>

<body style="margin: auto 100px;">
    <div class="add">
        <a href="php/admin.php">Ke Halaman Admin</a>
    </div>

    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari"
            style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px;">Cari!</button>
    </form>

    <table class="highlight centered">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($Novel)) : ?>
            <tr>
                <td colspan="8">
                    <h1>Novel Tidak Ditemukan</h1>
                </td>
            </tr>
            <?php else : ?>
            <?php $i = 1; ?>
            <?php foreach ($Novel as $nvl) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img width="40px" src="../Latihan5e/assets/img/<?= $nvl['img']; ?>" alt=""></td>
                <td>
                    <a href="php/detail.php?id=<?= $nvl['id']; ?>">
                        <?= $nvl["judul"]; ?>
                    </a>
                </td>
                <td><?= $nvl['penulis']; ?></td>
                <td><?= $nvl['penerbit']; ?></td>
                <td><?= $nvl['harga']; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>