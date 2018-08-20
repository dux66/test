<?php
echo '<pre>';
//使用mysql方式链接数据库
//链接数据库----选择库并设置字符集---执行sql语句---关闭连接
$conn = mysql_connect('localhost','root','root');//地址--账号---密码，返回一个数据库的连接句柄，连接失败返回false
if (!$conn) {
	echo '数据库连接失败：'.mysql_errno().'错误原因'.mysql_error().'<br />';
} else {
	echo '连接成功<br />';
}


mysql_select_db('learn');//use数据库
mysql_set_charset('utf8');// 设置字符集编码  不设置有可能会乱码

$sql = "select * from test limit 5"; //sql语句
$resource = mysql_query($sql);//执行sql语句，返回一个mysql结果集，resource类型
var_dump($resource); //返回 resource(4) of type (mysql result)  
echo '<br />';
//读取
/*
mysql_fetch_array($resource,/MYSQL_BOTH/MYSQL_NUM/MYSQL_ASSOC) ，第二个参数缺省为MYSQL_BOTH时，即返回带有关联数组和索引数组的一行数据
mysql_fetch_assoc($resource) ==> mysql_fetch_array($resource,MYSQL_ASSOC) //只返回关联数组
mysql_fetch_row($resource)  ==> mysql_fetch_array($resource,MYSQL_NUM) //只返回索引数组
*/

var_dump(mysql_fetch_array($resource)); //每读取一次，指针会向下移动一次，直到无数据 false
/* 
var_dump(mysql_fetch_row($resource));
var_dump(mysql_fetch_assoc($resource));
var_dump(mysql_fetch_assoc($resource));
var_dump(mysql_fetch_assoc($resource));
var_dump(mysql_fetch_assoc($resource));
var_dump(mysql_fetch_assoc($resource));
*/
while ($val = mysql_fetch_array($resource)) {
	echo ('id:'.$val['id'].'姓名：'.$val['name'].'<br />');
}





?>