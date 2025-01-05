<?php
class Car
{
    public $brand;

    public function __construct($brand)
    {
        $this->brand = $brand;
    }
    public function getBrand()
    {
        return $this->brand;
    }

    public function __destruct()
    {
        echo "The car is destroyed<br>";
    }
}
$car = new Car("Toyota");
echo "The car brand is: " . $car->getBrand() . "<br>";