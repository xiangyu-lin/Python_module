<?php

// 变量作用域


// 局部变量 只作用在函数内部

// 局部变量--动态变量
function test1() 
{
    $i = 1;
    $j = 2;
    $username = 'xiangyu.lin';
    return $i + $j;
}
var_dump($i,$j);

// 局部变量--静态变量
function test2() 
{
    static $i=1; //静态变量 会保存在 静态内存中 不会立即释放 
    echo $i."\n";
    $i++;
}
test2();
test2();
test2();

// 全局变量

$k = 3;

// 一 global 关键字定义
function test3() 
{
    global $k,$m;
    $k = 4; //要先声明在赋值  不能写在一行 
}
test3();
var_dump($k);

// 二 使用 $GLOBALS 超全局变量
$username = 'xiangyu.lin';
$userage = 18;
$email = '3139303033@qq.com';
// print_r($GLOBALS);

function test4()
{
    echo 'name: '.$GLOBALS['username']."\n";
    echo 'age: '.$GLOBALS['userage']."\n";
    $GLOBALS['age'] = 22;
    echo 'age: '.$GLOBALS['age']."\n";
}
test4();

// 函数传值和传引用区别
// 传值 ：默认情况下， 函数参数通过值传递，所以在函数内部改变参数的值也不会改变函数外部的值。
// 传引用 可以通过在参数前 加 &符 （取地址），代表通过引用传递参数，在函数内部操作影响变量本身。 
//    只有变量能当做引用被传递

// 传值
function test5($i)
{
    $i += 10;
    var_dump($i);
}
$i = 2;
test5($i);
var_dump($i);

// 传引用
function test6(&$j)
{
    $j += 10;
    var_dump($j);
}
$j = 3;
test6($j);
var_dump($j);

// Fatal error: Only variables can be passed by reference
test6(1);
