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
<div class="container">
        <div class="grid">
            <div class="row">
                <?php 
            foreach ($result as $nvl) :
            ?>
                <div class="cell-md-3">
                    <div class="card">
                        <div class="card-header">
                            <img style="width: 80px" src="../latihan4c/assets/img/<?= $nvl['img'] ?>">
                        </div>
                        <div class="card-content p-2">
                            <a class="text-center"
                                href="php/detail.php?id=<?= $nvl["id"] ?>"><?= $nvl["judul"] ?> </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- 203040039 -->
</body>