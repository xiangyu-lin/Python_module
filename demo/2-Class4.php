<?php

// 构造函数和析构函数

class Car {

    // 定义构造函数
    function __construct() {
        print "构造函数被调用";
    }

    // 定义析构函数
    function __destruct() {
        print "析构函数被调用";
    }
}

$car = new Car();
unset($car);


// 构造函数，使用__construct()定义，具有构造函数的类，会在每次对象创建的时候调用该函数，因此常用来在对象创建的时候进行一些初始化工作.
// 析构函数，使用__destruct()进行定义，析构函数指的是当某个对象的所有引用被删除，或者对象被显式的销毁时会执行的函数。
