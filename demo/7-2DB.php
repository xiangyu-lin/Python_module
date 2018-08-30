<?php

// 连接数据库 查询


// mysqli

// connect
$host = 'localhost';
$user = 'root';
$pass = '';
$link = mysqli_connect($host, $user, $pass);
mysqli_select_db($link, 'mysql');
// select
mysqli_query($link, "set names 'utf8'"); //charset
$res = mysqli_query($link, 'select * from user limit 1');
$row = mysqli_fetch_array($res);
var_dump($row);

/*
// mysql 不建议用 php7 废弃
// 连接
$host = 'localhost';
$user = 'code1';
$pass = '';
$link = mysql_connect($host, $user, $pass);

mysql_select_db('code1'); // 选择数据库
mysql_query("set names 'utf8'");

//查询
$res = mysql_query('select * from user limit 1');
$row = mysql_fetch_array($res);
var_dump($row);
// mysql 执行查询会默认使用最近连接的数据库 ，可以通过参数指定数据库
$link2 = mysql_connect('127.0.0.1', 'code1', '', true); //开启一个新的连接
$res = mysql_query('select * from user limit 1', $link1);

// 插入
$sql = "insert into user(name, age, class) values('李四', 18, '高三一班')";
mysql_query($sql); //执行插入语句

$uid = mysql_insert_id(); //得到自增的主键id
*/