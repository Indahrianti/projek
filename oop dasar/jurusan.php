<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="" method="post">
        <fieldset>
        <table>
        <tr> 
    <td>Pilih Jurusan</td>
    <td>:</td>
    <td><select name="kode">
    <option value="1"> RPL</option>
    <option value="2"> TBSM</option>
    <option value="3"> TKRO</option>

    </select>
    </td> 
    <td><input type="submit" name="submit" value='Tampil'>
</tr>
        </table> 
        </fieldset> 
    </form>
    </html> 

    
    <?php
if (isset($_POST['submit'])) {
    $kode = $_POST ['kode'];

$k = $kode;

if ($k == "1"){
class data{
    private $jurusan="rpl";

    public function jur(){
        return "Anda memilih jurusan RPL";
    }
}
echo "<br>";
$j = new data();
echo $j->jur();


} else if ($k == "2"){
    class data{
        private $jurusan="tbsm";
    
        public function jur(){
            return "Anda memilih jurusan TBSM";
        }
    }
    echo "<br>";
    $j = new data();
    echo $j->jur();


} else if ($k == "3"){
    class data{
        private $jurusan="tkro";
    
        public function jur(){
            return "Anda memilih jurusan TKRO";
        }
    }
    echo "<br>";
    $j = new data();
    echo $j->jur();
}
}