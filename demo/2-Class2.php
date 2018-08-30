<?php

// 类的属性

class Car{
    // 定义公共属性name
    public $name = 'auto';

    // 定义受保护属性 color
    protected $color = 'white';

    // 定义私有属性
    private $price = '300000';

    public function getPrice() {
        return $this->price; //内部访问私有属性
    }
    
}

$car = new Car();
echo $car->name;   //调用对象的属性
echo $car->getPrice();

/*
 echo $car-->color;  //错误 受保护的属性不允许外部调用
 echo $car->price;  //错误 私有属性不允许外部调用
 */
