<?php

// ord() 得到指定字符的 ASCII
// chr() 根据ASCII返回指定字符
$char = ord('k');
echo $char;
echo chr($char);

// substr($string, $strat[, $lenth]) 截取字符串
$string = '0123456';
echo substr($string, 2, 5);
echo substr($string, -2, -1); // 负数倒着数  往前取

/*
 * strcmp($str, $str2) 比较字符串大小,比较区分大小写
 * strcasecmp($str1, $str2) 忽略大小写比较
 * 返回值
 * 1 --> $str1 > $str2
 * -1 --> $str1 < $str2
 * 0 --> $str1 = $str2
 */
$str1 = 'a';
$str2 = 'A';
echo strcmp($str1, $str2);
echo strcasecmp($str1, $str2);

/*
 * 字符串查找
 * strpos($string, $search) 返回字符串首次出现的位置 区分大小写
 * stripos($string, $search) i --> ignore 忽略大小写
 * strrpos($string, $search) r --> right 最后一次出现的位置
 * strripos($string, $search) 忽略大小写 查找最后一次出现的位置
 * 没查到 返回  false
 * 
 */ 
$email = '3139303033@qq.com';
var_dump(strpos($email, '@'));
var_dump(stripos($email, 'Q'));
var_dump(strrpos($email, 'q'));

/*
 * strip_tags($string[, $allowable_tags]) 过滤字符串中的HTML或php标签，返回过滤后的内容
 */
$str = "<h1>This is a test</h1><a href='http://www.doer.ren'>doer</a>";
echo $str;
echo strip_tags($str ,'<a>'); //留下a 过滤其他

/*
 * trim() 过滤字符串两端的空格
 * ltrim() 过滤左侧空格
 * rtrim() 过滤右侧空格
 * trim($str[, $charlist = '\t\n\r\0']) 还可以过滤指定字符 默认过滤空白 
 */
$trimStr = ' abc ';
echo "\n";
echo trim($trimStr);
echo ltrim($trimStr);
echo rtrim($trimStr);

// join 将数组转化成字符串， 指定分隔符
$fav = array('C++, Python, PHP');
$favstr = join(',', $fav); //逗号分隔
echo $favstr;

// 加密字符串 md5() sha1()

echo md5('lnn'); //32bit
echo "\n";
echo sha1('lnn'); //40bit




