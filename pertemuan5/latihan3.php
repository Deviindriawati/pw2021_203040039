<?php
 $mahasiswa = [
  ["Devi Indriawati", "203040039", "Teknik Informatika", "Deviindriawati02@gmail.com"],
  ["cia", "20304002", "Teknik Informatika", "cia02@gmail.com"],
  ["Azikra", "203040016", "Teknik Informatika", "azikra02@gmail.com"]  
 
 ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

 
<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>

<ul>
   <li>Nama : <?= $mhs [0]; ?></li>
   <li>NRP : <?= $mhs [1]; ?></li>
   <li>Jurusan : <?= $mhs [2]; ?></li> 
   <li>Email : <?= $mhs [3]; ?></li>
</ul>
<?php endforeach; ?>



    
</body>
</html>