<?php

// 数据库更新及删除 关闭数据库

// connect
$link = mysqli_connect('61.160.249.59', 'root', '123456');
mysqli_select_db($link, 'hellodb');
mysqli_query($link, "set names 'uft8'");

// update
$query = "update students set Name = 'Dog\'s su' where StuID=34 limit 1";
$asd = mysqli_query($link, $query);
if ($asd) {
    echo 'update success.';
} else {
    echo 'update fail.';
}

// delete
$sql = "delete from user where StuID = 33 limit 1";
mysqli_query($sql) or die('delete fail.');

// 关闭数据库
// php 会自动关闭 数据库连接
// 性能要求较高的情况下 可以使用
mysqli_close($link);
    
