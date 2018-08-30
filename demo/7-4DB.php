<?php

// 取得数据查询结果

// connect 
$link = mysqli_connect('61.160.249.59', 'root', '123456');
mysqli_select_db($link, 'hellodb');
mysqli_query($link, "set names 'uft8'");

// select
$sql = "select * from students";
$res = mysqli_query($link, $sql);
$row = mysqli_fetch_array($res);
//$row = mysqli_fetch_assoc($res); //只获取数字索引数组
//var_dump($row);

// while 循环获取所有数据
$data = array();
while ($row1 = mysqli_fetch_array($res)) {
    $data[] = $row1;
}
//var_dump($data);

// 查询 分页数据
$page = 2;  //查询的页数
$pagesize = 5; // 每页的条数
$offset = ($page - 1) * $pagesize; // 开始的条数 减一才能从第一条开始查
$sql1 = "select * from students limit $offset, $pagesize";
$result = mysqli_query($link, $sql1);
// 循环获取当页数据
$data2 = array();
while ($row2 = mysqli_fetch_array($result)) {
    $data2[] = $row2;
}
var_dump($data2);
