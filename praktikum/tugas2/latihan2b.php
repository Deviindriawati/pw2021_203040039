<?php
// Devi Indriawati
// 203040039
// Shift Rabu 09.00 - 10.00
?>

<?php
    $jawabanIsset = "Isset adalah = untuk menentukan  suatu variabel sudah terdefinisi nilainya atau belum. <br><br>";
    $jawabanEmpty = "Empty adalah = untuk menentukan  suatu variabel itu kosong/tidak terdefinisi atau belum. ";

    function soal($style){
        echo $GLOBALS['jawabanIsset'];
        echo $GLOBALS['jawabanEmpty'];
    }


    echo soal( 
        "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight: bold;"
    );