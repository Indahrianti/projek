<!DOCTYPE html>
<html>
<head>
    <title>mari menghitung</title>
</head>
<body>
<form method = "POST" action = "">
<table>
    <tr>
         <td>masukan bintang</td>
          <td>:</td>
          <td><input type='text' name='nama' value =""></td> 
      <td><input type = "submit" name = 'simpan' value = 'kirim'>
      </td>
      </table>
</body>
</html>
<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    
    echo"frogram segitiga bintang siku siku<br>";

for($i = 1  ; $i <= $nama; $i++){
    for($j = 1; $j <= $i ; $j++){
        echo "*";
    }
    echo"<br>";
}
    echo"frogram ganjil genap menggunakan for<br>";
    echo bilangan ($nama);
}
    function bilangan ($nama){
        $ganjil = 0;
        for ($i=1; $i <= $nama; $i++){
            if ($i%2==0){
                echo $i."<br>";
                $ganjil++;
            }
        }
    }
?>

