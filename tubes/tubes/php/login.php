<?php
session_start();
require 'functions.php';
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");

    $row = mysqli_fetch_assoc($result);

    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}
//login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] =  hash('sha256', $row['id'], false);

            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);;
            }

            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }

            header("Location: ../index.php");
            die;
        }
    }
    $error = true;
}
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="shorcut icon" href="logo2.jpeg">
    <title></title>

</head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
<link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.min.css">

<link rel="stylesheet" type="text/css" href="../css/style.css">

<body class="background1">
    <div class="kotak_login">
        <h5 class="center">Login</h5>
        <hr>
        </hr><br>
        <form action="" method="post">
            <?php if (isset($error)) : ?>
                <p style="color : red; font-style: italic;">Username atau password salah</p>
            <?php endif; ?>
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
            <div class="remember">
                <p>
                    <label>
                        <input type="checkbox" name="remember">


                        <span>

                            <label for="remember">Remember me</label></span>

                </p>
            </div>
            <button type="submit" class="tombol_login" name="submit">Login</button>
            <div class="registrasi">
                <p>Belum punya akun ? registrasi <a href="registrasi.php">Disini</a></p>
            </div>
            <hr>
            </hr>
        </form>
    </div>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>

</html>