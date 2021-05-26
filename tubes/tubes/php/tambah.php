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

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                        alert('Data Berhasil ditambahkan!');
                        document.location.href = 'admin.php';
                    </script>";
    } else {
        echo "<script>
            alert('Data Gagal ditambahkan!');
            document.location.href = 'admin.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novel</title>
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <link rel="stylesheet" href="../css/tambah.css">
    <style>
        body {
            background-image: url(../assets/img/28.jpg);
            background-size: cover;
            padding: 1px;
            height: 100%;

        }
    </style>
</head>

<body>
    <div class="background1">
        <div class="container">
            <div class="add" style="padding-top: 20px;">
                <a href="admin.php"><button class="button alert outline">Batal</button></a>
            </div>
            <h3>Form Add Product </h3>
            <form action="" method="post">
                <label for="judul">Masukan judul novel</label>
                <input type="text" placeholder="Laskar pelangi " data-role="input" name="judul" id="judul" require>
                <label for="penulis">Masukan penulis novel</label>
                <input type="text" placeholder="Andrea Hirata" data-role="input" name="penulis" id="penulis" require>
                <label for="penerbit">Masukan penerbit novel</label>
                <input type="text" placeholder="Bentang Pustaka" data-role="input" name="penerbit" id="penerbit" require>
                <label for="harga">Masukan harga novel</label>
                <input type="text" placeholder="Rp. 90.000,-" data-role="input" name="harga" id="harga" class="mb-1" title="">
                <label for="img">Masukan nama file img film</label>
                <input type="text" placeholder="laskarpelangijpeg.jpg" data-role="input" name="img" id="img" require><br>
                <button type="submit" name="tambah" class="button success outline">
                    klik Disini
                </button>
            </form>
        </div>
    </div>
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>