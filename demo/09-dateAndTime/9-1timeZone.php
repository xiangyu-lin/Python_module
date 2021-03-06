<?php

// 简介

// 日期时间函数库是PHP 内置函数库， 通过日期时间函数库获取服务器的日期时间相关内容

// 设置时区
// Asia/Shanghai
// PRC 中华人民共和国

/**
 * 方法一
 *     修改PHP配置文件 date.timezone 设置时区 对所有配置文件有效
 *     /etc/php.ini -> date.timezone = PRC
 */

// 方法二 通过 date_default_timezone_set()  动态设置时区  只对设置位置之后有效
date_default_timezone_set('Asia/Shanghai'); // 设置当前时区
echo "当前时区为: ".date_default_timezone_get();


/**
 * 方法三 
 *     ini_set() 运行时设置PHP的配置项
 *     ini_get() 获得配置选项的值
 */

echo "\n---\n";
echo ini_get('date.timezone');
ini_set('date.timezone', 'PRC');