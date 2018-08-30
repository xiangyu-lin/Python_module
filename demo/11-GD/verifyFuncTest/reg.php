<?php 

// 准备注册页面

$string = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJLZXCVBNM123456789';
// echo $string{mt_rand(0,strlen($string)-1)};

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>注册页</title>
	</head>
	<body>
		<h1>注册页面</h1>
		<form method='post' action="doAction.php">
		用户名
		<input type="text" name="username" placeholder="input username..."> 字母开头,长度6-10<br> 
		密码
		<input type="password" name="password" placeholder="input password..."> 密码不能为空  长度6-10 <br>
		确认密码
		<input type="password" name="password1" placeholder="reinput password"> 再次输入密码<br>
		邮箱
		<input type="text" name="email" placeholder="input your Email..."> 如 3139303033@qq.com<br>
		爱好
		<input type="checkbox" name="fav[]" value='php'>PHP
		<input type="checkbox" name="fav[]" value='java'>JAVA
		<input type="checkbox" name="fav[]" value='python'>Python
		<input type="checkbox" name="fav[]" value='c'>C
		<input type="checkbox" name="fav[]" value='nodejs'>nodeJs
		<br>
		验证码
		<input type="text" name="verify"><img src="./getVerify.php" id="verifyImage"><a onclick="document.getElementByID('verifyImage').src='./getVerify.php?r='+Math.random()" href="javascript:void(0)">看不清换一张</a><br> 
		<input type="submit" value="立即注册"> <br>
		</form>
	</body>
</html>