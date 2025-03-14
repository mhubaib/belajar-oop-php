<?php

// belajar traits, static method.

// trait
trait pertama{
    function pertama(){
        echo "ini trait pertama \n";
    }
}

trait kedua{
    protected function kedua(){
        echo "ini trait kedua \n";
    }
}
trait ketiga{
    private function ketiga(){
        echo "ini trait ketiga \n";
    }
}
trait keempat{
    function keempat(){
        echo "ini trait keempat \n";
    }
}

class target{
    use pertama,kedua,ketiga,keempat;

    function pertama(){
        echo "ini adalah override dari method pertama \n";
    }

    function panggil(){
        $this->kedua();
        $this->ketiga();
    }
}

$trait = new target;
$trait->pertama();
// $trait->kedua();
// $trait->ketiga();
$trait->keempat();
$trait->panggil();

// static method.
class statis{

    static function methodstatic(){
        echo "ini method static " . "\n";
    }
    function biasa(){
        echo "ini method biasa " . "\n";
    }
    function dinamis(){
        $this->biasa();    //ini method biasa
        self::methodstatic();   //ini method statis
    }
}

statis:: methodstatic();   //gak perlu instansiasi objek.

// harus instansiasi objek dulu.
$statik = new statis;
$statik->dinamis();

// static property.

class kelas{
    static public $property;

    static public function statis(){
        echo "Hallo ". self::$property . "\n";
    }
}

class anak extends kelas{
    function __construct()
    {
        echo "Ini yang ambil dari kelas induk : ". parent::$property . "\n"; //panggil pakai parent.
        echo "Ini yang ambil dari kelas induk : ". kelas::$property . "\n"; //panggil langsung nama kelas.
    }
}

kelas::$property = "paustad";
kelas::statis();

$anak = new anak;



