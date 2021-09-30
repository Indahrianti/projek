<?php
//cara penulisan class dan properrti oop php
class laptop
{
    //properti oop
    public $nama;
    public $merek;
    public $ukuran;

    //method oop
    public function hidup()
    {
   //isi method
   return "hidupkan laptop";
    }
    public function mati()
    {
   return "matikan laptop";
    }
}

//inslance objek dari class
$laptop = new laptop();
//set properti
$laptop->nama="suci apriani";
$laptop->merek="asus";
$laptop->ukuran="15 inci";

//tampilkan
echo $laptop->nama;
echo "<br>";
echo $laptop->merek;
echo "<br>";
echo $laptop->ukuran;
echo "<br>";
echo $laptop->hidup();
echo "<br>";
echo $laptop->mati();


?>