<?php
    class lingkaran
    {
        public $phi;
        public $jarijari;
        public $r;

        function __construct($phi,$jarijari,$r)
        {
            $this->phi=$phi;
            $this->jarijari=$jarijari;
            $this->r=$r;
        }
        function Luas(){
            $hasil=$this->phi * $this->r**2;
            echo "menghitung lingkaran <br>";
            echo "rumus lingkaran = phi x r2 <br>";
            echo "phi = " . $this->phi."<br/>";
            echo "jari = " . $this->jarijari."<br/>";
            echo "<br/><b>Luas lingkaran= $hasil</b>";
        }
    }
    $lingkaran=New lingkaran(3.14,7,7);
    $lingkaran->Luas();
?>