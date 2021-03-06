<?php

// date 格式化本地日期时间

/** 
 * format 
 * Y 4位完整年份
 * m 月份  01-12
 * d 日  01-31
 * H 小时 00-23
 * i 分钟 00-59
 * s 秒数 00-59
 * 
 * y 年份 2位, 
 * n 不带前导0 的月 12
 * j 不带前导0 的日 12
 * a am/pm
 * A am/pm
 * h 12h 1-12
 */

$format = 'Y-m-d'; // 2018-08-20
echo date($format);
echo "\n";

echo date('Y/m/d H:i:s');
echo "\n";

// w 获取一周内的第几天  0-6
$daystr = array('日', '一', '二', '三', '四', '五', '六');
$day = date('w');
echo date('Y/m/d H:i:s 星期'.$daystr[$day]);
echo "\n";

// 检测是否是闰年 L ,是 返回 1 否则 0
$res=date('L')?"是闰年":'不是闰年';
echo date('Y').$res;

/**
 * W 全年中的第几周
 * z 年份中的第几天
 * t 当月有多少天
 */
