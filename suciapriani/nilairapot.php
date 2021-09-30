<!DOCTYPE html>
<html>
<head>
    <title>CETAK NILAI</title>
    <style type = "text/css">
    body{
        background-color: #00ffff;
    }
    </style>

</head>
 <body>
     <h2 align="center">form cetak nilai siswa<br>
     smk assalaam bandung<br>tahun 2021/2022</h2>
     <form method ='POST' action ='nilairapot2.php'>
     <br>
<?php
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
echo "<table border='2' cellpadding='8' align='center'>";
echo "<tr>";
echo "<td colspan='5'>
      <br>
      Nama : <input type='text' name='nama'><br>
      Nis : <input type ='number' name='nis'><br>
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
echo "<td><input type='number' name ='nilai'></td>";
echo "</tr>";
}
echo "<tr>";
echo "<td colspan='5' align='center'>
      <br><br>
      <input type='submit' name ='submit' value='cetak nilai'>
      <br>
      </td>";
echo "</tr>";
echo "</table>";
 ?>
 </form>
</body>
</html>