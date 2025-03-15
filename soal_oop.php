<?php

// Proyek PHP OOP: Sistem Manajemen Hewan Peliharaan
// Deskripsi

// Buatlah sebuah sistem sederhana untuk manajemen hewan peliharaan di sebuah 
// klinik hewan menggunakan konsep OOP di PHP. Sistem ini harus mencakup beberapa 
// jenis hewan dengan karakteristik yang berbeda serta memiliki mekanisme pewarisan,
// akses data dengan access modifiers, penggunaan constructor/destructor, dan penerapan abstract class.
// Spesifikasi Teknis

//     Buat abstract class Animal
//         Properti: $name (protected), $age (protected)
//         Method abstract: makeSound(), getInfo()
//         Method konkret:
//             __construct($name, $age): Menginisialisasi nama dan umur hewan.
//             __destruct(): Menampilkan pesan saat objek dihapus.

//     Buat class Dog dan Cat yang mewarisi Animal
//         Dog memiliki properti tambahan $breed (ras anjing).
//         Cat memiliki properti tambahan $color (warna kucing).
//         Implementasikan method makeSound() sesuai dengan suara hewan tersebut.
//         Override method getInfo() untuk menampilkan informasi spesifik dari masing-masing hewan.

//     Gunakan access modifiers dengan baik
//         Pastikan properti tidak bisa langsung diakses dari luar class (gunakan protected atau private).
//         Buat method public yang memungkinkan pengambilan data dari luar class.

//     Buat objek dan uji program
//         Buat minimal 2 objek Dog dan 2 objek Cat.
//         Panggil method makeSound() dan getInfo() dari masing-masing objek.
//         Gunakan unset() untuk menghapus salah satu objek dan lihat apakah __destruct() berjalan dengan benar.

abstract class Animal {
    protected $name;
    protected $age;

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function __destruct()
    {
        echo "- {$this->name} ini sudah mati" . "\n";
    }
    abstract public function makeSound();
    abstract public function getInfo();
}

class Dog extends Animal {
    private $breed;

    function __construct($name, $age, $breed)
    {
      parent:: __construct($name, $age);
      $this->breed = $breed;  
    }
    public function makeSound()
    {
        echo "- guggug adalah suara nya {$this->name}" . "\n";
    }
    public function getInfo()
    {
        echo "- {$this->name} adalah anjing {$this->breed} dan saat ini ia berumur {$this->age} tahun " . "\n";
    }
}

class Cat extends Animal {
    private $color;

    function __construct($name, $age, $color)
    {
      parent:: __construct($name, $age);
      $this->color = $color;  
    }
    public function makeSound()
    {
        echo "- meong adalah suaranya {$this->name}" . "\n";
    }
    public function getInfo()
    {
        echo "- {$this->name} adalah kucing yang berumur {$this->age} tahun, memiliki bulu yang berwarna {$this->color} " . "\n";
    }
}

$doggy = new Dog("doggy", 2, "husky");
$doggy->makeSound();
$doggy->getInfo();
unset($doggy);
echo "  ==================*================". "\n";

$meong = new Cat("creamy", 5, "cream");
$meong->makeSound();
$meong->getInfo();
unset($meong);
echo "  ===================*================". "\n";

$dog = new Dog("rush", 2, "bulldog");
$dog->makeSound();
$dog->getInfo();
unset($dog);
echo " ===================*=================". "\n";


