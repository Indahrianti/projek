<?php
class komputer{
    private $jenis_processor = "intel core 17-4790 3.6gb";

    public function tampilkan_processor(){
        return $this->jenis_processor;
    }
}

class laptop extends komputer{
    
    public function tampilkan_processor(){
        return $this->jenis_processor;
    }
}

$komputer_baru = new komputer();

$laptop_baru = new laptop();

echo $komputer_baru->tampilkan_processor();



?>