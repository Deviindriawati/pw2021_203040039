<?php
// Devi Indriawati
// 203040039
// Shift Rabu 09.00 - 10.00
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1b 203040039</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="10">
    <tr> 
      <th></th>
      <?php for ($i=1; $i<=5; $i++) : ?>
      <th>Kolom <?= $i; ?></th>
     <?php endfor; ?>


     </tr>
      <!-- Tambahkan baris kode php untuk menampilkan body table -->
      <?php for ($i=1; $i<=5; $i++) : ?>
        <tr>
        <th>Baris <?= $i; ?></th>
        <?php for ($z=1; $z<=5; $z++) : ?>
        <td> Baris <?= $i ?>, kolom <?= $z; ?></td>
        <?php endfor; ?>
        </tr>
        <?php endfor; ?>
        </table>
</body>
</html>