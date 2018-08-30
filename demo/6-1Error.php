<?php

// 处理异常

// 创建一个可抛出异常的函数
function checkNum($number) 
{
    if ($number>1) {
        throw new Exception('异常提示,数字必须小于等于1');
    }
    return true;
}

// 在try代码块中出发异常
try{
    checkNum(2);
    echo 'IF there, no Error.';
} catch (Exception $e) {
    // 捕获异常      
    echo '捕获异常：'.$e->getMessage();
}
echo "\n";
/* 
 * PHP代码中的异常通过throw抛出
 * try catch的时候，抛出的异常会在catch中捕获
 */
    
/* PHP具有很多异常处理类，其中Exception是所有异常处理的基类。

Exception具有几个基本属性与方法，其中包括了：

message 异常消息内容
code 异常代码
file 抛出异常的文件名
line 抛出异常在该文件的行数

其中常用的方法有：

getTrace 获取异常追踪信息
getTraceAsString 获取异常追踪信息的字符串
getMessage 获取出错信息 */
 
// 自定义异常处理类
class MyException extends Exception
{
    public function getInfo() 
    {
        return '自定义错误信息';
    }
}

try {
    //这里规定如何触发异常。
    throw new MyException('error');
} catch (Exception $e) {
    echo $e->getInfo();//获取自定义的异常信息
    echo "\n";
    echo $e->getMessage(); // 获取继承自基类的 getMessage信息
}
echo "\n";

// 捕获异常
try {
    throw new Exception('wrong');
} catch (Exception $ex) {
    echo 'Error:'.$ex->getMessage()."\n";
    echo $ex->getTraceAsString()."\n";
}
echo "异常处理后继续运行其他代码";

// 将异常信息写入错误日志
try {
    throw new Exception('wrong');
} catch (Exception $exc) {
    $msg = 'Error:'.$exc->getMessage()."\n";
    $msg.= $exc->getTraceAsString()."\n";
    $msg.= 'Line:'.$exc->getLine()."\n";
    $msg.= 'File:'.$exc->getFile()."\n";
}

file_put_contents('./test.html', $msg);































