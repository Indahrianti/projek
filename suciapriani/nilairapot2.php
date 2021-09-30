<!DOCTYPE html>
<html>
<head>
    <title>CETAK NILAI</title>
    <style type = "text/css">
    body{
        background-color: ;
    }
    </style>

 </html>
 <body>
     <h2 align="center">from cetak nilai siswa<br>
     smk assalaam bandung<br>tahun 2021</h2>
     <form method ='POST' action ='nilairapot2.php'>
         <br>
<?php
for($x=0;$x<count($mp_array);[$x++]){
    if($mp_array[$x] >85 && $mp_array[$x]<=100){
        $grade[$x]='A';
        $bobot[$x]=4;
    }elseif($mp_array[$x] >70 && $mp_array[$x]<=85){
        $grade[$x]='b';
        $bobot[$x]=3;
    }elseif($mp_array[$x] >60 && $mp_array[$x]<=85){
        $grade[$x]='c';
        $bobot[$x]=2;
    }elseif($mp_array[$x] >40 && $mp_array[$x]<=85){
        $grade[$x]='d';
        $bobot[$x]=1;
    }elseif($mp_array[$x] >40 && $mp_array[$x]<=85){
        $grade[$x]='e';
        $bobot[$x]=0;
    }
    $ratarata=array_sum($bobot)/10;
    
$no       =array('1','2','3','4','5','6','7','8','9','10');
$mapel    =array('pendidikan agama islam',
                 'ppkn',
                 'bahasa indonesia',
                 'matematika',
                 'bahasa inggris',
                 'produk Kreatif dan kewirausahaan',
                 'al-quran',
                 'bimbingan koneling',
                 'produktif rpl',
                 'produktif tkj',
               );
$totalarray = count($no);
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $nilai= $_POST['nilai'];

echo "<table border='2' cellpadding='8' align='center'>";
echo "<tr>";
echo "<td colspan='5'>
      <br>
      Nama : "  .$nama."<br>
      Nis : "   .$nis."<br>
      <br>
      </td>";
echo "</tr>";
echo "<tr>";
echo "<th>no</th>";
echo "<th>mata pelajaran</th>";
echo "<th>nilai</th>";
echo "</tr>";

for ($i=0; $i < $totalarray; $i++){ 

echo "<tr>";
echo "<td>$no[$i]</td>";
echo "<td>$mapel[$i]</td>";
echo "<td>$nilai[$x]></td>";
echo "</tr>";
}
echo "<tr>";
echo "<td colspan='5' align='center'>
      <br><br>
       <input type ='submit' name ='submit' value='cetak nilai'>
      <br>
      </td>";
echo "</tr>";
echo "</table>";
}
 ?>
 </form>
</body>
</html>