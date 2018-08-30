<?php

// 自定义函数

// require require_once include include_once
// 包含文件相当于把里面代码拿过来

require 'common.func.php'; //使用
// require_once 'common.func.php';

$filename = 'demo.php';
echo getExt($filename);

// require 和 require 区别
require 'header.php';
require 'header.php'; // require 写几次就包含几次

require_once 'footer.php';
require_once 'footer.php'; // require 写几次都只包含一次

// require_once 'notExistFile.php';
// require 'notExistFile.php';

// require 和 include 区别
// 通过 require 或者 require_once 包含文件不存在会产生一个致命错误和一个警告，程序终止执行
// 通过 include 或者 include_once 包含文件不存在是 会产生两个警告 程序继续执行

// 包含过来的代码里 获取的行号和文件名  是源文件的