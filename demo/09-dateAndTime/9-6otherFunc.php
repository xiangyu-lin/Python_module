<?php
// // 其他常用时间函数

// getdate()  gettimeofday() checkdate()

// 得到日期时间相关信息
print_r(getdate()); // 返回数组

// 得到当前日期时间
print_r(gettimeofday());

var_dump(checkdate(8, 12, 2018)); // 检测日期是否合法
var_dump(checkdate(13, 12, 2018)); // 检测日期是否合法