<?php

// 函数参数


// 例子 返回3行两列的表格

// 创建3行两列的表格
function createTable(){
    $table="<table border='1' width='100px'>";
    for($i = 1; $i <= 3; $i++) {
        $table.="<tr>";
        for($j = 1; $j <= 2; $j++) {
            $table.="<td>xxx</td>";
        }
        $table.="</tr>";
    }
    $table.="</table>";
    return $table;
}

//echo createTable();

/*
 * 按照需求创建指定的表格 
 * @param number rows
 * @param number cols
 * @return tring
 */
function createTableSuper($rows,$cols){
    $table="<table border='1' width='100px'>";
    for($i = 1; $i <= $rows; $i++) {
        $table.="<tr>";
        for($j = 1; $j <= $cols; $j++) {
            $table.="<td>xxx</td>";
        }
        $table.="</tr>";
    }
    $table.="</table>";
    return $table;
}

// 必选参数调用的时候一定要传值 
echo createTableSuper(5,2);

// 创建一个表格 默认3行5列,表格默认颜色红色，默认内容x
// 可选参数
function createTableHigher($rows=3, $cols=5, $bgColor='red', $content='x')
{
    $table="<table border='1' width='100px' bgcolor='{$bgColor}'>";
    for($i = 1; $i <= 3; $i++) {
        $table.="<tr>";
        for($j = 1; $j <= 2; $j++) {
            $table.="<td>{$content}</td>";
        }
        $table.="</tr>";
    }
    $table.="</table>";
    return $table;
}

echo createTableHigher();

// 既有必选参数 又有可选参数 必选参数要写在前面

// 练习 给文件名，返回扩展名

function getFileExt($filename)
{
    preg_match('/\.{1}\w+$/', $filename, $ext);
    return $ext[0];
}
echo getFileExt('./test.html');


