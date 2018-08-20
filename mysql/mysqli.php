<?php
echo '<pre>';
$host = 'localhost';
$user = 'root';
$passwd = 'root';
$dbname = 'learn';
$port = '3306';
$char = 'utf8';
$que = 'select * from test';
$sql = @mysqli_connect($host,$user,$passwd,$dbname,$port);
if (mysqli_connect_error($sql)) {
	echo '数据库链接失败：'.mysqli_connect_errno().'：'.mysqli_connect_error().'<be />';
	exit;
} else {
	mysqli_set_charset($sql,$char);
}
function query($request) {
	while ($val = mysqli_fetch_assoc($request)) {  
	echo 'ID:'.$val['id'].'姓名：'.$val['name'].'年龄：'.$val['age'].'来自：'.$val['city'].'<br />';  //查询
	}
}
//查询数据
if ($re = mysqli_query($sql,$que)) {
	query($re);
	echo '<br />'.'查询到'.'<font color="red">'.mysqli_num_rows($re).'</font>'.'条数据';
} else {
	echo '错误提示：'.mysqli_error($sql);
}
echo '<hr />';
//删除数据
$que_del = 'delete from test where id = "4"';
var_dump(mysqli_query($sql,$que_del));

//插入数据
$que_add = "insert into test (id,name,age,city,grade) 
values('','寒冰射手',100,'德玛西亚',20)";
if (mysqli_query($sql,$que_add)) {
	echo '新增数据成功';
} else {
	echo ('新增数据失败'.mysqli_errno($sql).'：'.mysqli_error($sql));
}	

?>