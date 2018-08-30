<?php

// 继承

class Car {
    public $speed = 0; 
    
    public function speedUp() {
        $this->speed += 10;
        return $this->speed;
    }
}

class BigCar extends Car{
    public function speedUp(){
        $this->speed = parent::speedUp() + 50;
    }
}

$car = new BigCar();
$car->speedUp();
echo $car->speed;