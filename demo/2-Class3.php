<?php

// 类的方法

class Car {
    public function getName() {
        return 'auto';
    }
    
    
    // 定义受保护的方法
    protected function getColor() {
        return 'red';
    }
    
    // 定义私有方法
    private function getPrice() {
        return '300000';
    }
    
    // 定义静态方法
    public static function getStatic() {
        return 'static';
    }
}

// 双冒号调用静态方法，不需要实例化对象
echo Car::getStatic();
$car = new Car();
echo $car->getName();