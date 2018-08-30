<?php

// 返回值

// 函数只有0或一个返回值，如果想返回多个可用数组或对象实现
// 函数通过return + 返回值 碰到return函数立即结束
// 函数默认返回NULL
// 函数返回值可以是任意类型
// 函数有 return 才有返回值 ，才能赋值给变量等。 

if(!function_exists('test1')) {
    function test1() 
    {
        echo 'this is test1.'."\n";
    }
}
var_dump(test1());
echo "\n";

function test2() 
{   
    return md5(str);
    return 1==1;
    return fopen('./test.html','r');
    return new stdClass();
    return array(12,true,'str');
    return null;
    return false;
    return 'str';
    return 10.1;
    return 20;        
}
echo test2(),"\n";
var_dump(test2());

echo "\ncontinue...";
