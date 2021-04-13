<?php

function cetak_bintang($angka)
 {

  for ($i = 1; $i <= $angka; $i++){
    for ($j = 0; $j < $i; $j++){
      echo "*";
    }
    echo "<br>";
  }
}

cetak_bintang(3);
cetak_bintang(5);
cetak_bintang(7);


?>