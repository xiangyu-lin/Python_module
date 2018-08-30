<?php

// 可变函数的使用

// 可变函数不能用于像 echo print unset() isset() empty() include require
// 以及类似的语言结构，需要自己封装实现
$funcName = 'md5';
echo $funcName('xiangyu.lin'); // md5()
echo "\n";
echo md5('xiangyu.lin');

function test()
{   
    echo "\nThis is a test.";
}

$funcName = 'test';
$funcName(); //test

// 查看已定义的所有函数
print_r(get_defined_functions());

