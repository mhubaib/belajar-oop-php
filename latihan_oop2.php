<?php
// 1. Buat class AkunBank dengan properti saldo yang private.
// 2. Tambahkan metode setSaldo($jumlah) untuk mengubah saldo, tetapi pastikan nilainya positif.
// 3. Tambahkan metode getSaldo() untuk menampilkan saldo.
// 4. Buat objek dari AkunBank, atur saldo, dan tampilkan saldonya.

class AkunBank {
    private $saldo;
    
    function setSaldo($jumlah){
        $this->saldo = number_format($jumlah);
    }
    function getSaldo(){
        return $this->saldo;
    }
    function tampilkan(){
        echo "Saldo dari akun ini : {$this->saldo}" . "\n";
    }
}


$bsi = new AkunBank();
$bsi->setSaldo(350000);
$bsi->tampilkan();

// 1. Buat class Pegawai dengan properti nama dan jabatan serta metode info().
// 2. Buat class Manager yang mewarisi Pegawai dan tambahkan properti departemen.
// 3. Override metode info() di Manager untuk menampilkan departemen.
// 4. Buat objek dari Manager, atur nilai propertinya, dan tampilkan informasinya.

class Pegawai {
    public $nama;
    public $jabatan;

    function __construct($nama, $jabatan)
    {
        $this->nama = $nama;
        $this->jabatan = $jabatan;
    }
    public function info(){
        echo "- {$this->nama} adalah seorang {$this->jabatan} di pondok it" . "\n";
    }
}
class Manager extends Pegawai {
    public $department;

    public function __construct($nama, $jabatan, $department)
    {
        parent::__construct($nama, $jabatan);
        $this->department = $department;
    }
    public function info(){
        echo "- {$this->nama} adalah seorang {$this->jabatan} di department {$this->department}" . "\n";
    }

}

$fikri = new Pegawai("fikri", "assistent");
$fikri->info();
$faisal = new Manager("faisal", "manager", "kesehatan");
$faisal->info();

// 1. Buat abstract class MakhlukHidup dengan metode abstrak bergerak().
// 2. Buat class Manusia dan Burung yang mewarisi MakhlukHidup dan implementasikan bergerak().

abstract class MakhlukHidup {
    protected $nama;

    function __construct($nama)
    {
        $this->nama = $nama;
    }
    abstract public function bergerak();
}

class Manusia extends MakhlukHidup {
    public function bergerak(){
        return "- $this->nama bergerak mulai dari merangkak, berjalan, berlari";
    }
}

class Hewan extends MakhlukHidup {
    public function bergerak()
    {
        return "- $this->nama bergerak apabila ada yang menggerakkannya";
    }
}

$alfin = new Manusia("alfin");
echo $alfin->bergerak();