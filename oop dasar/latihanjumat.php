<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>analisis program</title>
</head>
<body>
    <form method="post" action="">
        <fieldset>
            <legend>
                <h1>analisis program</h1>
            </legend>
            <table>
                 <tr>
                    <td>
                        Pilih program 
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="program" required>
                            <option value="bulan">pemograman bulan</option>
                            <option value="jurusan">pemograman jurusan</option>
                            <option value="biodata">Biodata</option>
                        </select>
                    </td>  
                    <td><input type="submit" name="submit" value='Submit'></td>
                 </tr> 
            </table> 
        </fieldset>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $pilih = $_POST ['program'];
  
    if ($pilih == "bulan"){
    echo "<form method='post' action= ''>";
    echo "<fieldset>";
    echo "<legend><h1> analisis program</h1></legend>";
    echo "<td>pilih bulan</td>";
    echo "<td> : </td>";
    echo "<td><input type='number' name='pilih'></td>";
    echo "<td><input type='submit' name='submit1' value='Submit'></td>";
    echo "</form>";
    
    }
}
    if (isset($_POST['submit1'])) {
        $pilih = $_POST ['pilih'];


    class bulan{ 
        public function bln($pilih){
            echo "<form method='post' action= ''>";
            echo "<fieldset>";
            echo "<legend><h1> analisis program</h1></legend>";
            echo "<td>pilih bulan</td>";
            echo "<td> : </td>";
            echo "<td><input type='number' name='pilih'></td>";
            echo "<td><input type='submit' name='submit1' value='Submit'></td>";
            echo "</form><br>";


    if ($bulan== "1") {
        echo "anda memilih bulan = januari" ;
    }else if ($bulan == "2") {
        echo "anda memilih bulan = febuari" ;
    }else if ($bulan == "3") {
        echo "anda memilih bulan = maret" ;
    }else if ($bulan == "4") {
        echo "anda memilih bulan = april" ;
    }else if ($bulan == "5") {
        echo "anda memilih bulan = mei" ;
    }else if ($bulan == "6") {
        echo "anda memilih bulan = juni" ;
    }else if ($bulan == "7") {
        echo "anda memilih bulan  = juli" ;
    }else if ($bulan == "8") {
        echo "anda memilih bulan = agustus" ;
    }else if ($bulan == "9") {
        echo "anda memilih bulan = september" ;
    }else if ($bulan == "10") {
        echo "anda memilih bulan = oktober" ;
    }else if ($bulan == "11") {
        echo "anda memilih bulan = november" ;
    }else if ($bulan == "12") {
        echo "anda memilih bulan = desember" ;
    }else {
        echo "Tidak terdaftar bulan !";
    }
 }
    public function bln($bulan){
        return $this->bulan($bulan);
    }
}
$bln1= new bulan();
echo $bulan->bln($bulan);
?>