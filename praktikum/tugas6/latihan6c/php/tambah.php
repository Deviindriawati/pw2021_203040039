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


</head>

<body>
    <div class="container">
        <div class="add" style="padding-top: 20px;">
            <a href="admin.php"><button class="button alert outline">Batal ? :( </button></a>
        </div>
        <h3>Form Add Product Yukk gasskeun</h3>
        <form action="" method="post">
            <label for="judul">Masukan judul novel</label>
            <input type="text" placeholder="devi" data-role="input" name="judul" id="judul" require>
            <label for="penulis">Masukan penulis novel</label>
            <input type="text" placeholder="devi" data-role="input" name="penulis" id="penulis" require>
            <label for="penerbit">Masukan penerbit novel</label>
            <input type="text" placeholder="1780" data-role="input" name="penerbit" id="penerbit" require>
            <label for="harga">Masukan harga novel</label>
            <input type="text" placeholder="12rb" data-role="input" name="harga" id="harga" class="mb-1" title="">
            <label for="img">Masukan nama file img film</label>
            <input type="text" placeholder="test.jpg" data-role="input" name="img" id="img" require><br>
            <button type="submit" name="tambah" class="button success outline">
                klik ini
            </button>
        </form>
    </div>
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>

</body>

</html>