<?php

// session 存储用户登录信息

session_start();

// 假设用户登录后获取到一下登录数据
$userinfo = array(
    'uid' => 10000,
    'name' => 'lnx',
    'email' => 'lnx@163.com',
    'sex' => 'man',
    'age' => '18',
);
header("content-type:text/html; charset=utf-8");

//将用户信息保存到session中
$_SESSION['uid'] = $userinfo['uid'];
$_SESSION['name'] = $userinfo['name'];
$_SESSION['userinfo'] = $userinfo;

// 将用户信息保存到 cookie中的一个简单方法
$secureKey = 'key1'; // 加密密钥
$str = serialize($userinfo); // 序列化
// 加密
$str = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($secureKey), $str, MCRYPT_MODE_ECB));
// 存储到cookie
setcookie('userinfo', $str);

// 需要时进行解密
$str = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($secureKey), base64_decode($str), MCRYPT_MODE_ECB);
$uinfo = unserialize($str);
echo "从cookie中读取到的解密后的用户信息:\n";
print_r($uinfo);
