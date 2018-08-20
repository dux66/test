<?php
echo '<pre>';
//print_r($_SERVER);
echo '<hr />';
//print_r($GLOBALS);
$var = 'abc';

//global 是全局变量的一个引用/指向
//globals 就是变量本身
function va() {
	GLOBAL $var;
	echo $var,'<br />';//GLOBAL为引用
	unset($var); //销毁变量，但并不能销毁全局变量var,因为GLOBAL是引用
	
	echo $GLOBALS['var'];
	unset($GLOBALS['var']);//销毁全局变量 $var
}
va();
echo '<hr />';
var_dump($var);
?>



