<?php

/*
 * Class Car
 */
class Car{
    private $fuelConsumption=4.6;
    private $fuelTank;
    
    /**
     * Constructor
     * @param float $fuelTank - fuel level
     */
    public function __construct($fuelTank){
        $this->fuelTank = $fuelTank;
    }
    
    /**
     * Method return range of car in KM
     * @return float range of car
     */
    public function countRange(){
        return round($this->fuelTank/$this->fuelConsumption*100,2);
    }
}
//example

$car = new Car(50.5);
echo $car->countRange()." KM";

