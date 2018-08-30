<?php

// 文件系统中之读取文件内容

// file_get_contents 可以将整个文件全部读取到一个字符串中。
$content = file_get_contents('./test.html');
//echo $content;

// 也可以通过参数控制读取内容的开始点以及长度。
$content = file_get_contents('./test.html', null, null, 100, 500);
//echo $content;

// PHP PHP也提供类似于C语言操作文件的方法， fopen fgets fread
//     fgets 读取一行
//     fread 读取指定长度字串

$fp = fopen('./test.html', 'r');
echo fgets($fp); //read a line;
while (!feof($fp)) {
    echo fgets($fp); //read a line;
}
fclose($fp); // don't forget close file

$fp2 = fopen('test.html', 'rb');
$contents = '';
while (!feof($fp2)) {
    $contents .= fread($fp2,20); // 一次读取20个字符
}
fclose($fp2);
echo "\n\n\n----\n\n";
echo $contents;

