<?php
/*
Devi Indriawati 
203040039
https://github.com/Deviindriawati/pw2021_203040039
Teknik informatika A
Pemograman Web
Pertemuan 7 - Request Method   GET & POSH
*/
?>

<?php 
// cek apakah tombol submit sudah tekan atau belum
if( isset($_POST["submit"]) ) {
    // cek username & password
    if( $_POST['username'] == "admin" && $_POST["password"] == "123" ) {
    // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    }
    else {
    // jika salah, tampilkan pesan kesalahan
        $error = true;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
<h1>Login Admin</h1>

<?php if( isset($error) ) : ?>
    <p style="color:red; font-style: italic;" >username atau password salah!</p>
<?php endif; ?>

<ul>
<form action="" method="post">  
    <li>
        <label for="username">username:</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">password:</label>
        <input type="password" name="password" id="password">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>

</from>
</ul>
</body>
</html> 