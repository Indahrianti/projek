<?php
//cara penulisan class dan properrti oop php
//objek
class mobil
{
    //atribut
    //properti oop
    public $warna;
    public $merek;
    public $ukuran;

    //method oop
    public function maju()
    {
   //isi method
   return "silahkan maju maksimal 60km/jam <br\>";
    }
    public function berhenti()
    {
   return "stop, anda melebihi kecepatan";
    }
}

//inslance objek dari class
$mobil = new mobil();
$mobil->warna="merah";
//tampilkan
echo "mobil warna $mobil->warna";
echo $mobil->maju();
echo "<br>";
echo $mobil->berhenti();

?>