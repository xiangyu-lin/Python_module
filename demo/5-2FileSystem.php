<?php

// 判断文件是否存在

// file_exists() 判断文件或路径是否存在
$filename = './test.html';
if (file_exists($filename)) {
    echo file_get_contents($filename);
}

// if_file() 确切的判读给定的路径是一个文件
if (is_file($filename)) {
    echo file_get_contents($filename);
}

// is_readable, is_writeable 在文件存在的基础上判断是否可读写
if (is_writable($filename)) {
    file_put_contents($filename, 'writeable test...');
}
if (is_readable($filename)) {
    echo file_get_contents($filename);
}

// 获取文件元数据
echo fileowner($filename); // owner
echo filectime($filename); // change time
echo fileatime($filename); // access time
echo filemtime($filename); // modify time

echo "\n";
echo filesize($filename); // size
