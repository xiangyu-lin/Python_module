<?php

// 设置cookie

/* setcookie(string $name, string $value=null, int $expire=null,
 string $path=null, string $domain=null, bool $secure=null,
 bool $httponly=null) : bool */

/*
 * 常用参数：
 * name: cookie名 可通过 $_COOKIE['name'] 访问
 * value: cookie值
 * expire: 过期时间  unix时间戳格式，默认0，浏览器关闭即失效
 * path: 有效路径 若为/ 则整个网站都有效
 * domain: 有效域 默认整个域名有效 若设置 www.doer.ren 则只在www子域中有效
 */

$value = 'test';
setcookie("TestCookie", $value);
// 有效期一小时
setcookie("TestCookie", $value, time()+3600);
// 设置路径与域
setcookie("TestCookie", $value, time()+3600, "/img/", "www.doer.ren");


// setrawcookie() 也可以设置cookie 用法相似  不过$value需要urlencode
// setrawcookie('cookie_name', rawurlencode($value), time()+60*60*24*365);
// header 方法也可以设置 cookie
// header("Set-Cookie:cookie_name=value");

/* 忽略此处
 setcookie('test', time());
 ob_start();
 print_r($_COOKIE);
 $content = ob_get_contents();
 $content = str_replace(" ",'$nbsp;', $content);
 ob_clean();
 header("content-type:text/html; charset=utf-8");
 echo 'Cookie:';
 echo nl2br($content); */
