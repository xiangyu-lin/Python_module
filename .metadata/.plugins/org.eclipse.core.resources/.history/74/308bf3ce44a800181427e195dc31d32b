<?php

// 字符串函数实战
// 通过字符串函数完成表单常用字段验证

// 接收数据

$username = $_POST['username'];
$password = $_POST['password'];
$password1 = $_POST['password1'];
$email = $_POST['email'];
//判断用户是否选择了兴趣爱好
$fav = $_POST['fav'];
if (!empty($fav)) {
    // 将数组转化成字符串，逗号分隔
    $favstr = join(',', $fav);
}

$verify = strtolower($_POST['verify']);
$verify1 = strtolower($_POST['verify1']);

$redirectUrl = "<a href='./10-5-1reg.php'>重新注册</a>";

// 检测用户名合法性

// 检测开头是否为首字母 xiangyu-lin
// $char = $username[0];
$char = substr($username, 0,1); // 从0开始 截取1 位, 忽略1截取到末尾
$ascii = ord($char); //得到ascii码值
// 检测值是否在 65-90(A-Z) 97-122(a-z)
if (!(($ascii >= 65 && $ascii <= 90) || ($ascii >= 97 && $ascii <= 122))) {
    exit("用户名非字母开头,请重新输入。".$redirectUrl);
}

// 检测用户名 长度 6-10
$userLen = strlen($username);
if (!($userLen >= 6 && $userLen <= 10)) {
        exit("请输入 6-10位的用户名。".$redirectUrl);
}

// 检测密码不能为空
$passLen = strlen($password);
if ($passLen == 0) {
    exit("密码不能为空。<br>".$redirectUrl);
}

if ($passLen < 6 || $passLen > 10 ) {
    exit("确保密码长度在6-10 之间。".$redirectUrl);  
}

// 检查两次输入是否一致
if (strcmp($password, $password1) != 0) {
    exit('两次密码不一致'.$redirectUrl);
}

// 检测邮箱是否合法， 字符串中包含@
if(strpos($email, '@') == false) {
    exit('非法邮箱<br>'.$redirectUrl);
}

// 检测验证码是否符合规范
if ($verify !== $verify1) {
    exit('验证码错误<br>'.$redirectUrl);
}

echo '注册成功';

$password = md5($password);
$userInfo = <<< EOF
    $username
    $password
    $email
    $favstr
EOF;
echo "\n";
echo $userInfo;
