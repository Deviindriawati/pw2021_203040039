<?php
// Devi Indriawati
// 203040039
// Rabu 09.00 - 10.00
?>

 <?php
require 'php/functions.php';
$Novel = query("SELECT * FROM novel");

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
                                <option value="article">Judul</option>
                                <option value="Product">Penulist</option>
                                <option value="all">Penerbit</option>
                                <option value="all">Harga</option>

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
                <?php $i = 1; ?>
                <?php foreach ($Novel as $novel) : ?>
                    <tr>
                        <td><b><?= $i ?> </b></td>
                        <td><img src="assets/img/<?= $nvl["img"]; ?>"></td>
                        <td><b><?= $nvl["Judul"]; ?></b></td>
                        <td><b><?= $nvl["Penulis"]; ?></b></td>
                        <td><b><?= $nvl["Penerbit"]; ?></b></td>
                        <td><b><?= $nvl["Harga"]; ?></b></td>
                        <td>
                            <a href="php/detail.php?id=<?= $i ['id'] ?>" <?= $nvl["Novel"] ?>>Detail</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach ?>