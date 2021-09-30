<?php
$n= $_POST['n'];
for($a=0; $a <= $n - 1; $a++)
{
 $bilangan[$a] = $_POST['data'.$a];
}
$jumlah = 0;
for($a=0; $a <=$n - 1; $a++) 
{
 $jumlah += $bilangan[$a];
}
$rataRata = $jumlah/$n;
for($a=0; $a <= $n - 1; $a++){
echo "bilangan ke-".($a+1)." =".$bilangan[$a]."<br>";
}
echo"<br> Rata ratanya adalah :".$rataRata;
?>