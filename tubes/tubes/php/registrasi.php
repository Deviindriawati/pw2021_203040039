<?php
require 'functions.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
alert('registrasi Berhasil');
document.location.href = 'login.php';
</script>";
    } else {
        echo "<script>
		alert('registrasi Gagal');
		</script>";
    }
}
?>

<html>

<head>
    <link rel="shorcut icon" href="../logo2.jpeg">
    <title>REGISTRASI</title>
</head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
<link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.min.css">

<link rel="stylesheet" type="text/css" href="../css/style.css">

<body class="background_reg">
    <form action="" method="post">
        <div class="kotak_login">
            <h5 class="tulisan_login">REGISTRASI </h5>
            <hr>
            </hr><br>
            <table>
                <tr>
                    <td><i class="medium material-icons">account_circle</i> </td>
                    <td>:</td>
                    <td><input type="text" class="form_login" name="username"></td>
                </tr>
                <tr>
                    <td><i class="medium material-icons">lock</i></td>
                    <td>:</td>
                    <td><input type="password" class="form_login" name="password"></td>
                </tr>
            </table>
            <br>
            <button type="submit" class="tombol_registrasi" name="register">REGISTER</button>

            <a class="back" href="login.php">Back to login</a>
            <br>
    </form>
    </div>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>

</html>