<?php

// 函数简介 创建及调用自定义函数

// php 函数就是完成某些功能的代码段 分为系统函数和自定义函数
/* 
 *  一个函数只完成一个功能
 *  函数名称下划线或字母开头 ，跟上数字字母下划线
 *  最好以动词开始，最好含义明确
 *  驼峰或者下划线命名法
 *  函数名称不去风大小写 但调用时尽量遵循函数大小写
 *  函数名称不支持重名， 如果重名会报致命错误
 *  函数可以有参数 也可以没有参数
 *  函数可以有返回值也可以没有
 */

// 创建自定义函数
function sayHi() {
    echo 'function sayHi there.'."\n";
}

sayHi(); //调用

// function_exists() 判断函数是否存在
var_dump(function_exists('time'));
var_dump(function_exists($function_name));

if(!function_exists('test1')) {
    function test1() {
        echo "This is function test1.";
    }
} else {
    echo 'function already exists.';
}

test2(); // 函数可以先调用在创建
function test2() {
    echo "This is test2."."\n";
}

if (false) {
    function test3() {
        echo "this is test3."."\n";
    }
}
// Fatal error: Uncaught Error: Call to undefined function test2()
test3();

function test4() {
    function test5() {
        echo "This is test5.";
    }
}

test4(); // need call test4 first.
test5(); // then call test5.

