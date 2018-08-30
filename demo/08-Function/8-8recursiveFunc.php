<?php

// 递归函数  能不用时尽量不用

function test($i) 
{
    echo $i."\n";
    $i--;
    if($i >= 0) {
        test($i);
    }
}

test(5);

function test1($i)
{
    echo $i."\n";
    if ($i >= 0) {
        test1($i-1);
    }
    echo $i."\n";
}
test1(3);

function test2($i)
{
    echo $i."\n";
    if ($i >= 0) {
        $func=__FUNCTION__; //获取当前函数
        $func($i-1);
    }
    echo $i."\n";
}