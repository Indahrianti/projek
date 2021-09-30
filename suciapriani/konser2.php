<?php


    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'] ;
        $studio = $_POST['studio'] ;
        $jenis = $_POST['jenis'] ;
        $tiket = $_POST['tiket'] ;
        $harga1 = 500000;
        $harga2 = 250000;
        $jumlah = $tiket * $harga1;
        $total = $tiket * $harga2;

        {
            echo " Nama Pemesan  :  $nama <br>";
            echo "Kode Studio : $studio <br>";
        }

        if ($studio == "1") {
            echo "Bintang Tamu : Opick <br>" ;
        }else if ($studio == "2") {
            echo "Bintang Tamu : Raihan <br>" ;
        }else {
            echo "Tidak ada Bintang Tamu!";
        }
            if ($jenis == "VIP") {
                $harga1 = 500000;
    
                echo "Jenis Kelas : $jenis <br>";
                echo "Harga : $harga1<br>";
                echo "Jumlah Beli : $tiket <br>";
                echo "Total : $jumlah <br>";
        } elseif ($jenis == "Festival") {
            $harga2 = 250000;

            echo "Jenis Kelas : $jenis <br>";
            echo "Harga : $harga2<br>";
            echo "Jumlah Beli : $tiket <br>";
            echo "Total : $total <br>";
        }else {
            echo "Pilihan Tidak Tersedia";
        }
}
?>
<html>
    <body>
    <form method = "POST" action = "konser1.php">
<a href="konser1.php">INPUT KEMBALI</a>
</body>
</html>