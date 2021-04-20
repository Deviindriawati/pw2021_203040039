<?php
// Devi Indriawati
// 203040039
// Rabu 09.00 - 10.00
?>

<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}
require('functions.php');
$id=$_GET["id"];
$novel = query("SELECT * FROM novel WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Novel</title>
    <link rel="stylesheet" type="text/css" href="assets/Semantic-UI-CSS-master/Semantic-UI-CSS-master/semantic.min.css">
    <script type="text/javascript" src="semantic.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />



</head>

<body>
    <h2 class="ui segment">Detail Novel<?= $novel ["judul"] ?></h2>
    <div class="ui container">
        <div class="ui card">  
            <div class="content">
            <div class="content">
                <a class="header"><?= $novel ["penulis"] ?></a>
                <div class="meta">
                <a class="header"><?= $novel ["penerbit"]?></a>
                <div class="meta">
                    <span class="date">Rp.<?= $novel ["harga"] ?></span>
                </div>
                <div class="image">
                <img src="../assets/img/<?= $novel ["img"] ?>">
            </div>
            </div>
        </div>
        <a href="../index.php"><button class="ui inverted olive button">Back Again</button></a>
    </div>
</body>

</html>