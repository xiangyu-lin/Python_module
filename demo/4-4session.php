<?php

// session 使用 删除 销毁

// 开启session
session_start();

// $_SESSION 进行 session 读写
$_SESSION['test'] = time();
var_dump($_SESSION);

// session 会自动对值进行 encode和 decode, 因此session支持任意数据类型, 包括数据与对象;
session_start();
$_SESSION['ary'] = array('name' => 'jobs');
$_SESSION['obj'] = new stdClass();
var_dump($_SESSION);
echo "\n";

//  unset() 删除某个session
session_start();
$_SESSION['sname'] = 'jobs';
unset($_SESSION['sname']);
echo $_SESSION['sname'];

// session_destroy() 函数销毁session
// 但这种方式 只有在下次访问时 $_SESSION 才会为空
session_start();
$_SESSION['name'] = 'jobs';
$_SESSION['time'] = time();
session_destroy();
print_r($_SESSION);

// unset() 立即销毁 $_SESSION
session_start();
$_SESSION['name2'] = 'jobs2';
$_SESSION['time'] = time();
unset($_SESSION);
var_dump($_SESSION);
