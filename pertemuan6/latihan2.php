<?php
/*
Devi Indriawati
203040039
Teknik informatika A
Pemograman Web
Pertemuan 6 - Array Associative
*/

?>
<?php
// $mahasiswa = [
// 	["Devi Indriawati", "203040039", "Teknik Informatika", "Deviindriawati02@gmail.com"],
//  ["Fajar Rizky", "203030040", "Teknik Mesin", "Fajar@gmail.com"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Devi Indriawati", 
        "nrp" => "203040039",
        "email" => "Deviindriawat02@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "HP.jpg"
    ],
    [
        "nama" => "Fajar Rizky", 
        "nrp" => "203030004",
        "email" => "Fajar@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "foto.jpg"
    ]
];


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
<html lang= "en">
<head>
    <meta charset="UTF-8">
    <meta name= "viewport" content="width=device-width, initial-scale= 1.0">
	<title>Daftar Film</title>
</head>
<body>

	<h1>Daftar Film</h1>

    <?php foreach( $films as $film ) : ?>
     <ul>
         <li>
             <img src="img/<?= $film["gambar"]; ?>">
         </li>
            <li>Judul : <?= $film["judul"] ?></li>
         <li>Sutradara : <?= $film["sutradara"] ?></li>
            <li>Rilis : <?= $film["rilis"] ?></li>
            <li>Genre : <?= $film["genre"] ?></li>
        </ul>
    <?php endforeach ?>

</body>
</html>