<?php
class Motor
{
    public $merkMotor, $ownerMotor;

    public function __construct(
        $merk = 'Satria FU',
        $owner = 'Didik Prabowo'
    ) {
        $this->merkMotor = $merk;
        $this->ownerMotor = $owner;
    }

    public function getData(): array
    {
        $data = [
            'owner' => $this->merkMotor,
            'merk' => $this->ownerMotor
        ];
        return $data;
    }

    public function __destruct()
    {
        echo "Selesai...";
    }
}

$motor1 = new Motor();
echo $motor1->getData()['owner'];
echo "<br>" . $motor1->getData()['merk'] . "<br>";