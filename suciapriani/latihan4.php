<?php
echo "PROGRAM PEMILIH JURUSAN";
echo "<br>";
$jurusan = "tkr";
switch($jurusan){
    case "rpl";
    echo "rekayasa perangkat lunak";
    break;
    case "tkr";
    echo "tekni bisnis sepeda motor";
    break;
    case "tbsm";
    echo "Teknik kendaran ringan otomotif";
    break;
    default;
    echo "tidak ada jurusan";
}
?>