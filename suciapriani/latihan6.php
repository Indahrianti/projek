<?php
echo "Mengubah celsius menjadi reamur, farenhit dan kelvin";
echo "<br>";

$suhu = 20;
$konversi = "farenheit";
$reamur = 4/5 * $suhu;
$farenheit = 9/5 * $suhu;
$kelvin = $suhu + 273;

if ( $konversi == "reamur"){
    echo "hasil konversi reamur = $reamur" ;
}elseif ($konversi == "farenheit"){
    echo "hasil konversi farenheit = $farenheit";
}elseif ($konversi == "kelvin"){
    echo "hasil konversi kelvin= $kelvin";
}
?>