<?php
/*
Azikra Salma Sabilla 
203040016
Teknik informatika A
Pemograman Web
Pertemuan 7 - Request Method   GET & POSH
*/
?>

<?php 
// $_GET
$films = [
    [
        "judul" => "Milea:Suara dari Dilan", 
        "sutradara" => "Pidi Baiq, Fajar Bustomi", 
        "rilis" => "2020", 
        "genre" => " Romance",
        "gambar" => "Milea.JPG"
    ],
    [
        "judul" => "Perahu Kertas", 
        "sutradara" => "Hanung Bramantyo", 
        "rilis" => "2012", 
        "genre" => "Drama",
        "gambar" => "Perahu.JPG"
    ],
    [
        "judul" => "Mariposa", 
        "sutradara" => "Fajar Bustomi", 
        "rilis" => "2020", 
        "genre" => "Romance",
        "gambar" => "Mariposa.JPG"
    ]
];


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>GET</title>
    </head>
<body>

	<h1>Daftar Film</h1>
    <ul>
    <?php foreach( $films as $film ) : ?>
        <li>
            <a href="latihan2.php?judul=<?= $film["judul"] ?>&sutradara=<?= $film["sutradara"] ?>&rilis=<?= $film["rilis"] ?>&genre=<?= $film["genre"] ?>&gambar=<?= $film["gambar"]; ?>"><?= $film["judul"] ?></a>
        </li>
        <?php endforeach ?>
    </ul>

</body>
</html> 

