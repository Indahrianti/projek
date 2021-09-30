<?php
//cara penulisan class dan properrti oop php
class oop
{
    //properti oop
    public $mobil;
    public $motor;
    public $sepeda;
    public $becak;
    public $buku;
    public $manusia;
    public $burung;
    public $singa;
    public $ikan;
    public $pohon;

    //method oop
    public function maju()
    {
   //isi method
   return "Maju";
    }

    public function berhenti()
    {
   return "Berhenti";
    }
    public function kiri()
    {
   return "Belok ke kiri";
    } public function kanan()
    {
   return "Belok ke kanan";
    }
    public function mundur()
    {
   return "Mundur";
    }

    public function baca()
    {
   //isi method
   return "Dibaca";
    }

    public function jalan()
    {
   return "jalan";
    }
    public function nafas()
    {
   return "nafas";
    }
    public function bicara()
    {
   return "Bicara";
    }
    public function lari()
    {
   return "lari";
    } 
    public function duduk()
    {
   return "duduk";
    }
    public function terbang()
    {
   return "terbang";
    }
    public function kepak()
    {
   return "mengepakan sayap";
    }
    public function bersiul()
    {
   return "bersiul";
    }
    public function makan()
    {
   return "makan";
    }
    public function mematuk()
    {
   return "mematuk";
    } public function mengaum()
    {
   return "mengaum";
    }
    public function mencakar()
    {
   return "mencakar";
    }
    public function berlari()
    {
   return "Berlari";
    }
    public function melompat()
    {
   return "Melompat";
    }
    public function menerkam()
    {
   return "Menerkam";
    }
    public function berenang()
    {
   return "berenang";
    } public function bernafas()
    {
   return "Bernafas";
    }
    public function lompat()
    {
   return "melompat didalam air";
    }
    public function penyakit()
    {
   return "mencegah penyakit";
    }
    public function otak()
    {
   return "menjaga fungsi otak";
    }
    public function menghasilkan_oksigen()
    {
   return "menghasilkan_oksigen";
    } 
    public function habitat()
    {
   return "habitat marga satwa";
    }
    public function membersihkan()
    {
        return "membersihkan udara";
    }
    public function iklim()
    {
        return "mencegah perubahan iklim";
    }
    public function banjir()
    {
        return "mencegah banjir";
    }
}
//inslance objek dari class
$oop = new oop();
echo "<li>";
$oop->mobil="mobil";
$oop->motor="motor";
$oop->sepeda="sepeda";
$oop->becak="becak";
$oop->buku="buku";
$oop->manusia="manusia";
$oop->burung="burung";
$oop->singa="singa";
$oop->ikan="ikan";

echo "mobil";
$oop->mobil="mobil";
echo "<br>";
echo $oop->maju();
echo "<br>";
echo $oop->berhenti();
echo "<br>";
echo $oop->kiri();
echo "<br>";
echo $oop->kanan();
echo "<br>";
echo $oop->mundur();
echo "<br>";

echo "<p>";
echo "<li>";

echo "motor";
$oop->motor="motor";
echo "<br>";
echo $oop->maju();
echo "<br>";
echo $oop->berhenti();
echo "<br>";
echo $oop->kiri();
echo "<br>";
echo $oop->kanan();
echo "<br>";
echo $oop->mundur();
echo "<br>";

echo "<p>";
echo "<li>";

echo "sepeda";
$oop->sepeda="sepeda";
echo "<br>";
echo $oop->maju();
echo "<br>";
echo $oop->berhenti();
echo "<br>";
echo $oop->kiri();
echo "<br>";
echo $oop->kanan();
echo "<br>";
echo $oop->mundur();
echo "<br>";

echo "<p>";
echo "<li>";

echo "beca";
$oop->beca="beca";
echo "<br>";
echo $oop->maju();
echo "<br>";
echo $oop->berhenti();
echo "<br>";
echo $oop->kiri();
echo "<br>";
echo $oop->kanan();
echo "<br>";
echo $oop->mundur();
echo "<br>";

echo "<p>";
echo "<li>";

echo "buku";
$oop->buku="buku";
echo "<br>";
echo $oop->baca();

echo "<p>";
echo "<li>";

echo "manusia";
$oop->manusia="manusia";
echo "<br>";
echo $oop->jalan();
echo "<br>";
echo $oop->nafas();
echo "<br>";
echo $oop->bicara();
echo "<br>";
echo $oop->lari();
echo "<br>";
echo $oop->duduk();
echo "<br>";

echo "<p>";
echo "<li>";

echo "burung";
$oop->burung="burung";
echo "<br>";
echo $oop->terbang();
echo "<br>";
echo $oop->kepak();
echo "<br>";
echo $oop->bersiul();
echo "<br>";
echo $oop->makan();
echo "<br>";
echo $oop->mematuk();
echo "<br>";

echo "<p>";
echo "<li>";

echo "singa";
$oop->singa="singa";
echo "<br>";
echo $oop->mengaum();
echo "<br>";
echo $oop->mencakar();
echo "<br>";
echo $oop->berlari();
echo "<br>";
echo $oop->melompat();
echo "<br>";
echo $oop->menerkam();
echo "<br>";

echo "<p>";
echo "<li>";

echo "ikan";
$oop->ikan="ikan";
echo "<br>";
echo $oop->berenang();
echo "<br>";
echo $oop->bernafas();
echo "<br>";
echo $oop->lompat();
echo "<br>";
echo $oop->penyakit();
echo "<br>";
echo $oop->otak();
echo "<br>";
