<?php
// Devi Indriawati
// 203040039
// Shift Rabu 09.00 - 10.00
?>

<?php
function hitungDeterminan($f, $a, $z, $i)
{

    //baris code perhitung detertiminan
    //menampilkan matriks

    echo "<table style = 'border-left: 2px solid black; border-right: 2px solid black;' cellspacing= '5' cellpadding='5'>
        <tr>
            <td> $f </td>
            <td> $a </td>
        </tr>
        <tr>
            <td> $z </td>
            <td> $i </td>
        </tr>
        </table>";
    $determinan = (($f * $i) - ($z * $a));
    echo "<p style = padding-top: 3px;><b> Determinan dari matriks tersebut adalah $determinan </b></p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Latihan 2D</title>
    <style>
        .count {
            border: 1px solid black;
            padding: 15px;
            color: Darkblue;
            width: 320px;
        }
    </style>
</head>

<body>
    <div class="count">
        <?php
        hitungDeterminan(1, 2, 3, 4)
        ?>
    </div>
</body>


</html>