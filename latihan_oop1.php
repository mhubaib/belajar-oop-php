<?php
// 1. Buat class Sepeda dengan properties merk dan jenis serta method gowes() yang mencetak teks
// "Sepeda sedang dikayuh".

// class Sepeda {
//     public $merk;
//     public $jenis;

// function setMerk ($merk){
//     $this ->merk = $merk;
// }
// function setJenis ($jenis){
//     $this ->jenis = $jenis;
// }
// function tampilMerk (){
//     echo "Merk sepeda : " . $this->merk . "\n";
// }
// function tampilJenis (){
//     echo "Jenis sepeda : " . $this->jenis . "\n";
// } 
// function gowes (){
//     echo "Sepeda sedang dikayuh ";
// }
// // function tampilSemua (){
// //     $this->tampilMerk ();
// //     $this->tampilJenis ();
// //     $this->gowes ();
// // }
// }

// $bmx = new Sepeda;
// $bmx->setMerk ("bmx");
// $bmx->setJenis("sepeda roda dua");
// $bmx->tampilMerk();
// $bmx->tampilJenis();
// $bmx->gowes();

class Laptop {
    public $jenis;
    public $harga;

    public function __construct($jenis, $harga) {
        $this->jenis = $jenis;
        $this->harga = $harga;
        echo "Laptop $this->jenis dengan harga : $this->harga dijual " . "\n";
    }

    public function __destruct() {
        echo "Laptop $this->jenis dengan harga : $this->harga telah habis " . "\n";
    }
}

$laptop = new Laptop("Macbook", 15000);
$lapt = new Laptop("Thinkpad", 20000);
