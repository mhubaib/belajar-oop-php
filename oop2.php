<?php
//Lesson about Public, Protected, Private, inheritance.

// Parent class
class Vehicle {
    // Public property: Accessible everywhere
    public $brand;

    // Protected property: Accessible within the class and child classes
    protected $model;

    // Private property: Accessible only within this class
    private $vin;

    // Constructor to initialize properties
    public function __construct($brand, $model, $vin) {
        $this->brand = $brand;
        $this->model = $model;
        $this->vin = $vin;
    }

    // Public method: Accessible everywhere
    public function getBrand() {
        return $this->brand;
    }

    // Protected method: Accessible within the class and child classes
    protected function getModel() {
        return $this->model;
    }

    // Private method: Accessible only within this class
    private function getVin() {
        return $this->vin;
    }

    // Public method to access protected and private properties/methods
    public function displayDetails() {
        echo "Brand: " . $this->getBrand() . "\n" ;
        echo "Model: " . $this->getModel() . "\n"; // Accessing protected method
        echo "VIN: " . $this->getVin() . "\n"; // Accessing private method
    }

    function coba(){
        $model = "cona";
    }
}
// Child class inheriting from Vehicle
class Car extends Vehicle {
    // Public method to access protected property from the parent class
    public function getCarModel() {
        return $this->model; // Accessing protected property
    }

    // Attempting to access private property (will cause an error)
    public function tryToAccessVin() {
        // Uncommenting the line below will cause a fatal error
        // return $this->vin;
    }
}

// Create an instance of the Vehicle class
$vehicle = new Vehicle("Toyota", "Corolla", "123XYZ");

// Accessing public property and method
echo "Brand (public): " . $vehicle->brand ; // Works
echo "Brand via method: " . $vehicle->getBrand() ; // Works

// Attempting to access protected property (will cause an error)
// echo "Model (protected): " . $vehicle->model . "<br>"; // Fatal error

// Attempting to access private property (will cause an error)
// echo "VIN (private): " . $vehicle->vin . "<br>"; // Fatal error

// Accessing protected and private properties via a public method
$vehicle->displayDetails(); // Works

// Create an instance of the Car class
$car = new Car("Honda", "Civic", "456ABC");

// Accessing protected property via a public method in the child class
echo "Car Model: " . $car->getCarModel() ; // Works

// Attempting to access private property from the child class (will cause an error)
$car->tryToAccessVin(); // Fatal error if uncommented
?>