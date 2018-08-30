<?php

// 匿名函数 也叫闭包函数
// 允许临时创建一个没有指定名称的函数 最常用作回调函数 参数的值
// 匿名函数可以作为变量的值使用

$func = function ()
{
    return 'This is a test.'."\n";
}; // 匿名函数分号结尾
echo $func();

$func = function ($name)
{
  return 'Say hi to '.$name."\n";  
};
echo $func('jobs');

// 通过 create_function() 创建匿名函数
$func = create_function('', 'echo "code of func ...\n";');
$func();

// 传参数
$code = 'return $x + $y;';  // 单引号
$func=create_function('$x,$y', $code);
echo $func(5,10);

$array = array(1,2,3,4,5);

// 匿名函数直接当做参数
$res = array_map(function($var){return $var * 2;}, $array);
print_r($res);
print_r($array);