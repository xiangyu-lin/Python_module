<?php

//定义一个Car类并实例化一个对象

class Car {
    // 定义属性
    public $name = 'auto';
    
    //定义方法
    public function getName() {
        // 方法内部可以用 $this 伪变量调用对象属性或者方法
        return $this->name;
    }
}

$car = new Car();

// 也可以采用变量创建
$className = 'Car';
$car = new $className;
echo $car->getName();