<?php // php start

/*
 * php basic note
 * Author: l.
 * https://www.imooc.com/learn/54
 */

// . 连接字符串用点
echo "Hello "."php, ";

// $ 定义变量 建议使用下划线法 （驼峰法也可以）
$var = " This is a variable. ";
$a_var = "下划线法";
$thisVar = "驼峰法"; // 变量一般小驼峰法 thisVar  类大驼峰法 ThisVar
echo $var;

// var_dump 查看变量数据类型
$var_int = 10; //整型
$var_float = 10.00; // 浮点型
$var_bool = $var_int == 10; //布尔型
$var_array = $arrayName = array("123"); //数组
echo var_dump($var_int,$var_float,$var_array,$var_bool);

// '' "" 强弱引用
$love = "I love you!";
echo "$love"; // 双引号弱引用 变量会替换成变量值
echo '$love'; // 单引号强引用 只会输出引号内的东西 不会替换成变量值

// Heredoc结构形式引用
//EOF 可以自定义 前后一致 最后整行只能出现 EOF;
$string = <<<EOF
This is first line,
and this is second line.
use Heredoc.
EOF;
echo $string;

// null 空类型
// $var_null;
// $var_null1 = null;
// $var_null2 = NULL;
// $var_null3 = "123";
// unset($var_null3);
// var_dump($var_null,$var_null1,$var_null2,$var_null3)

//define() 定义一个常量
// bool define(string $constant_name, mixed $value[, $case_sensitive = true])
//参数一 constant_name 必选，常量名称,命名规则与变量的一致，不带美元符号。
//参数二 value 必选，它是常量的值。
//参数三 case_sensitive 可选，指定是否大小写敏感，true表示不敏感，默认值为false。

define("PI",3.14);
echo PI;
//系统常量
echo __FILE__; // 当前文件所在服务器位置
echo __LINE__; // 当前代码所在行
echo PHP_VERSION; // 解析器版本号
echo PHP_OS; // 系统

// 常量取值
define("Doh","jsh");
echo Doh; //常量名取值
echo constant("Doh"); //constant函数取值

// defined 查看常量是否被定义
var_dump(defined("Doh")); //要带引号

// 运算符 + - * / % ...
$array_num = array(1,2,3);
list($a,$b,$c) = $array_num;
echo ($b * $c / $a -$a) % 2 - $a;

// 赋值运算符 = &
$a = 1+1; // 右边的表达式值赋给左边
$c = &$a; // 引用赋值，指向同一块内存，内存存储的值变了，两个都会变

// 比较运算符 ==  != <> > < >= <= === !==
// === 全等 等于且类型相同

// 三元运算符 ?:
// (expr1)?(expr2):(expr3)
// expr1 值为True则 expr2 否则 expr3
$a = 78; //成绩
$b = $a >= 60 ? "及格":"不及格";
echo $b;

// 逻辑运算符
// and or not && || ! xor
// xor 亦或 有且只有一个

// 字符串连接运算符
// . .=
$a = "Js, ";
$b = $a."Welcome! ";
$b .= "ha" ; // .= 将右边参附加到左边参数后
echo $b;

// 错误控制运算符
/*
 * 写在表达式前面不会报错
 * 但不会屏蔽解析错误信息
 * 可通过 $php_errormsg 查看错误信息
 */
$conn = @mysql_connect("localhost","username","password");
echo "出错了，错误原因是：".$php_errormsg;

// 控制语句

// if
/*
if (condition) {
	// code...
} else if (condition) {
	// code...
} else {
	// code
}
*/

// switch...case...
/*
switch (variable) {
	case 'value':
		// code...
		break; //break 阻止代码进入下一个case中继续执行。

	default:
		// code...
		break;
}
*/

// while
$a = 1;
while ($a <= 10) {
	// code...
	break;
}

// do while
/*do {
	// code...
} while ($a <= 10);
*/

// for
for ($i=0; $i <= 10; $i++) {
	echo $i; // code...
}

// foreach
/*
foreach ($variable as $key => $value) {
	// code...
}
*/
$students = array(
'2010'=>'令狐冲',
'2011'=>'林平之',
'2013'=>'任盈盈',

);//3个学生的学号和姓名，用数组存储

//使用循环结构遍历数组,获取学号和姓名
foreach($students as $v){ //只取值
	echo $v; //打印姓名
}
foreach ($students as $key => $value) {
	echo $key.":".$value; //同时取下标和值
}

// php end
