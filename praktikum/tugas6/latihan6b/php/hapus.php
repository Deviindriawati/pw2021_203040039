<?php
// Devi Indriawati
// 203040039
// Shift Rabu 09.00 - 10.00
?>
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';
$id = $_GET['id'];
if (hapus($id) > 0) {
    echo "<script>
          alert('Data Berhasil dihapus!!');
          document.location.href = 'admin.php';
          </script>";
} else {
    echo "<script>
    alert('Data gagal dihapus!!');
    document.location.href = 'admin.php';
    </script>";
}