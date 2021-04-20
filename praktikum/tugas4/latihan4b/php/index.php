<?php
// Devi Indriawati
// 203040039
// Shift Rabu 09.00 - 10.00
?>
<?php 
$conn = mysqli_connect("localhost", "root", "");
mysqli_select_db($conn, "pw_tubes_203040039");
$result = mysqli_query($conn, "SELECT * FROM novel");
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
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><b><?= $i ?> </b></td>
                    <td><img src="../assets/img/<?= $row["img"]; ?>"></td>
                    <td><b><?= $row["judul"]; ?></b></td>
                    <td><b><?= $row["penulis"]; ?></b></td>
                    <td><b><?= $row["penerbit"]; ?></b></td>
                    <td><b><?= $row["harga"]; ?></b></td>
                </tr>
                <?php $i++; ?>
            <?php endwhile; ?>
            </tr>
        </table>
        <tbody>
    </div>
    <!-- 203040039 -->
</body>