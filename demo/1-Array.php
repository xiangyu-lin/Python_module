<?php

// php

// 1-数组
$arr1 = array(); // 创建空数组

$fruit = array("banana","apple","pineapple"); // 创建数组
echo $fruit[0];
print_r($fruit); // 输出数组键值

// 索引数组赋值
$arr = array('0'=>'pear','1'=>'apple');
$arr = array('pear');
$arr[1] = "apple";

// 数组取值
$arr0 = $arr[0];
print_r($arr0);
echo "\n";

//for 循环取数组值
for ($i = 0; $i <= 3; $i++) {
    echo $fruit[$i];
    echo "\n";
}

// foreach 取数组值
foreach ($fruit as $key => $value) {
    echo $key.':'.$value;
    echo "\n";
}

// 关联数组 (键是字符串)
$fruit = array(
    'app' => 'apple',
    'ban' => 'banana',
    'pin' => 'pineapple'
);
print_r($fruit);

// 访问
$fruit0 = $fruit['app'];
print_r($fruit0);

// foreach 访问同上
