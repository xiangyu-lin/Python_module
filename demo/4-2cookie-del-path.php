<?php

// cookie 的删除与过期时间

// 删除 cookie 通过设置cookie时间到当前时间之前  使其过期 达到删除的目的
setcookie('test', '', time()-1);

// header 方法删除
// .gmdate 生成格林威治标准时间  排除时差影响
header("Set-Cookie:test=3139303033';
expires=".gmdate('D, d M Y H:i:s \G\M\T',
    time()-1));

// cookie 的有效路径 默认根目录

setcookie('test', '1', time(), '/path');
var_dump($_COOKIE['test']);
