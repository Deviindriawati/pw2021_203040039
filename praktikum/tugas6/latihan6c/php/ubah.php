<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
$id = $_GET['id'];
$Novel = query("SELECT * FROM novel WHERE id = $id")[0];
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                        alert('Data Berhasil diubah!');
                        document.location.href = 'admin.php';
                    </script>";
    } else {
        echo "<script>
            alert('Data Gagal diubah!');
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
            <a href="admin.php"><button class="button alert outline">Cancel</button></a>
        </div>
        <h3>Form Edit Product</h3>
        <form action="" method="post">
            <input type="hidden" name="id" id="id" value="<?=$Novel['id']?>">
            <label for="judul">judul Novel</label>
            <input type="text" data-role="input" name="judul" id="judul" value="<?=$Novel['judul']?>" require>
            <label for="penulis">penulis Novel</label>
            <input type="text" data-role="input" name="penulis" id="penulis" value="<?=$Novel['penulis']?>" require>
            <label for="penerbit">penerbit Novel</label>
            <input type="text" data-role="input" name="penerbit" id="penerbit" value="<?=$Novel['penerbit']?>" require>
            <label for="harga">harga Novel</label>
            <input type="text" data-role="input" name="harga" id="harga" value="<?=$Novel['harga']?>" class="mb-1"
                title="">
            <label for="img">file img Novel</label>
            <input type="text" data-role="input" name="img" id="img" value="<?=$Novel['img']?>" require>
            <br>
            <button type="submit" name="ubah" class="button success outline">
                Edit Product
            </button>
        </form>
    </div>
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>