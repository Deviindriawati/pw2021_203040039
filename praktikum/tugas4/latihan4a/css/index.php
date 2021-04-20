<?php
// koneksi ke database 
$koneksi = mysqli_connect("localhost", "root","");
mysqli_select_db($koneksi, "pw_tubes_203040039");
//untuk ambil query dari database 
$result = mysqli_query($koneksi, "SELECT * FROM novel");
?>

<!DOCTYPE html>
<html lang>

<head>
    <title>Home Novel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>


<body>
    <div class="ui sigment small stackable menu" id="small-menu" style="padding: 0 !important; margin: 0 !important;">
        <div class="ui container">
            <div class="left menu">
                <div class="item"><i class="microchip icon icon huge"></i>
                    <div class="item">
                        <div class="ui action input">
                            <input type="text" placeholder="Search....">
                            <select class="ui compact selection dropdown">
                                <option value="article">judul</option>
                                <option value="Product">penulist</option>
                                <option value="all">penerbit</option>
                                <option value="all">harga</option>

                            </select>
                            <button class="ui button olive">Search</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="table">
        <div class="ui container ">
            <table class="ui selectable celled table ui inverted olive table">
                <tr>
                    <th>NO.</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Harga</th>
                </tr>
                </thead>
                </tbody>
                <?php $i=1;
                    while ($row = mysqli_fetch_assoc($result)):
                ?>
                    <tr>
                        <td><b><?= $i ?> </b></td>
                        <td><img src="assets/img/<?= $row["img"]; ?>"></td>
                        <td><b><?= $row["judul"]; ?></b></td>
                        <td><b><?= $row["penulis"]; ?></b></td>
                        <td><b><?= $row["penerbit"]; ?></b></td>
                        <td><b><?= $row["harga"]; ?></b></td>
                        <td>
                            <a href="php/detail.php?id=<?= $row['id'] ?>">Detail</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endwhile ?>