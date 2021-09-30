<!DOCTYPE html>
<html>
<head>
<title>proses menghitung</title>
</head>
<body>
    <h2>input bilangan</h2>
     <form method = "POST" action = "">
        <table>
        <tr>
        <td>masukan banyaknya bilangan</td>
        <td>:</td>
        <td><input type = 'text' name ='bilangan' ></td>
        <td><input type = 'submit' name ='simpan' value ='submit' >
        </td>
        </tr>
      </table>
    </form>
    </html>
<?php
if (isset($_POST['simpan'])) {
    $bilangan = $_POST['bilangan'] ;
    echo "<h2>input bilangan</h2>";
    for($a=1; $a <=$bilangan; $a++){
        for($b = 0; $b < $bilangan; $b++){
        }
    echo "<table>";
    echo "<tr>";
    echo "<td>bilangan ke- $a </td>";
    echo "<td><input type = 'text' name='bilangan'</td>";
    echo "<td></td>";
    echo "</tr>";
    echo "</table>";
    }
    echo "<table>";
    echo "<tr>";
    echo "<td></td>";
    echo "<td><input type = 'submit' name='simpan' value= 'submit'</td>";
    echo "</tr>";
    echo "</table>";
}


    

?>