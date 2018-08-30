<?php


// MsSQL，MySQL，Sybase，Db2，Oracle，PostgreSQL，Access 等主流数据库都能够安装扩展来支持

if (function_exists('mysql_connect')) {
    echo "Mysql 扩展已安装.";
} else {
    echo 'no.';
}

/* 
 * PHP中一个数据库可能有一个或者多个扩展，其中既有官方的，也有第三方提供的。
 * 像Mysql常用的扩展有原生的mysql库，也可以使用增强版的mysqli扩展，
 * 还可以使用PDO进行连接与操作。
 */

// 连接mysql

// mysql 扩展连接数据库 不推荐使用 php7已废弃 ①
// $link = mysql_connect('mysql_host', 'mysql_user', 'mysql_password');
// $link = mysql_connect('localhost', 'root', '');

// mysqli 扩展 连接数据库
$link = mysqli_connect('mysql_host', 'mysql_user', 'mysql_password');

// PDO 扩展
$dsn = 'mysql:dbname=testdb;host=127.0.0.1';
$user = 'dbuser';
$password = 'dbpasswd';
$dbh = new PDO($dsn, $user, $password);


/* ①
Deprecated: mysql_connect(): 
The mysql extension is deprecated and will be removed in the future: 
use mysqli or PDO instead 
mysql_connect这个模块将在未来弃用，请你使用mysqli或者PDO来替代。
*/