<?php

// 对象重载

class Car1 {
    private $arr = array();
    
    // __set 赋值
    public function __set($key, $val) {
        $this->arr[key] = $val;
    }
    
    // __get 读取
    public function __get($key) {
        if (isset($this->ary[$key])) {
            return $this->ary[$key];
        }
        return null;
    }
    
    // __isset 判断
    public function __isset($key) {
        if (isset($this->arr[$key])) {
            return true;
        }
        return false;
    }
    
    // __unset 销毁
    public function __unset($key) {
        unset($this->arr[$key]);
    }
}

$car = new Car1();
$car->name = 'auto'; // name 属性 动态创建并赋值
echo $car->name;


Class Car {
    public $speed = 0;
    
    public function __call($name, $args) {
        if ($name == 'speedUp') {
            $this->speed += 10;
        }
    }
}

$car = new Car();
$car->speedUp(); //调用不存在的方法会使用重载
echo $car->speed;

/*
 * 方法的重载通过__call来实现，
 * 当调用不存在的方法的时候，将会转为参数调用__call方法，
 * 当调用不存在的静态方法时会使用__callStatic重载。
 */
