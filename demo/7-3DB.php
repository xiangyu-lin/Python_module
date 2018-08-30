<?php

// insert

// 连接数据库
$link = mysqli_connect('61.160.249.59', 'root', '123456');
mysqli_select_db($link, 'hellodb');
mysqli_query($link, "set names 'utf8'");

// $sql = "insert into students(Name, Age, Gender) values('jobs',18,'M')";
// mysqli_query($link, $sql);

// 数据通常存储在变量或数组中
$name = 'Elis';
$age = 18;
$gender = "F";
// 里面用单引号  不知道为啥
$sql2 = "insert into students(Name, Age, Gender) values('$name', '$age', '$gender')";
mysqli_query($link, $sql2);

// mysqli_insert_id 可以获得自增的主键id
$uid = mysqli_insert_id($link);
echo $uid;