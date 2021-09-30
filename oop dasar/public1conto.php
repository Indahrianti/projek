<?php
//buat clas laptop 
class laptop{
    //buat public properti
    public $pemilik;

   //buat public method
    public function hidupkan_laptop(){
        return "hidupkan laptop";
    }
}

//buat objek dari class laptop (instansitasi)
$laptop_anto = new laptop();

//set properti
$laptop_anto->pemilik="Anto<br>";

//tampilkan anto
echo $laptop_anto->pemilik; //anto

//tampilkan method
echo $laptop_anto->hidupkan_laptop(); //"hidupkan laptop"
?>