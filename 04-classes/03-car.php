<?php

require __DIR__ . "/vendor/autoload.php";

class Car {
    
    private $make;
    private $np; 
    private $mileage = 0; 

    public function __construct(string $make, string $np)
    {
        $this->make = $make;
        $this->np = $np; 
    }
    public function getNumberplate() : string
    {
        return $this->np;
    }
    public function getMake() : string
    {
        return $this->make;
    }
    public function getMileage() : float
    {
        return $this->mileage;
    }
    public function addJourney(float $miles)
    {
        return  $this->mileage += $miles;
    }

}
// you pass in a make and number plate
$car = new Car("Ford", "XY11 4TY");
// you can get various bits of information about it
dump($car->getNumberplate()); // "XY11 4TY"
dump($car->getMake()); // "Ford"
dump($car->getMileage()); // 0

// you can add journey
$car->addJourney(100);
dump($car->getMileage()); // 100

$car->addJourney(200);
dump($car->getMileage()); // 300
