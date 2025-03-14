<?php

// belajar interface

interface Vehiclecar {
    public function getMobil();
}

interface Motorcycle {
    public function getMotor();
}

class toyota implements Vehiclecar, Motorcycle {

    public $motor;
    public $mobil;

    public function setMobil($mobil){
        $this->mobil = $mobil;
    }

    public function setMotor($motor){
        $this->motor = $motor;
    }

    public function getMobil()
    {
        echo "- $this->mobil ini adalah mobil mahal " . "\n";
    }
    public function getMotor()
    {
        echo "- $this->motor ini adalah motor murah " . "\n";
    }
}

$mobil = new toyota();
$mobil->setMobil("alphard");
$mobil->getMobil();

$motor = new toyota();
$motor->setMotor("ducati");
$motor->getMotor();