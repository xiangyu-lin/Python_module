<?php

/**
 * 验证码的实现
 * 验证码的封装及测试
 * 炫酷验证码演示及实现
 */

$image = imagecreatetruecolor(100, 50); //创建画布
$color_white = imagecolorallocate($image, 255, 255, 255); //创建颜色 白色
imagefilledrectangle($image, 0, 0, 100, 50, $color_white); // 填充画布

$color_rand = imagecolorallocate($image, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255)); //画笔颜色随机
// 开始绘制
$fontfile = 'fonts/CONSOLA.ttf';
$text = mt_rand(1000,9999);
imagettftext($image, 16, 0, 30, 22, $color_rand, $fontfile, $text);

header('content-type:image/png'); //通知浏览器以图像形式显示
imagepng($image); //输出
imagedestroy($image); //销毁资源


