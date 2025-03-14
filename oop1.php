<?php 
// class, object, property, method, construct, destruct.

class Mobil{

    // Property
    public $warna;
    public $merk;
    public $harga;
    public $bensin;

    // Method
    function setAll($warna,$merk,$harga,$bensin){
        $this->warna = $warna;
        $this->merk = $merk;
        $this->harga = $harga;
        $this->bensin = $bensin;
    }
    function setBensin($merk){
        $this->bensin = $merk;
    }
    function setMerk($merk){
        $this->merk = $merk;
    }

    function tampilkanMerk(){
        echo "Merk Mobil : ".$this->merk."\n";
    }
    function tampilkanBensin(){
        echo "Bensin Mobil : ".$this->bensin."\n";
    }
    function tampilkanWarna(){
        echo "Warna Mobil : ".$this->warna."\n";
    }
    function tampilkanHarga(){
        echo "Harga Mobil : ".$this->harga."\n";
    }
    function tampilkanSemua(){
        $this->tampilkanMerk();
        $this->tampilkanHarga();
        $this->tampilkanWarna();
        $this->tampilkanBensin();
    }
}

$toyota = new Mobil("toyota");
$toyota->harga = "1000000000";
$toyota->tampilkanHarga();
$toyota->setMerk("toyota");

$yamaha = new Mobil("yamaha");
$yamaha->setMerk("yamaha");
 $yamaha->tampilkanMerk();
  $toyota->tampilkanMerk();

$toyota->setBensin("Shell");
echo $toyota->tampilkanBensin();

$yamaha->setAll("merah","yamaha","herga","shell");
$yamaha->setBensin("Pertanol");
$yamaha->tampilkanSemua();