<?php

// static  静态关键字

Class Car {
    private static $speed = 10;
    
    public static function getSpeed() {
        return self::$speed;
    }
    
    public static function speedUp() {
        return self::$speed+=10;
    }
}

class BigCar extends Car {
    public static function start(){
        parent::speedUp();
    }
}

echo Car::getSpeed();

BigCar::start(); // 调用父类静态方法加速
echo BigCar::getSpeed();

// 动态调用静态方法
$func = 'getSpeed';
$className = 'Car';
echo $className::$func();

//静态方法中，$this伪变量不允许使用。可以使用self，parent，static在内部调用静态方法与属性。
