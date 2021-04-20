<?php
// Devi Indriawati
// 203040039
// Shift Rabu 09.00 - 10.00
?>
<?php 
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!');
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
    <title>Home Novel</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
</head>

<body style="font-family: Arial, sans-serif;">
    <h3>Form Tambah Data</h3>
    <form action="" method="post">
        <ul style="list-style: none;">
            <li>
                <label for="judul" style="margin-right: 8px;">Masukan Judul Novel</label>
                : <input type="text" placeholder="Dillan 1990" name="judul" id="judul" require><br><br>
            </li>
            <li>
                <label for="penulis" style="margin-right: 16px;">Masukan Penulis Novel</label>
                : <input type="text" placeholder="Pidi Baiq" name="penulis" id="penulis" require><br><br>
            </li>
            <li>
                <label for="penerbit" style="margin-right: 21px;">Masukan Penerbit Novel</label>
                : <input type="text" placeholder="Pastel Books(MIZAN)" name="penerbit" id="penerbit" require><br><br>
            </li>
            <li>
                <label for="harga" style="margin-right: 9px;">Masukan Harga Novel</label>
                : <input type="text" placeholder="80.0000" name="harga" id="harga" require><br><br>
            </li>
            <li>
                <label for="img" style="margin-right: 7px;">Masukan Nama Gambar</label>
                : <input type="text" placeholder="devi.jpg / png" name="img" id="img" require><br><br>
            </li>
            <button type="submit" name="tambah"
                style="border: none; padding: 5px 10px; background-color: teal; color: white; border-radius: 2px; margin: 0 6px 0 65px;">Tambah
                Data</button>
            <button type="submit" style="border: none; padding: 5px 10px; background-color: teal; border-radius: 2px;">
                <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
            </button>
        </ul>
    </form>
</body>

</html>