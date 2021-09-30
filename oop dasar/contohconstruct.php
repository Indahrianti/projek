<?php
class Motor
{
    public $merkMotor;

    public function __construct($merk)
    {
        $this->merkMotor = $merk;
    }

    public function cetakMerk()
    {
        return $this->merkMotor;
    }
}

$motor1 = new Motor("Satria FU");

echo $motor1->cetakMerk();
