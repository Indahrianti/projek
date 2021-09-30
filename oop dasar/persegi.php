<?php
    class persegipanjang
    {
        public $panjang;
        public $lebar;
        function __construct($panjang,$lebar)
        {
            $this->panjang=$panjang;
            $this->lebar=$lebar;
        }
        function Luas_persegi(){
            $Luas=$this->panjang*$this->lebar;
            echo "menghitung luas persegi panjang<br>";
            echo "rumus persegi panjang = p x l <br>";
            echo "panjang persegi = ".$this->panjang."<br/>";
            echo "Lebar persegi panjang = ".$this->lebar."<br/>";
            echo "<br/><b>Luas persegi panjang = $Luas</b>";
        }
    }
    $persegipanjang=New persegipanjang(200,500);
    $persegipanjang->Luas_persegi();
?>