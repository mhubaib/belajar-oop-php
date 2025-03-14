<?php
// -Buat kelas "mobil" dengan properti merk dan warna serta method jalan yang mencetak "mobil sedang berjalan".
// -Dari kelas mobil buat objek dengan merk "toyota" dan warna merah lalu panggil method jalan.
// -Tambahkan konstruktor ke kelas mobil agar dapat langsung menetapkan merk dan warna saat instansiasi
// -Buat kelas mobilsport yang mewarisi mobil dan tambahkan properti baru kecepatan maksimum 
// -Override method jalan di mobilsport sehingga mencetak "mobil sport melaju dengan kecepatan tinggi"

class Mobil{
    public $merk;
    public $warna;


    function __construct($merk, $warna="")
    {
     $this->merk = $merk;
     $this->warna = $warna;   
    }
    function jalan(){
        echo "- mobil {$this->merk} yang berwarna {$this->warna} sedang berjalan " . "\n";
    }
}

class Mobilsport extends Mobil {

    function jalan(){
        echo "- Mobil {$this->merk} sedang melaju dengan kecepatan tinggi" . "\n";
    }
}

$avanza = new Mobil("toyota", "silver");
$avanza->jalan();
$x1 = new Mobilsport("bmw");
$x1->jalan();