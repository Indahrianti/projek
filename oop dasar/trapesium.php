<?php
    class trapesium
    {
        public $a;
        public $b;
        public $tinggi;

        function __construct($a, $b, $tinggi)
        {
            $this->a=$a;
            $this->b=$b;
            $this->tinggi=$tinggi; 
        }
        function Luas_trapesium(){
            $ab = $this->a + $this->b;
            $Luas= 1/2 * $ab * $this->tinggi;
            echo "menghitung luas trapesium <br>";
            echo "Rumus luas trapesium = 1/2 x (a + b) x tinggi <br>";
            echo "Rusuk sejajar a = " . $this->a."<br/>";
            echo "Rusuk sejajar b = " . $this->b."<br/>";
            echo "tinggi =" . $this->tinggi."<br>";
            echo "<br/><b>Luas trapesium= $Luas</b>";
        }
    }
    $trapesium=New trapesium(20,2,2);
    $trapesium->Luas_trapesium();
?>