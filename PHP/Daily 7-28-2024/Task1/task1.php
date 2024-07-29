<?php

class Car
{
    private $cars_make;
    private $model;
    private $VIN;


    public function __construct($cars_make, $model, $VIN)
    {
        $this->cars_make = $cars_make;
        $this->model = $model;
        $this->VIN = $VIN;
    }

    public function set_cars_make($cars_make)
    {
        $this->cars_make = $cars_make;
    }
    public function set_model($model)
    {
        $this->model = $model;
    }
    public function set_VIN($VIN)
    {
        $this->VIN = $VIN;
    }
    public function get_cars_make()
    {
        return $this->cars_make;
    }
    public function get_VIN()
    {
        return $this->VIN;
    }
    public function get_model()
    {
        return $this->model;
    }
    public function __destruct()
    {
        echo "the car has been destroyed";
    }
    public function setDados($cars_make, $model, $VIN)
    {
        $this->cars_make = $cars_make;
        $this->model = $model;
        $this->VIN = $VIN;
    }

    public function getDados()
    {
        return "Make: {$this->cars_make}, Model: {$this->model}, VIN: {$this->VIN}";
    }
};

/////////////////////////////////
class Inventory
{
    private $cars = [];
    public function addCar(Car $car)
    {
        $this->cars[$car->get_VIN()] = $car;
    }
    public function listCars()
    {
        if (empty($this->cars)) {
            echo "No cars in inventory.<br>";
        } else {
            foreach ($this->cars as $car) {
                echo $car->getDados() . "<br>";
            }
            return;
        }
    }
    public function removeCar($vin)
    {
        if (isset($this->cars[$vin])) {
            unset($this->cars[$vin]);
            echo "Car with VIN {$vin} has been removed.<br>";
        } else {
            echo "Error : Car with VIN {$vin} not found !.<br>";
        }
    }
}

$inventory = new Inventory();

$car1 = new Car('Toyota', 'Corolla', '1244');
$car2 = new Car('Honda', 'Civic', '5557');
$car3 = new Car('Ford', 'Focus', '8547');

$inventory->addCar($car1);
$inventory->addCar($car2);
$inventory->addCar($car3);

echo $inventory->listCars();

// $inventory->removeCar(''); //حذف مركبة بستخدام الرقم


// unset($car1);