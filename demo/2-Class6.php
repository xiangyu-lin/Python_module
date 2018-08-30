<?php

// 访问控制 ①

class Car {
    
    // 属性必须定义访问控制
    public $speed = 10;
    
    // 方法未定义访问控制  默认为 public
    function turnLeft() {
        echo 'turnLeft';
    }
}

class BigCar {
    private function __construct() {
        echo 'obj create.';
    }
    
    private static $_object = null;
    public static function getInstance() {
        if (empty(self::$_object)) {
            // 内部方法可以调用私有方法
            self::$_object = new BigCar();
        }
        
        return self::$_object;
    }
}

//$car = new BigCar(); 这里不允许实例化对象
$car = BigCar::getInstance(); // 通过静态方法获得实例

// ①
// public 被定义为公有的类成员可以在任何地方被访问。
// protected 被定义为受保护的类成员则可以被其自身以及其子类和父类访问。
// private 被定义为私有的类成员则只能被其定义所在的类访问。
// 类属性必须定义为公有、受保护、私有之一。为兼容PHP5以前的版本，如果采用 var 定义，则被视为公有。

// 如果构造函数定义成私有方法，则不允许直接实例化对象，这时候一般通过静态方法进行实例化，
// 在设计模式中会经常使用这样的方法来控制对象的创建，比如单例模式只允许有一个全局唯一的对象。
