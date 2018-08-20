<?php
//serialize 序列化   unserialize 反序列化
echo '<pre>';
/**$arr1=[1,2,3];
$sea=serialize($arr1);
echo ($sea),'<br />';// 序列化 数组变为字符串
print_r(unserialize($sea)); //饭序列化  将字符串转换成数组
echo '<br />';  **/

function mkcookie($his){
	setcookie("history",$his);
}

$url = $_SERVER['REQUEST_URI'];


//echo ($url);
//echo '<hr />';

if (isset($_COOKIE['history'])) {
	$arr=unserialize($_COOKIE['history']);
	if (count($arr) > 10) {
		array_pop($arr);
	}
	array_unshift($arr,$url);
	$arr1=serialize($arr);
	mkcookie($arr1);
} else {
	$arr=[$url];
	mkcookie(serialize($arr));
}
print_r(unserialize($_COOKIE['history']));
//var_dump(unserialize($_COOKIE['history']));
echo '<a href="?id'.mt_rand(1,200).'" >随机产生随机数</a>';



?>