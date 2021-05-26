<?php
// Devi Indriawati
// 203040039
// Shift Rabu 09.00 - 10.00
?>
<?php
require '../php/functions.php';
$Novel = query("SELECT * FROM novel")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="../css/style.css">
    <title>Home Novel</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<style>
    .card {
        width: 250px !important;
        box-shadow: 6px 6px 6px 6px rgba(0, 0, 0, 0.4);
    }

    .card-image {
        width: 200x !important;
        height: 300px !important;
    }

    .card-title {
        padding-top: 80px;
    }

    button {
        font-family: 'Bree Serif', serif;
    }

    .background {
        background-image: url(../assets/img/26.jpg);
        background-size: cover;
    }

    h1 {
        font-family: 'Bree Serif', serif;
        font-style: italic;
    }
</style>
<title>All Novel</title>

<body>
    <div class="background">
        <script type="text/javascript" src="../js/materialize.min.js">
        </script>
        <div class="container">
            <h1 class="centered brown-text center">All Novel</h1>
            <a href="../php/login.php" class="waves-effect waves-light blue white-text btn-smal">Login Halaman Admin</a>
            <div class="row">
                <?php foreach ($Novel as $nvl) : ?>
                    <div class="col m4 s12">
                        <div class="card">
                            <div class="card-image">
                                <img src="../assets/img/<?= $nvl['img']; ?>" class="responsive-img">
                            </div>
                            <div class="card-content">
                                <span></span>
                            </div>
                            <div class="card-action">
                                <a href="../php/detaill.php?id=<?= $nvl['id']; ?>" class="waves-effect #795548 brown btn">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    </div>
</body>


</html>