<?php
 $waktu = "detik";
 $detik = 86400;
 $menit = ($detik / 60);
 $jm = ($detik / 36000);
 $hari = ($detik / 86400);

 if ($waktu == "detik") {
     echo "$detik detik = $menit menit<br>";
     echo "$detik detik = $jm jam<br>";
     echo "$detik detik = $hari hari<br>";
 }else {
     echo "tidak diwaktu";
 }
 ?>