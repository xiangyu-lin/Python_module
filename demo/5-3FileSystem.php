<?php

// 写入内容到文件

// 第一种方式 file_put_contents
$filename = './test.html';
$data = 'test write...'.time();
file_put_contents($filename, $data);


// 第二种 fwrite
$fp = fopen('./test.html','w');
fwrite($fp, 'Hi, ');
fwrite($fp, 'There.');
fclose($fp);

// 文件删除
unlink($filename); 

// 文件夹删除 文件夹必须为空  不为空或者没权限都会失败
rmdir($dirname); 

// 如果文件夹中存在问文件 可以循环删除目录中所有文件
// glob 函数遍历
foreach (glob("*") as $filename) {
    unlink($filename);
}

