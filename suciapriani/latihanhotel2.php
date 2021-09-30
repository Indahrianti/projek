<?php
echo "<center><h3>pendataan tamu hotel</h3></center><br>";
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'] ;
        $identitas = $_POST['identitas'] ;
        $durasi = $_POST['durasi'] ;
        $tgl = $_POST['tgl'] ;
        $kamar = $_POST['kamar'] ;
        $superior = 850000;
        $deluxe = 950000;
        $junior_suite =1400000 ;
        $permalam1 = $superior *$durasi;
        $permalam2 = $deluxe * $durasi;
        $permalam3 = $junior_suite * $durasi;
        $diskon1 = 170000;
        $diskon2  = 250000;
    }
    echo "<tr>";
    echo " Nama tamu";
    echo "<td>:</td>";
    echo "<td>$nama</td>";
    echo "</tr>";
    echo "<br>";

    
    echo "<tr>";
    echo " no identitas";
    echo "<td>:</td>";
    echo "<td>$identitas</td>";
    echo "</tr>";
    echo "<br>";

    echo "<tr>";
    echo " durasi menginap";
    echo "<td>:</td>";
    echo "<td>$durasi</td>";
    echo "</tr>";
    echo "<br>";

    echo "<tr>";
    echo " tanggal menginap";
    echo "<td>:</td>";
    echo "<td>$tgl</td>";
    echo "</tr>";
    echo "<br>";

    echo "<tr>";
    echo " tipe kamar";
    echo "<td>:</td>";
    echo "<td>$kamar</td>";
    echo "</tr>";
    echo "<br>";

    if ($kamar == "superior") {
        $superior = 850000;
        echo "ANDA MEMILIH TIPE KAMAR : $kamar<br>";
        echo "HARGA KAMAR : $superior<br>";
        echo "total yang harus di bayar :  $permalam1<br>";
    }elseif($kamar == "deluxe"){
        $deluxe = 950000;
        echo "ANDA MEMILIH TIPE KAMAR : $kamar<br>";
        echo "HARGA KAMAR : $deluxe<br>";
        echo "BIAYA YANG HARUS DIBAYAR : $permalam2<br>";
    }elseif($kamar == "junior_suite"){
        $junior_suite = 1400000;
        echo "ANDA MEMILIH TIPE KAMAR : $kamar<br>";
        echo "HARGA KAMAR : $junior_suite<br>";
        echo "BIAYA YANG HARUS DIBAYAR : $permalam3<br>";
    }
    if($permalam1 >= 170000 && $permalam1 <= 250000){
        $diskon1 = 0.15 * $permalam1;
        $permalam1 = $permalam1 - $diskon1;
        echo"<br>";
        echo "Anda mendapatkan diskon sebesar 15%<br>";
        echo "maka harus membayar sebesar $permalam1";
    }elseif($permalam2 >= 250000){
        $diskon2 = 0.25 * $permalam2;
        $permalam2 = $permalam2 - $diskon2;
        echo"<br>";
        echo "Anda mendapatkan diskon sebesar 25%<br>";
        echo "maka harus membayar sebesar $permalam2";
    }else{
        echo "<br>";
        echo "tidak ada diskon";
    }
    
?>
