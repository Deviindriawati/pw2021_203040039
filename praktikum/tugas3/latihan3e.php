<?php
// Devi Indriawati
// 203040039
// Shift Rabu 09.00 - 10.00
?>
<?php
$Novel = [
    [
        "judul" => "Dillan 1990",
        "penulis" => "Pidi Baiq",
        "penerbit" => "Pastel Books(MIZAN)",
        "harga" => "Rp. 80.000,-",
        "gambar" => "Dillan90.jpeg" 
    ],
    [
        "judul" => "Dillan 1991",
        "penulis" => "Pidi Baiq",
        "penerbit" => "Pastel Books(MIZAN)",
        "harga" => "Rp. 80.000,-",
        "gambar" => "Dillan91.jpeg"
    ],
    [
        "judul" => "Milea Suara dari Dilan",
        "penulis" => "Pidi Baiq",
        "penerbit" =>  "Pastel Books(MIZAN)",
        "harga" => "Rp. 85.000,-",
        "gambar" => "milea.jpeg"
    ],
    [
        "judul" => "Laskar Pelangi",
        "penulis" => "Andrea Hirata",
        "penerbit" => "Bentang Pustaka",
        "harga" => "Rp. 90.000,-",
        "gambar" => "laskarpelangi.jpeg"
    
    ],
    [
        "judul" => "Cinta Paling Rumit",
        "penulis" => "Boy Candra",
        "penerbit" => "KataDepan",
        "harga" => "RP. 60.000,-",
        "gambar" => "Cinta.jpeg"
    ],
    [
        "judul" => "5cm",
        "penulis" => "Donny Dhirgantoro",
        "penerbit" => "Grasindo",
        "harga" => "Rp. 80.000,-",
        "gambar" => "5cm.jpeg"
    ],
    [
        "judul" => "Mariposa",
        "penulis" => "Luluk Hf",
        "penerbit" => "Coconut Books",
        "harga" => "Rp. 95.000,-",
        "gambar" => "mariposa.jpeg"
    ],
    [
        "judul" => "Senja Hujan Cerita",
        "penulis" => "Boy Candra",
        "penerbit" => "MediaKita",
        "harga" => "Rp. 65.000,-",
        "gambar" => "senja.jpeg"
    ],
    [
        "judul" => "Malik & Elsa",
        "penulis" => "Boy Candrat",
        "penerbit" => "MediaKita",
        "harga" => "Rp. 75.000,-",
        "gambar" => "M&S.jpeg"
    ],
    [
        "judul" => "Perahu Kertas",
        "penulis" => "Dewi Lestari",
        "penerbit" => "Bentang Pustaka",
        "harga" => "Rp. 85.000,-",
        "gambar" => "perahu.jpeg"
    ],
];
?>
<!DOCTYPE html>
<html lang>

<head>
    <title>Home Novel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mb-3 mt-3">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($Novel as $nvl) : ?>
                <tr>
                    <td><b><?= $i ?> </b></td>
                    <td><img src="img/<?= $nvl["gambar"]; ?>"></td>
                    <td><b><?= $nvl["judul"]; ?></b></td>
                    <td><b><?= $nvl["penulis"]; ?></b></td>
                    <td><b><?= $nvl["penerbit"]; ?></b></td>
                    <td><b><?= $nvl["harga"]; ?></b></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
            </tr>
        </table>
        <tbody>
    </div>
    <!-- 203040039 -->
</body>