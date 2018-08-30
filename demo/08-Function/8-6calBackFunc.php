<?php

// 回调函数

function study()
{
    echo 'study ...';
}

function play()
{
    echo 'play';
}

function doWhat($funcName)
{
    echo "I will ";
    // 通过可变函数形式进行调用
    $funcName();
    
}

doWhat('study');
echo "\n";

function sleepy($username)
{
    echo $username." is sleeping...";
}

function doWhat2($funcName,$user)
{
    $funcName($user);
}

doWhat2('sleepy', 'Doge');

$array = array(1,2,3,4,5);
function doubleValue($var)
{
    return $var * 2;
}

// 函数作用于后面的数组的每个值
$res = array_map('doubleValue', $array);
print_r($res);
print_r($array);

// 

$array = array(1,2,3,4,5,6,7);
function test2(&$var)
{
    return $var *= 3;
}
array_walk($array, 'test2');
print_r($array);

// call_user_func 和 call_user_func_array 的使用

// call_user_func 
call_user_func('play');
echo "\n";
call_user_func('sleepy','Cat');
echo "\n";
echo call_user_func('md5','xiangyu.lin'); // 传参 
echo "\n";

function add($x,$y)
{
    return $x + $y;
}
echo call_user_func('add',1,3); // 传多个参数
echo "\n";

$param_arr = array(3,5);
echo call_user_func_array('add', $param_arr);
