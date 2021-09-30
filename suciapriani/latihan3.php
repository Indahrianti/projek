<?php
echo "<center>Diskon ppdb bulan mei juni juli</center><br>";
$bulan = "jui";
$harga = 100000;
$potong1 = $harga - ($harga * (30/100));
$potong2 = $harga - ($harga * (20/100));
$potong3 = $harga - ($harga * (10/100));

if ($bulan == "mei"){
    echo "anda mendaftar bulan $bulan <br>";
    echo "anda mendapatkan diskon 30%<br>i";
    echo "anda mendapatkan Rp. $potong1<br>";
}elseif($bulan == "juni"){
    echo "anda mendaftar bulan $bulan <br>";
    echo "anda mendapatkan diskon 30%<br>i";
    echo "anda mendapatkan Rp. $potong2<br>";
}elseif($bulan == "juli"){
    echo "anda mendaftar bulan $bulan <br>";
    echo "anda mendapatkan diskon 30%<br>i";
    echo "anda mendapatkan Rp. $potong3<br>";
}else{
    echo "bulan tidak tersedia";
}
?>
