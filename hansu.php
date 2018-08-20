<?php 
//设置编码，不然中文会乱码
header("content-type:text/html;charset=utf-8");



$start_time=microtime(true);
echo 'php自定义函数<br />';
$a=500;
var_dump($a);

echo date('Y-m-d  h:i:s' );
echo '<br />';

function test() {
	echo 'function test<br />';
	var_dump(func_num_args());
	echo '<br />';
	var_dump(func_get_args());
	echo '<br />';
	if (func_num_args() > 2) {
		var_dump(func_get_arg(2));
	}
}

test(10);
test('du','sd');

function test1($a = 100,$b = 100) {
	echo $a + $b,'<br />';
}
//赋值
$a=100;
$b=200;
echo '$a is: ',$a,'$b is: ',$b,'<br />';
//按值传参，不会改变外部变量
function cc($a=10,$b=20) {
	$a=$a+5;
	$b=$b+5;
	echo 'cc,$a is: ',$a,'$b is: ',$b,'<br />';
}
echo 'use 按值传参<br />';
//动态调用
$dt="cc";
$dt($a,$b);
//引用传参，使用&，改变变量值时外部变量的值也会被改变
function cc1($a=10,&$b=20) {
	$a=$a+5;
	$b=$b+5;
	echo 'cc1,$a is: ',$a,'$b is: ',$b,'<br />';
}
echo 'use 引用传参 <br />';
cc1($a,$b);
echo '&之后,$a is: ',$a,'$b is: ',$b,'<br />';


$a1=100;
echo $a1,'<br />';
function gl(){
	global $a1;
	$a1 += 1;
	echo 'glob a1>',$a1,'<br />';
}
gl();
echo $a1,'<be />';


echo '<br />';
echo '<br />';
echo '<br />';
echo '普通局部变量和静态局部变量<br />';
function pands(){
	$general=100;
	static $sta=100;
	$general++;  //普通局部变量每次被调用时都会初始化
	$sta++;  //静态局部变量只在首次调用时被初始化，因此可以做为静态计数器
	echo 'general is-->',$general,'    ','static is -->',$sta,'<br />';
}
pands();
pands();
pands();
pands();

echo '<hr />';
echo '字符串';
echo '<hr />';

$name='du';
echo <<< EOT
hello $name
EOT;
//echo <<< 'E'
//hello $name
//E;
echo '<hr />';

echo "my name is {$name}xin<br />"; //{可以当做定界符使用来定界变量
echo "my name is ${name}xin<br />"; //{可以当做定界符使用来定界变量
echo '<hr />';
echo '字符串常用操作函数<br />';
echo <<<'EOF'
字符串长度<br />
strlen--某编码下的字节数<br/>
mb_strlen---字符数<br />
EOF;
$str='duxin';
$str1='杜心';
echo '定义str和str1: $str=\'duxin\'      $str1=\'杜心\';<br />';
echo '字节数：<br />';
var_dump(strlen($str));
echo '<font color=ff0000>//每一个英文字符占一个字节<br /></font>';
var_dump(strlen($str1));
echo '<font color=ff0000>//每一个中文字符展三个字节<br /></font>';
echo 'UTF8下的字符数：<br />';
var_dump(mb_strlen($str,'UTF8'));
echo "<br />";
var_dump(mb_strlen($str1,'UTF8'));

echo "<br />";
echo '查找字符串,替换字符串';
echo <<< 'EOF'
strpos($str,$serch,[num])<br />
参数为 源文本，要查找的字符串，从第几个字符开始（可选参数）<br />
str_replace($serch,$replace,$str,$count)<br />
参数为 被替换的字符串，替换的字符串，原文本，替换的次数<br />
stripos---不区分大小写<br />
strrpos----倒序查找<br />
str_replace--区分大小写<br />
str_ireplace---不区分大小写<br />
EOF;
$str='hello world hello china haw are you ';
$serch='hello';
$replace='halou';
echo '定义字符串和serch<br />
$str=\'hello world ，hello china haw are you<br />$serch=hello';
echo "<br />";
var_dump(strpos($str,$serch));
var_dump(strpos($str,$serch,3));
echo '<br /><font color=EE0000>注意:不能使用返回值 == false 来判断是否招到字符串，一定要使用全等 === flase来判断，因为0 == false ,查找字符中可能从第0个找到</font><br />';
if (strpos($str,$serch) === false) {
	echo "can find $serch1,please check";
} else {
	$new_str=str_replace($serch,$replace,$str,$count);
	var_dump($new_str);
	echo '<br />';
	var_dump($count);
	//return var_dump(stripos($str,$serch));
}
echo '<br />';
//------------------------------------------------------------------------------------------------------------------------------
//substr_replace($str,$serche,$start,$length),被替换的字符串，替换的字符串，从哪开始替换,length--替换多少个字符(可选，为0的时候为插入)
var_dump(substr_replace($str,$replace,11,0));
echo '<br />';
//str_split($str,$length),按照长度切割并返回数组
$arry=str_split('abcdefghijk',3);
echo "$arry[2],<br />";
echo $arry[1];
echo '<br />';

//explode(':',$str,$num) 根据定界符 ：来切分$str为$num个元素的数组
$str='ab:cd:ef:gh:ig:klm:n';
var_dump(':',$str);
echo '<br />';
var_dump(':',$str,3);
echo '<br />';
//strrev($str) 反转字符串
echo strrev($str);
echo '<br />';;
//--------------------------------------------------------------------------------------------------------------
//trim--去除字符串左右两边的空格 ltrim---去除左边的空格  rtrim---去除右边的空格
var_dump(trim('   he llo  '));
var_dump(ltrim('   he llo  '));
var_dump(rtrim('   he llo  '));

//-------------------------------------------------------------------------------------------------------------------------------
$str='ABCDEFG';
$str1='abcdfsa';
$str3='duxin';
$str4='hello world hello china';
//全部转换成大写
var_dump(strtolower($str));
echo '<br />';
//全部转换成小写
var_dump(strtoupper($str1));
echo '<br />';
//首字母大写
var_dump(ucfirst($str3));
echo '<br />';
//每个单词首字母大写
var_dump(ucwords($str4));
$end_time=microtime(true);
$use_time=$end_time-$start_time;
echo '页面耗时:';
print_r($use_time);

?>