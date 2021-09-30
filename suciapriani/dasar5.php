<?php
echo "1.pengulangan for <br>";
echo "<br>";
for($i=0; $i < 10; $i++){
    echo "ini perulangan ke - $i <br>";
}
echo "<br>";
echo "2.pengulangan while <br>";
echo "<br>";
$ulangi = 0;
while ($ulangi < 10){
    echo "ini perulangan ke - $ulangi <br>";
    $ulangi++;
}
echo "<br>";
echo "3.pengulangan do-while <br>";
echo "<br>";
do{
    echo "ini perulangan ke - $ulangi <br>";
    $ulangi++;
}while ($ulangi < 10);
echo "<br>";
echo "4.pengulangan foreach <br>";
echo "<br>";
$books = [
    "panduan belajar java untuk pemula",
    "membangun aplikasi java dengan netbeans",
    "tutorial java dan mysql",
    "membuat penggajian desktop dengan java"
];
echo "<h5>judul buku java</h5>";
echo "<ol>";
foreach ($books as $buku) {
    echo "<li>$buku</li>";
}
echo "</ol>";