<html>
    <head>
        <title> Suhu dan Waktu</title>
</head>
<h2> Konversi Suhu dan Waktu</h2>
 <table> 
<form method= "POST" action = " ">
<tr> 
    <td>Masukan Angka</td>
    <td>:</td>
    <td><input type='number' name='celcius'></td> 
</tr>

<tr> 
    <td>Program</td>
    <td>:</td>
    <td><select name="kode">
    <option value="konversi1">Konverensi Suhu</option>
    <option value="konversi2">Konverensi Waktu</option>
    </select>
    </td> 
    <td><input type="submit" name="submit" value='Submit'>
</tr>
</table> 
<br>
</html>

<?php 
if (isset($_POST['submit'])) {
    $celcius = $_POST ['celcius'];
    $waktu = $_POST ['celcius'];
    $kode = $_POST ['kode'];
    $pilihan = $kode;
    
    if ($pilihan == "konversi1"){
    class suhu
    {
        public $celcius;
        function __construct($celcius)
        {
            $this->celcius=$celcius;
            echo "Celcius = $celcius derajat<br>";
        }
        public function kelvin()
        {
            $kelvin=$this->celcius+273.15;
            echo "Kelvin = $kelvin derajat <br>";
        }
        public function fahrenheit()
        {
            $fahrenheit=$this->celcius*1.8+32;
            echo "Fahrenheit = $fahrenheit derajat <br>";
        }
        public function reamur()
        {
            $reamur = 4/5 * $this->celcius;
            echo "Reamur = $reamur derajat <br>";
        }
        function __destruct()
        {
            echo "<br> SEKIAN";
        }
    }
    $celcius = new suhu($celcius);
    $celcius->kelvin();
    $celcius->fahrenheit();
    $celcius->reamur();
    
}else if  ($pilihan == "konversi2"){
    class waktu
    {
        public $waktu;
        function __construct($waktu)
        {
            $this->waktu = $waktu;
            echo "Konversi Detik = $waktu <br> ";
        }
        public function hari()
        {
            $hari = $this->waktu / 86400;
            echo "Hari = $hari <br>";
        }
        public function jam() 
        {
            $jam = $this->waktu / 3600;
            echo "Jam = $jam <br>";
        }
        public function menit()
        {
            $menit = $this->waktu / 60;
            echo "Menit = $menit <br> ";
        }
        function __destruct()
        {
            echo "<br> sekian";
        }
    }
    $waktu = new waktu($waktu);
    $waktu->hari();
    $waktu->jam();
    $waktu->menit();
    }else 
    {
        echo "Tidak Ada Pilihan!";
    }
}

?>